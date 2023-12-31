<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sites = $this->siteList();

        foreach ($sites as $page) {
            $site = new \App\Models\Pagerank();
            $site->rank = $page["rank"];
            $site->domain = $page["rootDomain"];
            $site->save();
        }
    }

    private function siteList()
    {
        return [
            [
                "rank" => 1,
                "rootDomain" => "google.com",
                "linkingRootDomains" => 100,
                "domainAuthority" => 0
            ],
            [
                "rank" => 2,
                "rootDomain" => "youtube.com",
                "linkingRootDomains" => 100,
                "domainAuthority" => 0
            ],
            [
                "rank" => 3,
                "rootDomain" => "blogger.com",
                "linkingRootDomains" => 100,
                "domainAuthority" => 0
            ],
            [
                "rank" => 4,
                "rootDomain" => "apple.com",
                "linkingRootDomains" => 99,
                "domainAuthority" => 0
            ],
            [
                "rank" => 5,
                "rootDomain" => "linkedin.com",
                "linkingRootDomains" => 99,
                "domainAuthority" => 0
            ],
            [
                "rank" => 6,
                "rootDomain" => "microsoft.com",
                "linkingRootDomains" => 99,
                "domainAuthority" => 0
            ],
            [
                "rank" => 7,
                "rootDomain" => "wordpress.org",
                "linkingRootDomains" => 99,
                "domainAuthority" => 0
            ],
            [
                "rank" => 8,
                "rootDomain" => "support.google.com",
                "linkingRootDomains" => 99,
                "domainAuthority" => 0
            ],
            [
                "rank" => 9,
                "rootDomain" => "mozilla.org",
                "linkingRootDomains" => 98,
                "domainAuthority" => 0
            ],
            [
                "rank" => 10,
                "rootDomain" => "cloudflare.com",
                "linkingRootDomains" => 98,
                "domainAuthority" => 0
            ],
            [
                "rank" => 11,
                "rootDomain" => "docs.google.com",
                "linkingRootDomains" => 98,
                "domainAuthority" => 0
            ],
            [
                "rank" => 12,
                "rootDomain" => "maps.google.com",
                "linkingRootDomains" => 98,
                "domainAuthority" => 0
            ],
            [
                "rank" => 13,
                "rootDomain" => "youtu.be",
                "linkingRootDomains" => 98,
                "domainAuthority" => 0
            ],
            [
                "rank" => 14,
                "rootDomain" => "play.google.com",
                "linkingRootDomains" => 98,
                "domainAuthority" => 0
            ],
            [
                "rank" => 15,
                "rootDomain" => "en.wikipedia.org",
                "linkingRootDomains" => 98,
                "domainAuthority" => 0
            ],
            [
                "rank" => 16,
                "rootDomain" => "adobe.com",
                "linkingRootDomains" => 97,
                "domainAuthority" => 0
            ],
            [
                "rank" => 17,
                "rootDomain" => "accounts.google.com",
                "linkingRootDomains" => 97,
                "domainAuthority" => 0
            ],
            [
                "rank" => 18,
                "rootDomain" => "plus.google.com",
                "linkingRootDomains" => 97,
                "domainAuthority" => 0
            ],
            [
                "rank" => 19,
                "rootDomain" => "sites.google.com",
                "linkingRootDomains" => 97,
                "domainAuthority" => 0
            ],
            [
                "rank" => 20,
                "rootDomain" => "whatsapp.com",
                "linkingRootDomains" => 97,
                "domainAuthority" => 0
            ],
            [
                "rank" => 21,
                "rootDomain" => "europa.eu",
                "linkingRootDomains" => 97,
                "domainAuthority" => 0
            ],
            [
                "rank" => 22,
                "rootDomain" => "bp.blogspot.com",
                "linkingRootDomains" => 97,
                "domainAuthority" => 0
            ],
            [
                "rank" => 23,
                "rootDomain" => "drive.google.com",
                "linkingRootDomains" => 97,
                "domainAuthority" => 0
            ],
            [
                "rank" => 24,
                "rootDomain" => "googleusercontent.com",
                "linkingRootDomains" => 97,
                "domainAuthority" => 0
            ],
            [
                "rank" => 25,
                "rootDomain" => "vimeo.com",
                "linkingRootDomains" => 96,
                "domainAuthority" => 0
            ],
            [
                "rank" => 26,
                "rootDomain" => "t.me",
                "linkingRootDomains" => 96,
                "domainAuthority" => 0
            ],
            [
                "rank" => 27,
                "rootDomain" => "amazon.com",
                "linkingRootDomains" => 96,
                "domainAuthority" => 0
            ],
            [
                "rank" => 28,
                "rootDomain" => "facebook.com",
                "linkingRootDomains" => 96,
                "domainAuthority" => 0
            ],
            [
                "rank" => 29,
                "rootDomain" => "istockphoto.com",
                "linkingRootDomains" => 96,
                "domainAuthority" => 0
            ],
            [
                "rank" => 30,
                "rootDomain" => "uol.com.br",
                "linkingRootDomains" => 96,
                "domainAuthority" => 0
            ],
            [
                "rank" => 31,
                "rootDomain" => "vk.com",
                "linkingRootDomains" => 96,
                "domainAuthority" => 0
            ],
            [
                "rank" => 32,
                "rootDomain" => "policies.google.com",
                "linkingRootDomains" => 96,
                "domainAuthority" => 0
            ],
            [
                "rank" => 33,
                "rootDomain" => "github.com",
                "linkingRootDomains" => 96,
                "domainAuthority" => 0
            ],
            [
                "rank" => 34,
                "rootDomain" => "opera.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 35,
                "rootDomain" => "dropbox.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 36,
                "rootDomain" => "fr.wikipedia.org",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 37,
                "rootDomain" => "medium.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 38,
                "rootDomain" => "line.me",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 39,
                "rootDomain" => "es.wikipedia.org",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 40,
                "rootDomain" => "workspace.google.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 41,
                "rootDomain" => "ok.ru",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 42,
                "rootDomain" => "pt.wikipedia.org",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 43,
                "rootDomain" => "myspace.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 44,
                "rootDomain" => "shopify.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 45,
                "rootDomain" => "gstatic.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 46,
                "rootDomain" => "search.google.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 47,
                "rootDomain" => "google.com.br",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 48,
                "rootDomain" => "live.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 49,
                "rootDomain" => "gravatar.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 50,
                "rootDomain" => "developers.google.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 51,
                "rootDomain" => "yahoo.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 52,
                "rootDomain" => "imdb.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 53,
                "rootDomain" => "google.es",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 54,
                "rootDomain" => "msn.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 55,
                "rootDomain" => "dailymotion.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 56,
                "rootDomain" => "google.de",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 57,
                "rootDomain" => "globo.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 58,
                "rootDomain" => "tiktok.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 59,
                "rootDomain" => "theguardian.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 60,
                "rootDomain" => "bbc.co.uk",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 61,
                "rootDomain" => "slideshare.net",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 62,
                "rootDomain" => "forbes.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 63,
                "rootDomain" => "wa.me",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 64,
                "rootDomain" => "feedburner.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 65,
                "rootDomain" => "tools.google.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 66,
                "rootDomain" => "mail.google.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 67,
                "rootDomain" => "draft.blogger.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 68,
                "rootDomain" => "paypal.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 69,
                "rootDomain" => "google.co.jp",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 70,
                "rootDomain" => "nytimes.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 71,
                "rootDomain" => "cpanel.net",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 72,
                "rootDomain" => "brandbucket.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 73,
                "rootDomain" => "files.wordpress.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 74,
                "rootDomain" => "weebly.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 75,
                "rootDomain" => "cnn.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 76,
                "rootDomain" => "jimdofree.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 77,
                "rootDomain" => "news.google.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 78,
                "rootDomain" => "wikimedia.org",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 79,
                "rootDomain" => "enable-javascript.com",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 80,
                "rootDomain" => "creativecommons.org",
                "linkingRootDomains" => 95,
                "domainAuthority" => 0
            ],
            [
                "rank" => 81,
                "rootDomain" => "networkadvertising.org",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 82,
                "rootDomain" => "mediafire.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 83,
                "rootDomain" => "google.co.uk",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 84,
                "rootDomain" => "cbsnews.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 85,
                "rootDomain" => "webmd.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 86,
                "rootDomain" => "thesun.co.uk",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 87,
                "rootDomain" => "nature.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 88,
                "rootDomain" => "huffingtonpost.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 89,
                "rootDomain" => "netvibes.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 90,
                "rootDomain" => "mirror.co.uk",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 91,
                "rootDomain" => "plesk.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 92,
                "rootDomain" => "mail.ru",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 93,
                "rootDomain" => "hatena.ne.jp",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 94,
                "rootDomain" => "marketingplatform.google....",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 95,
                "rootDomain" => "w3.org",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 96,
                "rootDomain" => "nih.gov",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 97,
                "rootDomain" => "washingtonpost.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 98,
                "rootDomain" => "namecheap.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 99,
                "rootDomain" => "pinterest.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 100,
                "rootDomain" => "independent.co.uk",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 101,
                "rootDomain" => "forms.gle",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 102,
                "rootDomain" => "telegraph.co.uk",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 103,
                "rootDomain" => "gov.br",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 104,
                "rootDomain" => "planalto.gov.br",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 105,
                "rootDomain" => "nginx.org",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 106,
                "rootDomain" => "change.org",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 107,
                "rootDomain" => "myaccount.google.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 108,
                "rootDomain" => "archive.org",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 109,
                "rootDomain" => "hugedomains.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 110,
                "rootDomain" => "ytimg.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 111,
                "rootDomain" => "goo.gl",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 112,
                "rootDomain" => "get.google.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 113,
                "rootDomain" => "shutterstock.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 114,
                "rootDomain" => "de.wikipedia.org",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 115,
                "rootDomain" => "reuters.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 116,
                "rootDomain" => "booking.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 117,
                "rootDomain" => "time.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 118,
                "rootDomain" => "office.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 119,
                "rootDomain" => "dailymail.co.uk",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 120,
                "rootDomain" => "t.co",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 121,
                "rootDomain" => "dan.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 122,
                "rootDomain" => "gov.uk",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 123,
                "rootDomain" => "amazon.co.jp",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 124,
                "rootDomain" => "wp.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 125,
                "rootDomain" => "huffpost.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 126,
                "rootDomain" => "spotify.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 127,
                "rootDomain" => "adssettings.google.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 128,
                "rootDomain" => "instagram.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 129,
                "rootDomain" => "domainmarket.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 130,
                "rootDomain" => "indiatimes.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 131,
                "rootDomain" => "researchgate.net",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 132,
                "rootDomain" => "cdc.gov",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 133,
                "rootDomain" => "wiley.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 134,
                "rootDomain" => "fb.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 135,
                "rootDomain" => "bing.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 136,
                "rootDomain" => "bbc.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 137,
                "rootDomain" => "soundcloud.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 138,
                "rootDomain" => "google.it",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 139,
                "rootDomain" => "cnet.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 140,
                "rootDomain" => "bloomberg.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 141,
                "rootDomain" => "samsung.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 142,
                "rootDomain" => "amazon.de",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 143,
                "rootDomain" => "aboutads.info",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 144,
                "rootDomain" => "fandom.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 145,
                "rootDomain" => "photos.google.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 146,
                "rootDomain" => "aliexpress.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 147,
                "rootDomain" => "storage.googleapis.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 148,
                "rootDomain" => "estadao.com.br",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 149,
                "rootDomain" => "scribd.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 150,
                "rootDomain" => "usatoday.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 151,
                "rootDomain" => "discord.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 152,
                "rootDomain" => "list-manage.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 153,
                "rootDomain" => "pixabay.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 154,
                "rootDomain" => "tinyurl.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 155,
                "rootDomain" => "nasa.gov",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 156,
                "rootDomain" => "twitter.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 157,
                "rootDomain" => "wsj.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 158,
                "rootDomain" => "buydomains.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 159,
                "rootDomain" => "abril.com.br",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 160,
                "rootDomain" => "telegram.me",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 161,
                "rootDomain" => "foxnews.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 162,
                "rootDomain" => "ru.wikipedia.org",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 163,
                "rootDomain" => "amazon.co.uk",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 164,
                "rootDomain" => "4shared.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 165,
                "rootDomain" => "picasaweb.google.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 166,
                "rootDomain" => "un.org",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 167,
                "rootDomain" => "news.yahoo.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 168,
                "rootDomain" => "businessinsider.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 169,
                "rootDomain" => "elpais.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 170,
                "rootDomain" => "ig.com.br",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 171,
                "rootDomain" => "bit.ly",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 172,
                "rootDomain" => "issuu.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 173,
                "rootDomain" => "google.fr",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 174,
                "rootDomain" => "afternic.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 175,
                "rootDomain" => "who.int",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 176,
                "rootDomain" => "youronlinechoices.com",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 177,
                "rootDomain" => "terra.com.br",
                "linkingRootDomains" => 94,
                "domainAuthority" => 0
            ],
            [
                "rank" => 178,
                "rootDomain" => "pinterest.fr",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 179,
                "rootDomain" => "mega.nz",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 180,
                "rootDomain" => "calendar.google.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 181,
                "rootDomain" => "tmz.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 182,
                "rootDomain" => "usnews.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 183,
                "rootDomain" => "urbandictionary.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 184,
                "rootDomain" => "rakuten.co.jp",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 185,
                "rootDomain" => "fb.me",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 186,
                "rootDomain" => "alibaba.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 187,
                "rootDomain" => "lemonde.fr",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 188,
                "rootDomain" => "huawei.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 189,
                "rootDomain" => "oup.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 190,
                "rootDomain" => "economist.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 191,
                "rootDomain" => "arxiv.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 192,
                "rootDomain" => "amazon.es",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 193,
                "rootDomain" => "google.ca",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 194,
                "rootDomain" => "berkeley.edu",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 195,
                "rootDomain" => "latimes.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 196,
                "rootDomain" => "imageshack.us",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 197,
                "rootDomain" => "steampowered.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 198,
                "rootDomain" => "bloglovin.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 199,
                "rootDomain" => "amazonaws.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 200,
                "rootDomain" => "ovh.net",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 201,
                "rootDomain" => "deezer.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 202,
                "rootDomain" => "newsweek.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 203,
                "rootDomain" => "instructables.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 204,
                "rootDomain" => "it.wikipedia.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 205,
                "rootDomain" => "ouest-france.fr",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 206,
                "rootDomain" => "yadi.sk",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 207,
                "rootDomain" => "over-blog.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 208,
                "rootDomain" => "plos.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 209,
                "rootDomain" => "groups.google.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 210,
                "rootDomain" => "pl.wikipedia.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 211,
                "rootDomain" => "ovh.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 212,
                "rootDomain" => "wikipedia.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 213,
                "rootDomain" => "abcnews.go.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 214,
                "rootDomain" => "lefigaro.fr",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 215,
                "rootDomain" => "dropcatch.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 216,
                "rootDomain" => "google.nl",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 217,
                "rootDomain" => "skype.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 218,
                "rootDomain" => "thetimes.co.uk",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 219,
                "rootDomain" => "vkontakte.ru",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 220,
                "rootDomain" => "welt.de",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 221,
                "rootDomain" => "zdf.de",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 222,
                "rootDomain" => "gmail.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 223,
                "rootDomain" => "mystrikingly.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 224,
                "rootDomain" => "clarin.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 225,
                "rootDomain" => "disney.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 226,
                "rootDomain" => "picasa.google.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 227,
                "rootDomain" => "akamaihd.net",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 228,
                "rootDomain" => "eventbrite.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 229,
                "rootDomain" => "smh.com.au",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 230,
                "rootDomain" => "wikihow.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 231,
                "rootDomain" => "stanford.edu",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 232,
                "rootDomain" => "playstation.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 233,
                "rootDomain" => "rambler.ru",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 234,
                "rootDomain" => "doi.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 235,
                "rootDomain" => "themeforest.net",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 236,
                "rootDomain" => "twitch.tv",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 237,
                "rootDomain" => "000webhost.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 238,
                "rootDomain" => "ibm.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 239,
                "rootDomain" => "ted.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 240,
                "rootDomain" => "offset.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 241,
                "rootDomain" => "ietf.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 242,
                "rootDomain" => "whitehouse.gov",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 243,
                "rootDomain" => "linktr.ee",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 244,
                "rootDomain" => "amzn.to",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 245,
                "rootDomain" => "aol.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 246,
                "rootDomain" => "mashable.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 247,
                "rootDomain" => "hp.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 248,
                "rootDomain" => "books.google.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 249,
                "rootDomain" => "canada.ca",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 250,
                "rootDomain" => "engadget.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 251,
                "rootDomain" => "google.ru",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 252,
                "rootDomain" => "sfgate.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 253,
                "rootDomain" => "photos1.blogger.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 254,
                "rootDomain" => "sciencedirect.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 255,
                "rootDomain" => "privacyshield.gov",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 256,
                "rootDomain" => "home.pl",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 257,
                "rootDomain" => "ggpht.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 258,
                "rootDomain" => "elmundo.es",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 259,
                "rootDomain" => "mit.edu",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 260,
                "rootDomain" => "wired.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 261,
                "rootDomain" => "m.wikipedia.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 262,
                "rootDomain" => "zippyshare.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 263,
                "rootDomain" => "freepik.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 264,
                "rootDomain" => "windows.net",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 265,
                "rootDomain" => "academia.edu",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 266,
                "rootDomain" => "marca.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 267,
                "rootDomain" => "id.wikipedia.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 268,
                "rootDomain" => "bandcamp.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 269,
                "rootDomain" => "wikia.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 270,
                "rootDomain" => "finance.yahoo.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 271,
                "rootDomain" => "cointernet.com.co",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 272,
                "rootDomain" => "e-monsite.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 273,
                "rootDomain" => "yandex.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 274,
                "rootDomain" => "gooyaabitemplates.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 275,
                "rootDomain" => "nbcnews.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 276,
                "rootDomain" => "ssl-images-amazon.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 277,
                "rootDomain" => "abc.es",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 278,
                "rootDomain" => "alexa.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 279,
                "rootDomain" => "ft.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 280,
                "rootDomain" => "netflix.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 281,
                "rootDomain" => "addthis.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 282,
                "rootDomain" => "ca.gov",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 283,
                "rootDomain" => "android.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 284,
                "rootDomain" => "detik.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 285,
                "rootDomain" => "nydailynews.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 286,
                "rootDomain" => "surveymonkey.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 287,
                "rootDomain" => "cpanel.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 288,
                "rootDomain" => "webnode.page",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 289,
                "rootDomain" => "naver.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 290,
                "rootDomain" => "sakura.ne.jp",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 291,
                "rootDomain" => "aljazeera.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 292,
                "rootDomain" => "yandex.ru",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 293,
                "rootDomain" => "gofundme.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 294,
                "rootDomain" => "kickstarter.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 295,
                "rootDomain" => "cornell.edu",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 296,
                "rootDomain" => "timeweb.ru",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 297,
                "rootDomain" => "zoom.us",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 298,
                "rootDomain" => "espn.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 299,
                "rootDomain" => "dw.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 300,
                "rootDomain" => "liveinternet.ru",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 301,
                "rootDomain" => "ebay.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 302,
                "rootDomain" => "techcrunch.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 303,
                "rootDomain" => "alicdn.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 304,
                "rootDomain" => "prezi.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 305,
                "rootDomain" => "google.pl",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 306,
                "rootDomain" => "nikkei.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 307,
                "rootDomain" => "walmart.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 308,
                "rootDomain" => "rtve.es",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 309,
                "rootDomain" => "20minutos.es",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 310,
                "rootDomain" => "springer.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 311,
                "rootDomain" => "cambridge.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 312,
                "rootDomain" => "target.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 313,
                "rootDomain" => "pexels.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 314,
                "rootDomain" => "guardian.co.uk",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 315,
                "rootDomain" => "pbs.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 316,
                "rootDomain" => "addtoany.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 317,
                "rootDomain" => "hubspot.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 318,
                "rootDomain" => "abc.net.au",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 319,
                "rootDomain" => "tripadvisor.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 320,
                "rootDomain" => "rapidshare.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 321,
                "rootDomain" => "ea.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 322,
                "rootDomain" => "oracle.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 323,
                "rootDomain" => "code.google.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 324,
                "rootDomain" => "dreamstime.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 325,
                "rootDomain" => "php.net",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 326,
                "rootDomain" => "newyorker.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 327,
                "rootDomain" => "ria.ru",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 328,
                "rootDomain" => "cnil.fr",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 329,
                "rootDomain" => "standard.co.uk",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 330,
                "rootDomain" => "rt.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 331,
                "rootDomain" => "taringa.net",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 332,
                "rootDomain" => "outlook.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 333,
                "rootDomain" => "ikea.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 334,
                "rootDomain" => "loc.gov",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 335,
                "rootDomain" => "clickbank.net",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 336,
                "rootDomain" => "qq.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 337,
                "rootDomain" => "francetvinfo.fr",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 338,
                "rootDomain" => "gnu.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 339,
                "rootDomain" => "cnbc.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 340,
                "rootDomain" => "disqus.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 341,
                "rootDomain" => "hollywoodreporter.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 342,
                "rootDomain" => "npr.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 343,
                "rootDomain" => "buzzfeed.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 344,
                "rootDomain" => "unsplash.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 345,
                "rootDomain" => "wix.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 346,
                "rootDomain" => "nginx.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 347,
                "rootDomain" => "godaddy.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 348,
                "rootDomain" => "canalblog.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 349,
                "rootDomain" => "photobucket.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 350,
                "rootDomain" => "zendesk.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 351,
                "rootDomain" => "apache.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 352,
                "rootDomain" => "biglobe.ne.jp",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 353,
                "rootDomain" => "quora.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 354,
                "rootDomain" => "cbc.ca",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 355,
                "rootDomain" => "translate.google.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 356,
                "rootDomain" => "britannica.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 357,
                "rootDomain" => "sendspace.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 358,
                "rootDomain" => "xinhuanet.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 359,
                "rootDomain" => "washington.edu",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 360,
                "rootDomain" => "gizmodo.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 361,
                "rootDomain" => "yahoo.co.jp",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 362,
                "rootDomain" => "nicovideo.jp",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 363,
                "rootDomain" => "hindustantimes.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 364,
                "rootDomain" => "yelp.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 365,
                "rootDomain" => "amazon.fr",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 366,
                "rootDomain" => "harvard.edu",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 367,
                "rootDomain" => "search.yahoo.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 368,
                "rootDomain" => "weibo.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 369,
                "rootDomain" => "psychologytoday.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 370,
                "rootDomain" => "nationalgeographic.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 371,
                "rootDomain" => "googleblog.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 372,
                "rootDomain" => "livejournal.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 373,
                "rootDomain" => "discord.gg",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 374,
                "rootDomain" => "sky.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 375,
                "rootDomain" => "goodreads.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 376,
                "rootDomain" => "nypost.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 377,
                "rootDomain" => "ovhcloud.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 378,
                "rootDomain" => "theatlantic.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 379,
                "rootDomain" => "icann.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 380,
                "rootDomain" => "vice.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 381,
                "rootDomain" => "unesco.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 382,
                "rootDomain" => "variety.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 383,
                "rootDomain" => "redbull.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 384,
                "rootDomain" => "bp1.blogger.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 385,
                "rootDomain" => "sapo.pt",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 386,
                "rootDomain" => "ziddu.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 387,
                "rootDomain" => "mozilla.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 388,
                "rootDomain" => "sedo.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 389,
                "rootDomain" => "netlify.app",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 390,
                "rootDomain" => "ipv4.google.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 391,
                "rootDomain" => "ftc.gov",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 392,
                "rootDomain" => "thenai.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 393,
                "rootDomain" => "sputniknews.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 394,
                "rootDomain" => "amazon.it",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 395,
                "rootDomain" => "insider.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 396,
                "rootDomain" => "bp2.blogger.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 397,
                "rootDomain" => "express.co.uk",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 398,
                "rootDomain" => "lavanguardia.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 399,
                "rootDomain" => "reg.ru",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 400,
                "rootDomain" => "theverge.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 401,
                "rootDomain" => "about.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 402,
                "rootDomain" => "ja.wikipedia.org",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 403,
                "rootDomain" => "spiegel.de",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 404,
                "rootDomain" => "sciencedaily.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 405,
                "rootDomain" => "elsevier.com",
                "linkingRootDomains" => 93,
                "domainAuthority" => 0
            ],
            [
                "rank" => 406,
                "rootDomain" => "tes.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 407,
                "rootDomain" => "newscientist.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 408,
                "rootDomain" => "stuff.co.nz",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 409,
                "rootDomain" => "123rf.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 410,
                "rootDomain" => "thehill.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 411,
                "rootDomain" => "reverbnation.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 412,
                "rootDomain" => "excite.co.jp",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 413,
                "rootDomain" => "unicef.org",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 414,
                "rootDomain" => "waze.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 415,
                "rootDomain" => "noaa.gov",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 416,
                "rootDomain" => "focus.de",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 417,
                "rootDomain" => "bfmtv.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 418,
                "rootDomain" => "google.co.in",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 419,
                "rootDomain" => "marriott.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 420,
                "rootDomain" => "sports.yahoo.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 421,
                "rootDomain" => "barnesandnoble.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 422,
                "rootDomain" => "yale.edu",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 423,
                "rootDomain" => "onamae.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 424,
                "rootDomain" => "amazon.in",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 425,
                "rootDomain" => "kotaku.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 426,
                "rootDomain" => "thestar.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 427,
                "rootDomain" => "pornhub.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 428,
                "rootDomain" => "marketwatch.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 429,
                "rootDomain" => "wallpapers.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 430,
                "rootDomain" => "usgs.gov",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 431,
                "rootDomain" => "last.fm",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 432,
                "rootDomain" => "slate.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 433,
                "rootDomain" => "mailchi.mp",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 434,
                "rootDomain" => "a8.net",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 435,
                "rootDomain" => "telegra.ph",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 436,
                "rootDomain" => "amazon.ca",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 437,
                "rootDomain" => "cisco.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 438,
                "rootDomain" => "intel.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 439,
                "rootDomain" => "ads.google.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 440,
                "rootDomain" => "cbslocal.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 441,
                "rootDomain" => "typeform.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 442,
                "rootDomain" => "cutt.ly",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 443,
                "rootDomain" => "biblegateway.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 444,
                "rootDomain" => "fifa.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 445,
                "rootDomain" => "qz.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 446,
                "rootDomain" => "scholastic.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 447,
                "rootDomain" => "mynavi.jp",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 448,
                "rootDomain" => "weforum.org",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 449,
                "rootDomain" => "rottentomatoes.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 450,
                "rootDomain" => "public-api.wordpress.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 451,
                "rootDomain" => "dell.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 452,
                "rootDomain" => "ieee.org",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 453,
                "rootDomain" => "house.gov",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 454,
                "rootDomain" => "force.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 455,
                "rootDomain" => "archives.gov",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 456,
                "rootDomain" => "indianexpress.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 457,
                "rootDomain" => "teamviewer.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 458,
                "rootDomain" => "blog.fc2.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 459,
                "rootDomain" => "worldbank.org",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 460,
                "rootDomain" => "giphy.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 461,
                "rootDomain" => "dailystar.co.uk",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 462,
                "rootDomain" => "prnewswire.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 463,
                "rootDomain" => "naver.jp",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 464,
                "rootDomain" => "xbox.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 465,
                "rootDomain" => "radiofrance.fr",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 466,
                "rootDomain" => "repubblica.it",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 467,
                "rootDomain" => "discogs.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 468,
                "rootDomain" => "ap.org",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 469,
                "rootDomain" => "ovh.co.uk",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 470,
                "rootDomain" => "indiegogo.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 471,
                "rootDomain" => "unam.mx",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 472,
                "rootDomain" => "m.me",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 473,
                "rootDomain" => "digg.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 474,
                "rootDomain" => "bestfreecams.club",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 475,
                "rootDomain" => "amebaownd.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 476,
                "rootDomain" => "pcmag.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 477,
                "rootDomain" => "usda.gov",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 478,
                "rootDomain" => "foursquare.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 479,
                "rootDomain" => "wisc.edu",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 480,
                "rootDomain" => "nl.wikipedia.org",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 481,
                "rootDomain" => "thefreedictionary.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 482,
                "rootDomain" => "bp3.blogger.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 483,
                "rootDomain" => "chinadaily.com.cn",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 484,
                "rootDomain" => "trustpilot.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 485,
                "rootDomain" => "ameblo.jp",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 486,
                "rootDomain" => "sina.com.cn",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 487,
                "rootDomain" => "utexas.edu",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 488,
                "rootDomain" => "bild.de",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 489,
                "rootDomain" => "ndtv.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 490,
                "rootDomain" => "fortune.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 491,
                "rootDomain" => "bp0.blogger.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 492,
                "rootDomain" => "news.com.au",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 493,
                "rootDomain" => "euronews.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 494,
                "rootDomain" => "esa.int",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 495,
                "rootDomain" => "privacy.google.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 496,
                "rootDomain" => "redhat.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 497,
                "rootDomain" => "daaz.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 498,
                "rootDomain" => "udemy.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 499,
                "rootDomain" => "lycos.com",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ],
            [
                "rank" => 500,
                "rootDomain" => "greenpeace.org",
                "linkingRootDomains" => 92,
                "domainAuthority" => 0
            ]
        ];
    }
}
