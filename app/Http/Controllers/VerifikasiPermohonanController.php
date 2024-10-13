<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class VerifikasiPermohonanController extends Controller
{
    
    public function index() {
        $surats = Surat::all();

        return view('verifikasi-permohonan.index', compact('surats'));
    }
}
