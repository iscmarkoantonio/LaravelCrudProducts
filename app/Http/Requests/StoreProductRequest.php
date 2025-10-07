<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => ['required', 'min:3', 'max:255', 'string'],
            'price' => ['numeric'],
            'description' => ['required', 'min:5', 'max:255', 'string'],      
        ];

        // return [
        //     'name' => 'required|string|max:255',
        //     'description' => 'required| string',
        //     'price' => 'numeric'
        // ];
    }
}
