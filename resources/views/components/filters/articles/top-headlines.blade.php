<div class="row gx-3 gy-2 align-items-center mt-1 d-none top-headlines">
    <div class="col-sm-6 form-floating">
        <input type="text" name="subject" class="form-control subject" id="floatingSubject" placeholder="@lang('newsapi.subject')/@lang('newsapi.term')">
        <label for="floatingSubject">@lang('newsapi.subject')/@lang('newsapi.term')</label>
    </div>

    <div class="col-sm-6 form-floating">
        <select class="form-select language" name="language" id="floatingLanguage">
            <option value="" selected>@lang('general.select')</option>
            @foreach ($languages as $language)
                <option value="{{ $language->abbreviation }}">@lang('languages.'.$language->name)</option>
            @endforeach
        </select>
        <label for="floatingLanguage">@lang('general.language')</label>
    </div>

    <div class="col-sm-6 form-floating">
        <select class="form-select sortBy" name="country" id="floatingSortBy">
            <option value="" selected>@lang('general.select')</option>
            @foreach ($sources as $source)
                <option value="{{ $source->abbreviation }}">@lang('sources.'.$source->name)</option>
            @endforeach
        </select>
        <label for="floatingSortBy">@lang('general.country')</label>
    </div>

    <div class="col-sm-6 form-floating">
        <select class="form-select categories" name="category" id="floatingCategories">
            <option value="" selected>@lang('general.select')</option>
            @foreach ($categories as $category)
                <option value="{{ $category->name }}">@lang('categories.'.$category->name)</option>
            @endforeach
        </select>
        <label for="floatingCategories">@lang('general.caregory')</label>
    </div>
</div>