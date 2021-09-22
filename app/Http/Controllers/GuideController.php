<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function guides()
    {
        // $guides = new guide();
        return view('guide.guides');
    }

    public function guide($id)
    {
        return view('guide.guide');
    }
}
