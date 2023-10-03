<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePelangganRequest extends FormRequest
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
                'kode_pelanggan' => 'required',
            ];

    }
    public function messages()
    {
        return[
            'kode_pelanggan.required' => 'Data kode pelanggan harus di isi 0__0',
        ];
    }
}
