<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    
    /**
     * Determine if the user is authorized to make this request.
     */
        public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => "E-mail requis.",
            'email.email' => "E-mail non valide.",
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[A-Z]/',     // au moins une majuscule
                'regex:/[a-z]/',     // au moins une minuscule
                'regex:/[0-9]/',     // au moins un chiffre
                'regex:/[@$!%*?&]/', // au moins un symbole
                
            ],

        ];
    }
}
