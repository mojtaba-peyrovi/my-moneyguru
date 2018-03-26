@extends('welcome')
@section('title')
  MoneyGuru | Cars
@endsection
@section('content')
  <div class="row">
    @foreach ($cars as $car)
      <div class="col-md-3">
        @include('cars.single')
      </div>
    @endforeach
  </div>
@endsection
