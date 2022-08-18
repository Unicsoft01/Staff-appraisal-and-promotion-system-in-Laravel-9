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
                    @php
                    $pmt = date('a');
                        if($pmt==='a')
                        {
                          echo "Good Morning,";
                        }
                        else {
                          echo "Good day,";
                        }
                    @endphp You came in:
                  </h4>
                  <h1 class="card-description text-center">
                    {{ $timeIn = date('h:i',strtotime("+1 hour"))}}<span class="text-sm"> {{ $pmt }}</span>
                  </h1>
                  <h4 class="card-title text-center">
                    Please enter your Username to continue
                  </h4>
                              <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-muted" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
                  <form method="POST" action="{{ route('Attendances.store')}}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input style="border-radius:2pc ;" type="text" class="text center form-control" name="username" placeholder="Username">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                    <button name="cancel" class="btn btn-light">Cancel</button>
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
