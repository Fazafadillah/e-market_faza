<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePenggunaRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'nama' => 'required'
            // 'email' => 'required',
            // 'email_verified at' => 'required',
            // 'password' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'nama.required' => 'Data nama pemasok harus di isi 0__0'
            // 'email.required' => 'Data email pemasok harus di isi 0__0',
            // 'email_verified_at.required' => 'Data email pemasok harus di isi 0__0',
            // 'password.required' => 'Data passsword pemasok harus di isi 0__0'
        ];
    }
}
