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
          <button class="btn btn-success">
            Add Staff
          </button>
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
                  <th>Date</th>
                  <th>Time in</th>
                  <th>Remark</th>
                  <th>Appraisal level</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> 1</td>
                  <td>Adekunle Salt</td>
                  <td>20/06/22</td>
                  <td>8:45:23 am</td>
                  <td>Very Late</td>
                  <td class="text-danger">-2.3</td>
                  <td>
                    <button class="btn btn-rounded btn-inverse-info btn-icon" title="Edit User">
                      <i class="ti-pencil"></i>
                    </button>
                    <button class="btn btn-rounded btn-inverse-danger btn-icon" title="Remove User">
                      <i class="ti-trash"></i>
                    </button>
                  </th>
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

