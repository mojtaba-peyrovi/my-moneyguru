<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filter;
use App\Car;
use App\Deal;
use Illuminate\Support\Collection;
class filtersController extends Controller
{
    public function filters(Request $request, Car $car,Deal $deal)
    {
      $filtered_make = Request('make');
      $filtered_year = Request('year');
      $filtered_model = Request('model');
      $filtered_trim = Request('trim');

      $sumInsured = Car::where('year',$filtered_year)
                    -> where('make',$filtered_make )
                    ->where('model',$filtered_model)
                    ->where('trim',$filtered_trim)
                    ->pluck('suminsured');


       $deals = Deal::where('maxSumInsured','>',$sumInsured)
                   ->where('minSumInsured','<',$sumInsured)
                   ->where('eligibleMake', 'like', '%' . $filtered_make . '%')
                    ->get();


      Filter::create([
        'year' => Request('year'),
        'make' => Request('make'),
        'model' => Request('model'),
        'trim' => Request('trim'),
        'bkkUp' => Request('bkkUp'),
        'personalComm' => Request('personalComm'),
        'cmi' => Request('cmi')
      ]);

      return route('ci-results');





    }
}
