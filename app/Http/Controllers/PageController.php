<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->isMethod('GET')) {

            return view('forntend.page.index');
        }
    }

    public function pilih_makan(Request $request)
    {

        if ($request->isMethod('GET')) {
            return view('forntend.page.pilih_makan');
        }
    }

    public function nomor_antrian(Request $request, $jenis)
    {
        if ($request->isMethod('GET')) {

            return view('forntend.page.nomoer_meja');
        }
    }
}
