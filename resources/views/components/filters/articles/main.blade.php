<div class="row pt-3 pb-2 mb-3">
    <div class="col-md-6">
        &nbsp;
    </div>
    <div class="col-md-6 border border-3 pb-2">
        <div class="accordion accordion-flush" id="accordionFilterArticles">
            <div class="accordion-item">
                <h1 class="accordion-header" id="flush-headingOne">
                    <button 
                        class="accordion-button collapsed" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#flush-collapseOne" 
                        aria-expanded="false" 
                        aria-controls="flush-collapseOne"
                    >
                        @lang('general.filter')
                    </button>
                </h1>
                <div 
                    id="flush-collapseOne"
                    class="accordion-collapse collapse" 
                    aria-labelledby="flush-headingOne" 
                    data-bs-parent="#accordionFilterArticles"
                >
                    <div class="form-floating d-none">
                        <select class="form-select mt-2 reference-search" name="reference-search" id="floatingReference">
                            <option value="">@lang('general.select')</option>
                            <option value="1" selected>@lang('newsapi.all_kinds')</option>
                            <option value="2">@lang('newsapi.top_headlines')</option>
                        </select>
                        <label for="floatingReference">@lang('newsapi.what_kind_of_news_are_you_looking_for')</label>
                    </div>
                    
                    <x-filters.articles.everything
                        :searchIns="$searchIns"
                        :languages="$languages"
                        :articleClassifications="$articleClassifications"
                    />
                    <x-filters.articles.top-headlines 
                        :languages="$languages"
                        :sources="$sources"
                        :categories="$categories"    
                    />
        
                    <div class="col-md-12 mt-2" dir="rtl">
                        <button type="submit" class="btn btn-primary search-news">
                            <span class="text-default-btn">@lang('general.filter')</span>
                            <span class="spinner-border spinner-border-sm d-none effect-btn" role="status" aria-hidden="true"></span>
                            <span class="text-spinner-button d-none">@lang('general.loading')</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
