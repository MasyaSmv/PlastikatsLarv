<?php

namespace App\Http\Controllers;

use App\gost;
use Illuminate\Http\Request;

class GostController extends Controller
{
    public function gost()
    {
        $gosts = new gost();
        return view('gost', ['gosts' => $gosts->paginate(6)]);
    }
}
