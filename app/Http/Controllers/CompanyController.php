<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companys()
    {
        // $companys = new company();
        return view('company.companys');
    }

    public function company($id)
    {
        return view('company.company');
    }
}
