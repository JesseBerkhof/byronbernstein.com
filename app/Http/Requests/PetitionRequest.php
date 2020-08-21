<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetitionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string|required',
            'message' => 'max:140',
        ];
    }
}
