<?php

namespace App\Http\Requests\Record;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => ['string', 'min:2', 'max:20'],
            'last_name' => ['string', 'min:2', 'max:20'],
            'category_id' => ['integer', 'min:1', 'max:3'],
            'number_of_tickets' => ['integer', 'min:1', 'max:15'],
        ];
    }
}
