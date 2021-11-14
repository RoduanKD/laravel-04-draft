<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
        $validate = [
            'name'              => 'required|min:3',
            'email'             => 'required|email|unique:users,email',
            'password'          => 'required|min:8',
            'confirm_password'  => 'required|min:8|same:password',
        ];

        // if($this->user){
        //     $validate['email']              = 'required|email|unique:users,email,'.$this->user->id;
        //     $validate['password']           = 'nullable|min:8';
        //     $validate['confirm_password']   = 'required_with:password|same:password';
        // }

        return $validate;
    }
}
