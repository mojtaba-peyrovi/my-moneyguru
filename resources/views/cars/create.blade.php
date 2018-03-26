@extends('welcome')
@section('title')
  Cars | Create
@endsection
@section('content')
  <div class="col-md-8 offset-md-2 mt-5">
      <div class="card">
        <div class="card-header bg-info">
          Add a Car
        </div>
        <div class="card-body">
          <form method="post" action="/cars">
            {{ csrf_field() }}
              <fieldset class="form-group">
                <label for="year">Car Year</label>
                <input type="text" class="form-control" id="year" name="year">
              </fieldset>

              <fieldset class="form-group">
                <label for="make">Car Make</label>
                <input type="text" class="form-control" id="make" name="make">
              </fieldset>

              <fieldset class="form-group">
                <label for="model">Car Model</label>
                <input type="text" class="form-control" id="model" name="model">
              </fieldset>
              <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
  </div>
@endsection
