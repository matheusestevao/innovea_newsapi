<?php

namespace  App\Services;

use App\Models\ArticleClassification;
use App\Models\Category;
use App\Models\Language;
use App\Models\SearchIn;
use App\Models\Source;
use Illuminate\Support\Facades\Http;

class NewsapiService
{
    public function setLanguages()
    {
        return Language::orderBy('name', 'asc')->get();
    }

    public function setArticleClassifications()
    {
        return ArticleClassification::orderBy('name', 'asc')->get();
    }

    public function setSources()
    {
        return Source::orderBy('name', 'asc')->get();
    }

    public function setSearchIns()
    {
        return SearchIn::orderBy('name', 'asc')->get();
    }

    public function setCategories()
    {
        return Category::orderBy('name', 'asc')->get();
    }

    public function getEverything(
        string $q,
        ?string $searchIn = null,
        ?string $domains = null,
        ?string $excludeDomains = null,
        ?string $from = null,
        ?string $to = null,
        ?string $language = null,
        ?string $sortBy = null,
        ?int $pageSize = null,
        ?int $page = null
    )
    {
        $params = array_filter(get_defined_vars());
        
        return Http::newsapi()
                    ->get('everything', $params);
    }

    public function getTopHeadlines(
        ?string $country = null,
        ?string $category = null,
        ?string $q = null
    )
    {
        $params = array_filter(get_defined_vars());

        return Http::newsapi()
                    ->get('top-headlines', $params);
    }

    public function getTopHeadlinesSources(
        ?string $category = null,
        ?string $language = null,
        ?string $country = null
    )
    {
        $params = array_filter(get_defined_vars());

        return Http::newsapi()
                    ->get('top-headlines/sources', $params);
    }
}
