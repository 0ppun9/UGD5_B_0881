<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class DepartemenController extends Controller
{
    //
    public function index()
    {

        return view('departemen.index', [
            'departemen' => DB::table('departemens')->paginate(5)
        ]);
    }
}
