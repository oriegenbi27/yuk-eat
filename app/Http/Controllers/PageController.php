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
}
