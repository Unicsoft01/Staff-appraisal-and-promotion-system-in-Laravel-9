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
          <button class="btn btn-success">
            Update
          </button>
        </div>
        </div>
        <div class="row">
          <div class="col-12">
          <center>
              <img src="{{asset('/backend_asset/images/faces/face28.jpg')}}" alt="profile"/>
              <input type="file" class="bg-info-inverse" placeholder="Username" name="">
          </center>

                <div class="card-body">
                    <h4 class="card-title">Name: <input type="text" value="{{Auth::user()->name}}" name=""></h4>
                    <hr>
                    <h4 class="card-title">Email: <input type="text" value="{{Auth::user()->email}}" name=""></h4>
                    <hr>
                    <h4 class="card-title">Username: <input type="text" value="{{Auth::user()->username}}" name=""></h4>
                    <hr>
                </div>

        </div>
      </div>
      </div>
    </div>
  </div>
</div>            
@endsection

