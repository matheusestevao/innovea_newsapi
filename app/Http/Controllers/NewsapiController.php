<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsapiEverythingRequest;
use App\Http\Requests\NewsapiTopHeadlinesRequest;
use App\Http\Requests\NewsapiTopHeadlinesSourcesRequest;
use App\Services\NewsapiService;
use Illuminate\Http\Request;

class NewsapiController extends Controller
{
    public function __construct(
        NewsapiService $newsapi
    )
    {
        $this->newsapi = $newsapi;
    }
    
    public function index()
    {
        $sources = $this->newsapi->setSources();
        $languages = $this->newsapi->setLanguages();
        $articleClassifications = $this->newsapi->setArticleClassifications();

        return view('articles.index', 
                compact(
                    'sources', 
                    'languages', 
                    'articleClassifications'
                )
            );
    }

    public function everything(NewsapiEverythingRequest $request)
    {
        return $this->newsapi->getEverything(... $request->validated());
    }
    
    public function topHeadlines(NewsapiTopHeadlinesRequest $request)
    {
        return $this->newsapi->getTopHeadlines(... $request->validated());
    }

    public function topHeadlinesSources(NewsapiTopHeadlinesSourcesRequest $request)
    {
        return $this->newsapi->getTopHeadlines(... $request->validated());
    }
}
