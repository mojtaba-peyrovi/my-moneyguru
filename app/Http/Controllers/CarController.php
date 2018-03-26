<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
class CarController extends Controller
{
  public function index()
  {
    $cars = Car::all();
    return view('cars.index',compact('cars'));
  }

  public function create()
  {
    return view('cars.create');
  }
  public function store(Request $request)
  {
    Car::create([
      'year' => Request('year'),
      'make' => Request('make'),
      'model' => Request('model')
    ]);
    return redirect('/cars');
  }

  public function show(Car $car)
  {
    return view('cars.show',compact('car'));
  }

}
