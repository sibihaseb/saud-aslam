<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TvAdminUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $rules = [
            'name'            => 'required|string',
            // 'phone'          => 'nullable|string',
            // 'status'          => 'required',
            // 'account_type'          => 'required',
            // 'app_code' => 'nullable',
            // 'role' => 'nullable',
            // 'day' => 'nullable',
        ];

        if ($this->route()->getName() === 'adminuser.update') {
            // $rules['code'] = 'nullable';
            // $rules['oldpassword'] = 'required|string';
            $rules['email'] = 'required|email';
        }
        if ($this->route()->getName() === 'adminuser.store') {
            $rules['email'] = 'required|email|unique:users,email';
            $rules['password'] = 'required|confirmed';
        }
        if ($this->filled('password')) {
            $rules['password'] = 'required|confirmed';
        }
        return $rules;
    }
}
