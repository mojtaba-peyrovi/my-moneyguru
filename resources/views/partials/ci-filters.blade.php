<div class="container">
<h1 class="text-success">compare the best car insurance deals</h1>
</div>
<div class="filters bg-success">
  <div class="container">

    <form method="post" action="{{ url('/filters') }}" class="py-3">
      {{ csrf_field() }}
      <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="year">Car Year</label>
              <input type="text" class="form-control" name="year">
            </div>
            <div class="form-group">
              <label for="make">Car Make</label>
              <input type="text" class="form-control" name="make">
            </div>
            <div class="form-group">
              <label for="model">Car Model</label>
              <input type="text" class="form-control" name="model">
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="bkkUp">Bangkok/Upcountry</label>
                  <input type="text" class="form-control" name="bkkUp">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="personalComm">Personal/Commercial</label>
                  <input type="text" class="form-control" name="personalComm">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="cmi">CMI Included?</label>
              <input type="text" class="form-control" name="cmi">
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="trim">Trim</label>
                  <input type="text" class="form-control" name="trim">
                </div>
              </div>
              <div class="col-md-4">
                <button type="submit" class="btn btn-warning float-right mt-4">Show Results</button>
              </div>
            </div>

          </div>
      </div>
    </form>

  </div>
</div>
