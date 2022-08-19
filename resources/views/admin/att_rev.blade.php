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
                @if (count($attendances) > 0)
                    @foreach ( $attendances as $attendance)
                    <tr>
                        <th> {{$attendance->id}}</th>
                        <th>{{$attendance->staff_username}}</th>
                        <th>20/06/22</th>
                        <th>8:45:23 am</th>
                        <th>Very Late</th>
                        <th class="text-danger">-2.3</th>
                    </tr>
                    @endforeach
                @else
                <div class="text-center">
                    <b>
                        {{'Nothing to display'}}
                    </b>
                </div>
                @endif

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
