<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SigninRequest extends FormRequest
{

    protected $redirect = "user/signin";

    // how can send post request and try to conenct
    public function authorize()
    {
        return true;
    }

    // if ok go to postSignin at UserController
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6|max:20',
        ];
    }
}
