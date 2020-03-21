<?php

namespace App\Http\Requests;

use DivineOmega\IsOffensive\OffensiveChecker;
use DivineOmega\LaravelOffensiveValidationRule\Offensive;
use Illuminate\Foundation\Http\FormRequest;

class AppreciationRequest extends FormRequest
{
    private $blacklist = [
        'kanker',
        'jood',
        'joden',
        'kkr',
        'aids',
        'tering',
        'corona',
        'covid',
        'penis',
        'kut',
        'shit',
        'hoer',
        'hoeren',
    ];

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => ['max:25', 'required', new Offensive(new OffensiveChecker($this->blacklist))],
            'last_name' => ['max:40', new Offensive(new OffensiveChecker($this->blacklist))],
            'city' => ['max: 120', new Offensive(new OffensiveChecker($this->blacklist))]
        ];
    }
}
