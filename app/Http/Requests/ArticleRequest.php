<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'titre' => 'required|min: 3'
        ];
    }

    public function messages(){
        return [
            'titre.required' => 'Le champs titre est requis.',
            'titre.min' => 'Le champs titre doit contenir au moins 3 caractères.',
        ];
    }
}
