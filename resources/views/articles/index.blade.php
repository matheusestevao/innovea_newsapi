<x-layout
    title="News API"
>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <x-filters.articles.main 
            :searchIns="$searchIns"
            :languages="$languages"
            :articleClassifications="$articleClassifications"
            :sources="$sources"
            :categories="$categories"
        />
        
        <div class="pt-3 pb-2 mb-3 d-none section-list-news">
            <h2>{{ strtoupper(__('general.news')) }}</h2>
            <div class="table-responsive">
                <table class="display table table-striped border table-sm text-center" id="news" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">@lang('newsapi.title')</th>
                            <th scope="col" class="text-center">@lang('newsapi.description')</th>
                            <th scope="col" class="text-center">@lang('newsapi.author')</th>
                            <th scope="col" class="text-center">@lang('general.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</x-layout>

<script type="text/javascript">
    let view_news = "@lang('general.view_news')";
    let requiredReference = "@lang('general.reference_required')";
    let requiredSubject = "@lang('general.subject_required')";
    let route_everything = "{{ route('newsapi.everything') }}";
    let route_top_headlines = "{{ route('newsapi.top_headlines') }}";
    let route_top_headlines_sources = "{{ route('newsapi.top_headlines_sources') }}";
</script>

@vite(['resources/js/newsapi.js'])