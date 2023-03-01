<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaCreateRequest extends FormRequest
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
            'nim' => 'unique:mahasiswa|required|max:5',
            'nama' => 'required',
            'kelas_id' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama tidak boleh kosong',
            'nim.required' => 'nim tidak boleh kosong',
            'kelas.required' => 'kelas tidak boleh kosong',
            'nim.unique' => 'nim sudah ada',
            'nim.max' => 'nim maksimal :max karakter'
        ];
    }
}
