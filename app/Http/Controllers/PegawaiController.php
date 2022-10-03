<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = DB::table('pegawais')->join('departemens', 'id_departemen', '=', 'departemens.id')->paginate(5);
        return view('pegawai.index')->with('pegawai', $pegawai);
    }
}
