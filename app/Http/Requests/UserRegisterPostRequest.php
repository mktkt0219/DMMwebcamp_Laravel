<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\User as UserModel;

class UserRegisterPostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:128'],
            'email' => ['required', 'max:256', 'email'],
            'password' => ['required', 'max:72'],
        ];
    }
}