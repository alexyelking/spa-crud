<?php

namespace App\Http\Requests\Record;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'surname' => ['required', 'string', 'min:3', 'max:50'],
            'patronym' => ['required', 'string', 'min:3', 'max:50'],
            'category' => ['required', 'string', 'min:3', 'max:50'],
            'number_of_tickets' => ['required', 'integer', 'min:3', 'max:50'],
        ];
    }
}
