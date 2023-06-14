<?php

namespace App\Http\Requests\Record;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed $last_name
 * @property mixed $first_name
 * @property mixed $category_id
 * @property mixed $number_of_tickets
 */
class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'min:2', 'max:20'],
            'last_name' => ['required', 'string', 'min:2', 'max:20'],
            'category_id' => ['required', 'integer', 'min:1', 'max:3'],
            'number_of_tickets' => ['required', 'integer', 'min:1', 'max:15'],
        ];
    }
}
