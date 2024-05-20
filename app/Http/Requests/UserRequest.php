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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required|string|max:255',
            'useremail' => 'required|email|max:255',
            'userage' => 'required|integer|min:0',
        ];
    }
    // public function messages()
    // {
    //     return [
    //         "username.required"=>':attribute is required!',
    //         "useremail.required"=>'User Email is required!',
    //         "userage.required"=>'User Age is required!',
    //         "useremail.email"=>'Enter the correct email address',
    //         "useremail.string"=>'User Email Must be String',
    //         "useremail.integer"=>'User address must be number',

    //     ];
    // }

    public function attributes()
    {
        return [

        'username'=>'User Name',
        'useremail'=>'User Email',
        'userage'=>'User Age',


        ];
        
    }
}
