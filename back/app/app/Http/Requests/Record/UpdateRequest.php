<?php

namespace App\Http\Requests\Record;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:50'],
            'surname' => ['required', 'string', 'min:2', 'max:50'],
            'patronymic' => ['required', 'string', 'min:2', 'max:50'],
            'category' => ['required', 'string', 'min:2', 'max:50'],
            'number_of_tickets' => ['required', 'integer', 'min:1', 'max:50'],
        ];
    }
}
