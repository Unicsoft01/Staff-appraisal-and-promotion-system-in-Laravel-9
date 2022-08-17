@extends('admin.admin_master')
@section('contents')

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          
        <div class="col-10 mt-3">
          <p class="card-title">Task Evaluation and Review</p>
        </div>
        <div class="col-2 mb-2">
          <button class="btn btn-success">
            Assign new
          </button>
        </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
            <table id="evaluate_table" class="text-center display expandable-table" style="width:100%">
              <thead class=" bg-success">
                <tr>
                  <th>S/No.</th>
                  <th>Task</th>
                  <th>Assigned to</th>
                  <th>Date assigned</th>
                  <th>Last modified</th>
                  <th>Reward on compl.</th>
                  <th>Completed</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> 1</td>
                  <td title="Trim flowers around Senate building">Trim flowers...</td>
                  <td>Mr flawless</td>
                  <td>21/06/22</td>
                  <td>21/06/22</td>
                  <td class="text-success">+30%</td>
                  <td>100%</td>
                  <td>
                    <button class="btn btn-rounded btn-inverse-info btn-icon" title="Edit task">
                      <i class="ti-pencil"></i>
                    </button>
                    <button class="btn btn-rounded btn-inverse-success btn-icon" title="modify Status">
                      <i class="ti-book"></i>
                    </button>
                    <button class="btn btn-rounded btn-inverse-danger btn-icon" title="Remove task">
                      <i class="ti-trash"></i>
                    </button>
                </tr>
                <tr>
                  <td> 2</td>
                  <td title="Optimise and Sync all results">Optimise...</td>
                  <td>Mr ICT</td>
                  <td>09/06/22</td>
                  <td>09/06/22</td>
                  <td class="text-success">+30%</td>
                  <td>50%</td>
                  <td>
                    <button class="btn btn-rounded btn-inverse-info btn-icon" title="Edit task">
                      <i class="ti-pencil"></i>
                    </button>
                    <button class="btn btn-rounded btn-inverse-success btn-icon" title="modify Status">
                      <i class="ti-book"></i>
                    </button>
                    <button class="btn btn-rounded btn-inverse-danger btn-icon" title="Remove task">
                      <i class="ti-trash"></i>
                    </button>
                </tr>
                <tr>
                  <td> 3</td>
                  <td title="Address all returning students">Address all...</td>
                  <td>Mr Deen</td>
                  <td>11/06/22</td>
                  <td>21/06/22</td>
                  <td class="text-success">+30%</td>
                  <td>100%</td>
                  <td>
                    <button class="btn btn-rounded btn-inverse-info btn-icon" title="Edit task">
                      <i class="ti-pencil"></i>
                    </button>
                    <button class="btn btn-rounded btn-inverse-success btn-icon" title="modify Status">
                      <i class="ti-book"></i>
                    </button>
                    <button class="btn btn-rounded btn-inverse-danger btn-icon" title="Remove task">
                      <i class="ti-trash"></i>
                    </button>
                </tr>
                <tr>
                  <td> 4</td>
                  <td title="Search Engine Marketing">Search Engine...</td>
                  <td>Mr flawless</td>
                  <td>21/06/22</td>
                  <td>21/06/22</td>
                  <td class="text-success">+30%</td>
                  <td>100%</td>
                  <td>
                    <button class="btn btn-rounded btn-inverse-info btn-icon" title="Edit task">
                      <i class="ti-pencil"></i>
                    </button>
                    <button class="btn btn-rounded btn-inverse-success btn-icon" title="modify Status">
                      <i class="ti-book"></i>
                    </button>
                    <button class="btn btn-rounded btn-inverse-danger btn-icon" title="Remove task">
                      <i class="ti-trash"></i>
                    </button>
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

