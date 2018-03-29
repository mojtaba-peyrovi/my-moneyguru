<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function getCarInsurance()
    {
      return view('pages.ci');
    }

    public function getCarInsuranceResults(){
      return view('deals.index');
    }
}
