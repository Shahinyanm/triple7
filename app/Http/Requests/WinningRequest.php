<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WinningRequest extends FormRequest
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
        if($this->check_image) {
            if ($this->iamge  && ($this->check_image != $this->image->getClientOriginalName())) {
                $rules['image'] = 'required|mimes:jpeg,bmp,png';
            }else{
                $rules['image'] = '';
            }
        }else{
            $rules['image'] = 'required|mimes:jpeg,bmp,png';

        }


        $rules['name'] = 'required|max:32';

        return [

            'image'                 => $rules['image'],
            'user_id'               => 'required',

        ];
    }
}
