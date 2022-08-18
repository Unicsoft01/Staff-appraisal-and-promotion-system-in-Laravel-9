@extends('admin.admin_master')
@section('contents')

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          
        <div class="col-8 col-md-10 mt-3">
          <p class="card-title">{{Auth::user()->username}}'s Profile Page</p>
        </div>
        <div class="col-4 col-md-2 mb-2">
          <a href="{{route('edit_profile')}}" class="btn btn-success">
            Edit profile
          </a>
        </div>
        </div>
        <div class="row">
          <div class="col-12">
          <center>
              <img src="{{asset(Auth::user()->profile_image)}}" alt="profile"/>
          </center>

                <div class="card-body">
                    <h4 class="card-title">Name: {{ $adminData->name }}</h4>
                    <hr>
                    <h4 class="card-title">Email: {{ Str::ucfirst($adminData->email) }}</h4>
                    <hr>
                    <h4 class="card-title">Username: {{ $adminData->username }}</h4>
                    <hr>
                </div>

        </div>
      </div>
      </div>
    </div>
  </div>
</div>            
@endsection

