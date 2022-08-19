@extends('admin.admin_master')
@section('contents')

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">

        <div class="col-10 mt-3">
          <p class="card-title">Users Table</p>
        </div>
        <div class="col-2 mb-2">
            <a href="{{route('Users.create')}}"  class="btn btn-success">Add Staff</a>
          {{-- <button class="btn btn-success">
            Add Staff
          </button> --}}
        </div>
        </div>
        <div class="row">
          <div class="col-12">
            @if (count($users) > 0)
            <div class="table-responsive">
                <table id="example" class="text-center display expandable-table" style="width:100%">
                  <thead class=" bg-success">
                    <tr>
                      <th>S/No.</th>
                      <th>Full name</th>
                      <th>Department</th>
                      <th>Account type</th>
                      <th>Salary</th>
                      <th>Appraisal level</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $sn = 1; ?>
                    @foreach ( $users as $user)
                    <tr>
                      <td> {{ $sn++ }}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->department}}</td>
                      <td>{{$user->account_type}} staff</td>
                      <td>{{$user->salary}}</td>
                      <td class="text-info">{{$user->app_level}}</td>
                      <td>
                        <a class="btn btn-rounded btn-inverse-info btn-icon p-0" href="/Users/{{$user->id }}" title="Read More about {{$user->name}}">
                          <i class="ti-book"></i>
                        </a>
                        <a class="btn btn-rounded btn-inverse-danger btn-icon"  href="/Users/destroy/{{$user->id }}" title="Remove {{$user->id}}">
                          <i class="ti-trash"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                    {{-- pagination links --}}
                    {{-- {{$users->links()}} --}}
                </tbody>
                </table>
              </div>
                @else
                <div class="text-center">
                    <h3>
                        {{'No record found, Please Register some users!'}}
                    </h3>
                </div>
                @endif

        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection

