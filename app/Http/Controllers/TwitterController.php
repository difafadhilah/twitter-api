<?php

namespace App\Http\Controllers;

use App\Services\TwitterService;

class TwitterController extends Controller
{
    protected $twitterService;

    public function __construct(TwitterService $twitterService)
    {
        $this->twitterService = $twitterService;
    }

    public function index()
    {
        $tweets = $this->twitterService->searchCommunitiesLatest('superman');

        return view('twitter.index', compact('tweets'));
    }
}
