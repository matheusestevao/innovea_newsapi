<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsapiEverythingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'q' => 'required|max:500|string',
            'searchIn' => 'nullable|string',
            'domains' => 'nullable|string',
            'excludeDomains' => 'nullable|string',
            'from' => 'nullable|date',
            'to' => 'nullable|date',
            'language' => 'nullable|string',
            'sortBy' => 'nullable|string',
            'pageSize' => 'nullable|integer',
            'page' => 'nullable|integer',
        ];
    }
}
