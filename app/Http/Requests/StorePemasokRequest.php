<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePemasokRequest extends FormRequest
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
    public function rules():array
    {
        return [
                'nama_pemasok' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'nama_pemasok.required' => 'Data nama pemasok harus di isi 0__0'
        ];
    }
}
