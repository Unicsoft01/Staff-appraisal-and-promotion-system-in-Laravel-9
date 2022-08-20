@extends('admin.admin_master')
@section('contents')

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Attendance review and reward</p>
        <div class="row">
          <div class="col-12">

            @if (count($attendances) > 0)
            <div class="table-responsive">
                <table id="example" class="text-center display expandable-table" style="width:100%">
                  <thead>
                    <tr>
                      <th class="">S/No.</th>
                      <th class="bg-info">Usernames</th>
                      <th class="bg-info">Date</th>
                      <th class="bg-info">Time in</th>
                      <th class="bg-info">Remark</th>
                      <th class="bg-info">Appraisal level</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( $attendances as $attendance)
                    <tr>
                        <th> {{$attendance->id}}</th>
                        <th>{{$attendance->staff_username}}</th>
                        <th>{{ date('D, d/m/y', strtotime($attendance->created_at))}}</th>
                        <th>{{ date('h:i:s a', strtotime($attendance->created_at))}}</th>
                        <th>{{$attendance->remark}}</th>
                        @if ($attendance->reward == 10)
                            <th class="text-success">+{{ $attendance->reward }}</th>
                        @elseif ($attendance->reward == 5)
                            <th class="text-primary">+{{ $attendance->reward }}</th>
                        @else
                            <th class="text-danger">+{{ $attendance->reward }}</th>
                        @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
                @else
                <div class="text-center">
                    <h3>
                        {{'No record found, Please Go take some Attendances'}}
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
