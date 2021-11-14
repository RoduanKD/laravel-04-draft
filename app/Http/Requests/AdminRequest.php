<?php

namespace App\Http\Requests;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CurrentPasswordCheckRule;

class AdminRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        $validate = [
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique((new User)->getTable())->ignore(auth()->id())],
            'old_password' => ['required', 'min:6', new CurrentPasswordCheckRule],
            'password' => ['required', 'min:6', 'confirmed', 'different:old_password'],
            'password_confirmation' => ['required', 'min:6'],
        ];

        if($this->user){
            $validate['email']              = 'required|email|unique:users,email,'.$this->user->id;
            $validate['password']           = 'nullable|min:6';
        }
        return $validate;
    }

    public function attributes()
    {
        return [
            'old_password' => __('current password'),
        ];
    }
}
