<?php

namespace Confee\Units\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class LoginRequest.
 */
class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}