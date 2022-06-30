
<nav class="sidebar sidebar-offcanvas" id="sidebar">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="/dashboard">
      <i class="icon-grid menu-icon"></i>
      <span class="menu-title">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
      <i class="icon-layout menu-icon"></i>
      <span class="menu-title">Attendance</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ui-basic">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="{{ route('take_attendance') }}">Take Attendance</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ route('att_rev') }}">attendace Rev.</a></li>
      </ul>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
      <i class="icon-head menu-icon"></i>
      <span class="menu-title">Staff Mgmt</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="form-elements">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('staff_list') }}">Staffs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/forms/basic_elements.html">Evaluate Task</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/forms/basic_elements.html">Allocate Task</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
      <i class="icon-bar-graph menu-icon"></i>
      <span class="menu-title">Promotion & Merits</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="charts">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">Salary</a></li>
      </ul>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pages/documentation/documentation.html">
      <i class="icon-paper menu-icon"></i>
      <span class="menu-title">Documentation</span>
    </a>
  </li>
</ul>
</nav>