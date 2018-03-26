<div class="card my-3">
    <div class="card-header bg-light">
      {{ $car->make }} - {{ $car->model }}
    </div>
    <div class="card-body">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
      <a type="button" class="btn btn-outline-success btn-sm float-right mt-2" href="/cars/{{ $car->id }}">Open</a>
    </div>
</div>
