@extends('admin.admin_master')
@section('contents')

<!--             <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title mb-0">Tasks Evaluated</p> -->
        
        <!-- <div class="content-wrapper"> -->
          <div class="row">
            <div class="clock">
    <div class="h-hand" id="hour"> </div>
    <div class="m-hand" id="min"> </div>
    <div class="s-hand" id="sec"> </div>
</div>
            <div class=" mx-auto col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">
                    Good Morning, You came in:
                  </h4>
                  <h1 class="card-description text-center">
                    {{ date('h:i')}}<span class="text-sm"> {{ date('a')}}</span>
                  </h1>
                  <h4 class="card-title text-center">
                    Please enter your Username to continue
                  </h4>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input style="border-radius:2pc ;" type="text" class="text center form-control" id="exampleInputUsername1" placeholder="Username">

                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
<!--         </div>


                    </div>
                  </div>
                </div>
            </div> -->
@endsection
