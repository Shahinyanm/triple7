<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrickRequest extends FormRequest
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
            'description1'           => 'required',
            'description2'           => 'required',
            'description3'           => 'required',
            'description4'           => 'required',
            'images'                 => 'required',
            'images.*.file'          => ' mimes:jpeg,jpg,png ',
            'amount'                 => 'required|max:10',
            'link'                   => 'required',

        ];
    }
}
