@extends('admin.admin_master')
@section('contents')

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <form method="POST" action="{{ route('store.profile') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-8 col-md-10 mt-3">
                <p class="card-title">Edit {{Auth::user()->username}}'s Profile</p>
              </div>
                <div class="col-4 col-md-2 mb-2">
                  <input type="submit" value="Update" class="btn btn-success">
                </div>
            </div>
            <div class="row">
              <div class="col-12">
                  <center>
                    <img src="{{asset(Auth::user()->profile_image)}}" alt="profile"/>
                    <input type="file" class="bg-info-inverse" name="profile_image">
                  </center>

                    <div class="card-body">
                        <h4 class="card-title">Name: <input type="text" value="{{Auth::user()->name}}" name="name"></h4>
                        <hr>
                        <h4 class="card-title">Email: <input type="text" value="{{Auth::user()->email}}" name="email"></h4>
                        <hr>
                        <h4 class="card-title">Username: <input type="text" value="{{Auth::user()->username}}" name="username"></h4>
                        <hr>
                        <h4 class="card-title">User type: {{Auth::user()->account_type}}</h4>
                        <hr>
                        <h4 class="card-title">Salary: {{Auth::user()->salary}}</h4>
                        <hr>
                        <h4 class="card-title">Appraisal Level: {{ Auth::user()->app_level }}</h4>
                        <hr>
                    </div>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection

