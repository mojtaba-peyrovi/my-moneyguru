@extends('welcome')
@section('title')
  {{ $car->make }}
@endsection
@section('content')
  <div class="header jumbotron text-center bg-info text-white">
    <h2>Singel Car</h2>
  </div>
  <div class="card mt-5">
    <div class="card-header">
        {{ $car->make}},{{ $car->model }}
        <span class="float-right">{{ $car->created_at->diffForHumans() }}</span>
    </div>
    <div class="card-body">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      <a href="{{ url('/cars') }}" class="btn btn-secondary float-right mt-2">Back to list</a>
    </div>
  </div>
@endsection
