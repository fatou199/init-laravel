<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormRequest extends FormRequest
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
            'nom' => 'required|min: 3',
            'email' => 'required|email'
        ];
    }

    public function messages(){
        return [
            'nom.required' => 'Le champs nom est requis.',
            'nom.min' => 'Le champs nom doit contenir au moins 3 caractères.',
            'email.required' => 'Le champs email est requis.',
        ];
    }
}
