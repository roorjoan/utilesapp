<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UtilStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'url' => 'nullable|url',
            'file' => 'required|mimes:png,jpg,jpeg|max:5120',
        ];
    }
}