<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TwitterService
{
    protected $apiUrl = 'https://twitter-api45.p.rapidapi.com/search_communities_latest.php';

    public function searchCommunitiesLatest($query)
    {
        $response = Http::withHeaders([
            'x-rapidapi-host' => env('RAPIDAPI_HOST'),
            'x-rapidapi-key' => env('RAPIDAPI_KEY'),
        ])->get($this->apiUrl, [
            'query' => $query,
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}
