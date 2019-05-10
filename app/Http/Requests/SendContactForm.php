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
}
