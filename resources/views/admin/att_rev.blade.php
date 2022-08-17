@extends('admin.admin_master')
@section('contents')

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Attendance review and reward</p>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
            <table id="example" class="text-center display expandable-table" style="width:100%">
              <thead>
                <tr>
                  <th class="">S/No.</th>
                  <th class="bg-info">Staffs</th>
                  <th class="bg-info">Date</th>
                  <th class="bg-info">Time in</th>
                  <th class="bg-info">Remark</th>
                  <th class="bg-info">Appraisal level</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th> 1</th>
                  <th>Mr Flawless</th>
                  <th>20/06/22</th>
                  <th>8:45:23 am</th>
                  <th>Very Late</th>
                  <th class="text-danger">-2.3</th>
                </tr>
                <tr>
                  <th> 2</th>
                  <th>Mr ICT</th>
                  <th>20/06/22</th>
                  <th>7:45:23 am</th>
                  <th>Early</th>
                  <th class="text-success">+2.3</th>
                </tr>
                <tr>
                  <th> 3</th>
                  <th>Mr Flawless</th>
                  <th>21/06/22</th>
                  <th>8:00:23 am</th>
                  <th>On time</th>
                  <th class="text-primary">+2.3</th>
                </tr>
                <tr>
                  <th> 4</th>
                  <th>Mr ICT</th>
                  <th>21/06/22</th>
                  <th>7:15:23 am</th>
                  <th>Very Early</th>
                  <th class="text-success">+2.5</th>
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
