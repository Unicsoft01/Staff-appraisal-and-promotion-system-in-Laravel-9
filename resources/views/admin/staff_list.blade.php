@extends('admin.admin_master')
@section('contents')

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">

        <div class="col-10 mt-3">
          <p class="card-title">Attendance review and reward</p>
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
            <div class="table-responsive">
            <table id="example" class="text-center display expandable-table" style="width:100%">
              <thead class=" bg-success">
                <tr>
                  <th>S/No.</th>
                  <th>Staffs</th>
                  <th>Department</th>
                  <th>Account type</th>
                  <th>Salary</th>
                  <th>Appraisal level</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> 1</td>
                  <td>Adekunle Salt</td>
                  <td>Cleaning and Sanitation</td>
                  <td>Non Academic staff</td>
                  <td>70,000</td>
                  <td class="text-info">65.3%</td>
                  <td>
                    <button class="btn btn-rounded btn-inverse-info btn-icon" title="Edit User">
                      <i class="ti-pencil"></i>
                    </button>
                    <button class="btn btn-rounded btn-inverse-danger btn-icon" title="Remove User">
                      <i class="ti-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td> 2</td>
                  <td>Mr flawless</td>
                  <td>Works</td>
                  <td>Non Academic staff</td>
                  <td>70,000</td>
                  <td class="text-info">50.4%</td>
                  <td>
                    <button class="btn btn-rounded btn-inverse-info btn-icon" title="Edit User">
                      <i class="ti-pencil"></i>
                    </button>
                    <button class="btn btn-rounded btn-inverse-danger btn-icon" title="Remove User">
                      <i class="ti-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td> 3</td>
                  <td>Mr ICT</td>
                  <td>ICT</td>
                  <td>Non Academic staff</td>
                  <td>90,000</td>
                  <td class="text-info">65.3%</td>
                  <td>
                    <button class="btn btn-rounded btn-inverse-info btn-icon" title="Edit User">
                      <i class="ti-pencil"></i>
                    </button>
                    <button class="btn btn-rounded btn-inverse-danger btn-icon" title="Remove User">
                      <i class="ti-trash"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection

