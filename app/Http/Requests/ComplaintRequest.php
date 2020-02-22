<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComplaintRequest extends FormRequest
{
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
            'first_name' => 'required|string|max:140',
            'last_name' => 'required|string|max:140',
            'city' => 'required|string|max:140',
            'province_id' => 'required|int',
            'postal_code' => 'required|max:6',
            'webshop_id' => 'required|int',
            'description' => 'max:255',
        ];
    }
}
