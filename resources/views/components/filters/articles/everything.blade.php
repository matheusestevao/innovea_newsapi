<div class="row gx-3 gy-2 align-items-center mt-1 everything">
    <div class="col-sm-6 form-floating">
        <input type="text" name="subject" class="form-control subject" id="floatingSubject" placeholder="@lang('newsapi.subject')/@lang('newsapi.term')">
        <label for="floatingSubject">@lang('newsapi.subject')/@lang('newsapi.term')</label>
    </div>

    <div class="col-sm-6">
        @foreach ($searchIns as $seachIn)
            <div class="form-check form-check-inline">
                <input class="form-check-input searchIn" name="searchIn" type="checkbox" id="inlineCheckbox{{ $loop->iteration }}" value="{{ $seachIn->name }}">
                <label class="form-check-label" for="inlineCheckbox{{ $loop->iteration }}">@lang('newsapi.'.$seachIn->name)</label>
            </div>
        @endforeach
    </div>

    <div class="col-sm-6 form-floating">
        <input type="date" name="from" class="form-control from" id="floatingFrom" placeholder="@lang('general.from')">
        <label for="floatingFrom">@lang('general.from')</label>
    </div>

    <div class="col-sm-6 form-floating">
        <input type="date" name="to" class="form-control to" id="floatingTo" placeholder="@lang('general.to')">
        <label for="floatingTo">@lang('general.to')</label>
    </div>

    <div class="col-sm-6 form-floating">
        <input type="text" name="domains" class="form-control domains" id="floatingDomain" placeholder="@lang('general.domains')">
        <label for="floatingDomain">@lang('general.domains')</label>
    </div>

    <div class="col-sm-6 form-floating">
        <input type="text" name="excludeDomains" class="form-control excludeDomains" id="floatingExcludeDomain" placeholder="@lang('general.exclude_domains')">
        <label for="floatingExcludeDomain">@lang('general.exclude_domains')</label>
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
        <select class="form-select sortBy" name="sortBy" id="floatingSortBy">
            <option value="" selected>@lang('general.select')</option>
            @foreach ($articleClassifications as $articleClassification)
                <option value="{{ $articleClassification->name }}">@lang('classifications.'.$articleClassification->reference)</option>
            @endforeach
        </select>
        <label for="floatingSortBy">@lang('general.sort_by')</label>
    </div>
</div>