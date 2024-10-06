<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermohonanSuratRequest;
use App\Models\Surat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PermohonanSuratController extends Controller
{

    public function create()
    {
        
        return view('permohonan-surat.create');
    }

    public function store(PermohonanSuratRequest $request) {
        // dd($request->all());

        $file = $request->file('file_surat');

        $fileName = time() . '.' . $file->extension();

        $file->storeAs('/public/surat', $fileName);

        $kewarganegaraan = $request->kewarganegaraan == 'Other' ? $request->custom_nationality : $request->kewarganegaraan;


        $surat = Surat::create([
            'perihal' => $request->keperluan,
            'nama_pemohon' => $request->nama_pemohon,
            'pemohon_id' => auth()->id(),
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
            'jenis_kelamin' => $request->jenis_kelamin,
            'kewarganegaraan' => $kewarganegaraan,
            'agama' => $request->agama,
            'status_perkawinan' => $request->status_perkawinan,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'nomor_identitas' => $request->nomor_identitas,
            'keperluan' => $request->keterangan,
            'nomor_hp' => $request->nomor_hp,
            'file_surat' => $fileName
        ]);

        return redirect()->route('permohonan-surat.index',)->with('success', 'Surat berhasil diajukan dengan nomor surat ' . $surat->id);
    }
}
