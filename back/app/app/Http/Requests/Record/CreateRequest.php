<?php

namespace App\Http\Requests\Record;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'min:1', 'max:15'],
            'last_name' => ['required', 'string', 'min:1', 'max:15'],
            'category' => ['required', 'string', 'min:1', 'max:20'],
            'number_of_tickets' => ['required', 'integer', 'min:1', 'max:15'],
            'total_price' => ['integer'],
        ];
    }
}
