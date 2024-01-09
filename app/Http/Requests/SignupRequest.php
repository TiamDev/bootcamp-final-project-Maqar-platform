<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:250|min:10',
            'email' => 'required|email|max:250|unique:users',
            'phone' => 'required|integer|min:9',
            'password' => 'required|min:6|confirmed'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'الحقل مطلوب',
            'name.max' => 'يجب ان لا يتجاوز250 حرف',
            'name.min' =>  ' .يجب ان لا يقل عن 10 احرف',
            'email.required' => 'الحقل مطلوب',
            'phone.required' => 'الحقل مطلوب',
            'password.required' => 'الحقل مطلوب',
            'email.email' => 'القيمة غير صالحة',
            'email.max' => 'يجب ان لا يتجاوز250 حرف',
            'email.unique' => 'الايميل موجود مسبقا',
            'phone.integer' => 'القيمة غير صالحة',
            // 'phone.max' => 'يجب ان لا يتجاوز 10 ارقام',
            'phone.min' =>  ' .يجب ان لا يقل عن 9 احرف',
            'password.min' =>  ' .يجب ان لا يقل عن 6 احرف',
            'password.confirmed' => 'كلمة السر غير متطابقة'
        ];
    }
}
