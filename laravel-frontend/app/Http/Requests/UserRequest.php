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
            //
            'username' => 'required',
    	    'password'=> 'required|min:5'
        ];
    }
    public function messages()
    {
        return 
        [
          'username.required' => 'Username null.....',
          'password.required' => 'Password Required....',
          'password.min' => 'Password must contains minimum 5 character or values....', 
        ];
    }
}
