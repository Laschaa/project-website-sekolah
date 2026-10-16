<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePpdbSantriRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama_lengkap' => ['required', 'string', 'max:150'],
            'nama_panggilan' => ['nullable', 'string', 'max:80'],
            'tempat_tanggal_lahir' => ['required', 'string', 'max:150'],
            'jenis_kelamin' => ['required', 'in:L,P'],
            'nama_ayah' => ['required', 'string', 'max:150'],
            'nama_ibu' => ['required', 'string', 'max:150'],
            'no_whatsapp' => [
                'required',
                'string',
                'max:20',
                'regex:/^(?:\+62|62|0)8[1-9][0-9]{6,10}$/',
            ],
            'alamat' => ['required', 'string', 'max:2000'],
        ];
    }

    public function messages(): array
    {
        return [
            'nama_lengkap.required' => 'Nama lengkap anak wajib diisi.',
            'nama_panggilan.max' => 'Nama panggilan maksimal 80 karakter.',
            'tempat_tanggal_lahir.required' => 'Tempat dan tanggal lahir anak wajib diisi.',
            'jenis_kelamin.in' => 'Jenis kelamin harus dipilih sebagai laki-laki atau perempuan.',
            'nama_ayah.required' => 'Nama ayah/wali wajib diisi.',
            'nama_ibu.required' => 'Nama ibu/wali wajib diisi.',
            'no_whatsapp.regex' => 'Nomor WhatsApp harus berupa nomor seluler Indonesia yang valid.',
            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.max' => 'Alamat maksimal 2000 karakter.',
        ];
    }

    public function attributes(): array
    {
        return [
            'nama_lengkap' => 'nama lengkap anak',
            'nama_panggilan' => 'nama panggilan',
            'tempat_tanggal_lahir' => 'tempat dan tanggal lahir',
            'jenis_kelamin' => 'jenis kelamin',
            'nama_ayah' => 'nama ayah/wali',
            'nama_ibu' => 'nama ibu/wali',
            'no_whatsapp' => 'nomor WhatsApp',
            'alamat' => 'alamat',
        ];
    }
}
