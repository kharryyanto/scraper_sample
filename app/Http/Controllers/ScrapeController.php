<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Carbon\Carbon;
use Symfony\Component\DomCrawler\Crawler;

class ScrapeController extends Controller
{
    public function scrape(Request $request) {

        // Get url param
        $url = $request->get(key: 'url');
        
        // Init Goutte client
        $client = new Client();

        // Get page
        $crawler = $client->request('GET', $url);

        // Get status code  
        // $status_code = $client->getResponse()->getStatusCode();

        // Get title
        $page_title = $crawler->filter('title')->text();

        // Get meta description
        $meta_description = $crawler->filter('meta[name="description"]')->attr('content');

        // Get current time
        $cur_time = Carbon::now()->toDateTimeString();

        // Get screenshot
        $api_response = file_get_contents("https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=$url");
        $result = json_decode($api_response, true);
        $screenshot = $result['lighthouseResult']['audits']['final-screenshot']['details']['data'];

        $compactData = array('url', 'page_title', 'meta_description', 'cur_time', 'screenshot');
        return view('result', compact($compactData));
    }

    public function details(Request $request) {

        // Get url param
        $url = $request->get(key: 'url');
        
        // Init Goutte client
        $client = new Client();

        // Get page
        $crawler = $client->request('GET', $url);

        // Get status code  
        // $status_code = $client->getResponse()->getStatusCode();

        // Get title
        $page_title = $crawler->filter('title')->text();

        // Get meta description
        $meta_description = $crawler->filter('meta[name="description"]')->attr('content');

        // Get current time
        $cur_time = Carbon::now()->toDateTimeString();

        // Get screenshot
        $api_response = file_get_contents("https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=$url");
        $result = json_decode($api_response, true);
        $screenshot = $result['lighthouseResult']['audits']['final-screenshot']['details']['data'];

        // Get body

        $body_pars = $crawler->filter('body')->filter('p')->each(function (Crawler $node, $i) {
            return $node->text();
        });

        $compact_data = array('url', 'page_title', 'meta_description', 'cur_time', 'body_pars', 'screenshot');

        return view('detail', compact($compact_data));
    }
}
