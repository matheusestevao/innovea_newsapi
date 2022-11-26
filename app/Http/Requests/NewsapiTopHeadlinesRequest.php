<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsapiTopHeadlinesRequest extends FormRequest
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
            'country' => 'nullable|string',
            'category' => 'nullable|string',
            'q' => 'nullable|string|max:500'
        ];
    }
}
