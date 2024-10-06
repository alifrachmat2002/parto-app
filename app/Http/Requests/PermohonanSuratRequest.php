<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermohonanSuratRequest extends FormRequest
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
            'nama_pemohon' => ['required','string'],
            'nomor_identitas' => 'required',
            'nomor_hp' => 'required',
            'tempat_lahir' => ['required','string'],
            'tanggal_lahir' => ['required'],
            'jenis_kelamin' => ['required'],
            'status_perkawinan' => ['required'],
            'agama' => ['required'],
            'kewarganegaraan' => ['required'],
            'custom_nationality' => ['required_if:kewarganegaraan,Other'],
            'pendidikan_terakhir' => ['required'],
            'pekerjaan' => ['required'],
            'alamat' => ['required'],
            'keperluan' => ['required'],
            'custom-keperluan' => ['required_if:keperluan,lainnya'],
            'keterangan' => ['required'],
            'file_surat' => ['required','file','mimes:pdf']
        ];
    }
}
