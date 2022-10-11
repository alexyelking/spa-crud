<?php

namespace App\Http\Requests\Record;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'min:2', 'max:50'],
            'last_name' => ['required', 'string', 'min:2', 'max:50'],
            'category' => ['required', 'string', 'min:2', 'max:50'],
            'number_of_tickets' => ['required', 'integer', 'min:1', 'max:50'],
        ];
    }
}
