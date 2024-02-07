<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticViewController extends Controller
{
    public function showLp()
    {
        return view('lp');
    }

    public function showProfile()
    {
        return view('profile');
    }

    public function showCatalog()
    {
        return view('catalog');
    }
}
