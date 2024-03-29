<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'first_name'                =>  'required|string|max:255',
            'last_name'                 =>  'required|string|max:255',
            'title'                     =>  'required|string',
            'email'                     =>  'required|string|email|max:255',
            'password'                  =>  'required|confirmed',
            'password_confirmation'     =>  'sometimes|required_with:password',
        ];
    }
}
