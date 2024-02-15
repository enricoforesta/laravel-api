<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'unique:projects,title', 'max:25'],
        ];
    }
    public function messages()
    {
        return [

            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare i :max caratteri.',
        ];
    }
}
