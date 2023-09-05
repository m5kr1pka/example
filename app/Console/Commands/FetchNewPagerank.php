<?php

namespace App\Console\Commands;

use App\Jobs\FetchRank;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class FetchNewPagerank extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-new-pagerank';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch rank from OpenPageRank';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        FetchRank::dispatch();

        Log::channel('stderr')->info('Something happened!');
        return Command::SUCCESS;
    }
}
