<?php

namespace App\Jobs;

use App\Models\Pagerank;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FetchRank implements ShouldQueue, ShouldBeUnique
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Log::channel('stderr')->info('::: START of Fetching from OpenPageRank :::');

        Pagerank::chunk(100, function (Collection $domains) {
            $d = $domains->map(function (Pagerank $user) {
                return $user->domain;
            });

            $url = env("OPEN_PAGE_RANK_URL");
            $key = env("OPEN_PAGE_RANK_KEY");
            $query = http_build_query(array(
                'domains' => $d->toArray()
            ));

            $response = Http::withHeaders(["API-OPR" => $key])->get($url, $query);
            $data = collect(json_decode($response->body(), true)["response"])
                ->map(function ($domain) {
                    return [
                        "rank" => $domain["rank"],
                        "domain" => $domain["domain"],
                        "page_rank_integer" => $domain["page_rank_integer"],
                        "page_rank_decimal" => $domain["page_rank_decimal"]
                    ];
                })
                ->toArray();

            DB::transaction(function () use ($data) {
                foreach ($data as $item) {
                    Pagerank::where(['domain' => $item["domain"]])
                        ->update([
                            'rank' => $item["rank"],
                            'page_rank_integer' => $item["page_rank_integer"],
                            'page_rank_decimal' => $item["page_rank_decimal"]
                        ]);
                }
            });
        });

        Log::channel('stderr')->info('::: END of Fetching from OpenPageRank :::');
    }
}
