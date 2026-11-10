<?php

namespace App\Http\Controllers;

use App\Models\AlatMesinPertanian;
use App\Models\PembiayaanLahanAir;
use App\Models\Penyuluhan;
use App\Models\Program;
use App\Models\PupukPestisida;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $prog = Program::all() ?? null;
        $penyuluhan = Penyuluhan::all() ?? null;
        $pla = PembiayaanLahanAir::all() ?? null;
        $alsinta = AlatMesinPertanian::all() ?? null;
        $pupuk = PupukPestisida::all() ?? null;


        return view('program', compact('prog', 'penyuluhan', 'pla', 'alsinta', 'pupuk'));
    }
}
