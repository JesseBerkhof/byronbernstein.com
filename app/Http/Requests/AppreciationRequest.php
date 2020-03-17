<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppreciationRequest extends FormRequest
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
            'first_name' => 'string|required|max:30',
            'last_name' => 'string|max:30',
            'city' => 'string|max:100',
        ];
    }
}
