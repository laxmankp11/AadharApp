<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AadharRequest extends FormRequest
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
            'aadhar_number' => 'required|digits:12|unique:users,aadhar_number',
        ];
    }
}
