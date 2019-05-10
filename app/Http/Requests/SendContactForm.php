<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendContactForm extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'completeName' => 'required|min:5',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'state' => 'required',
            'city' => 'required',
            'message' => 'required|min:20',
            'recaptcha' => 'required|captcha'
        ];
    }

    /**
     * Customize the error messages.
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'completeName.required' => 'O campo nome completo é obrigatório.',
            'completeName.min' => 'O campo nome completo precisa ter no mínimo 5 caracteres.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Por favor, digite um email válido.',
            'phone.required' => 'O campo telefone é obrigatório.',
            'phone.numeric' => 'Digite um número de telefone válido.',
            'state.required' => 'Selecione um estado.',
            'city.required' => 'Selecione uma cidade (primeiro, selecione um estado)',
            'message.required' => 'O texto da mensagem é obrigatório.',
            'message.min' => 'O texto da sua mensagem deve conter no mínimo 20 caractetres.'
        ];
    }
}
