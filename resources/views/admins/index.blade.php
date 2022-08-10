
    @include('includes.header_css')
    
      @if(Auth::user()->roleId == 1){
        <div class="main-wrapper">
            <div class="header">
              @include('layouts.header_menu')
            </div>

            <div class="sidebar" id="sidebar">
              <!-- @include('layouts.sidebar') -->
              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: auto;">
                  <div class="sidebar-inner slimscroll" style="overflow: hidden; width: 100%; height: auto;">
                      <div class="sidebar-menu" id="sidebar-menu">
                          <ul>
                              <li class="menu-title"><span>Main</span></li>
                              <li class="submenu">
                                  <a href="#" class="active"><i class="fa fa-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                                  <ul style="display: block;">
                                      <li><a href="#" class="active">Admin Dashboard</a></li>
                                      <li><a href="#">Employee Dashboard</a></li>
                                  </ul>
                              </li>
                              
                              <li><a href="{{ url("showAttendence") }}"><i class="fa fa-users"></i> <span>Attendance</span></a></li>
                              <li><a href="{{ route('register') }}"><i class="fa fa-users"></i> <span>Create User</span></a></li>
                              <li><a href="{{ url("showUsers") }}"><i class="fa fa-users"></i> <span>List of User</span></a></li>
                              <li><a href="{{ url("applyleave") }}"><i class="fa fa-users"></i> <span>Apply Leave</span></a></li>
                              <li><a href="{{ route('logout') }}"><i class="fa fa-users"></i> <span>Logout</span></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
            </div>

            <!-- Content Block start -->
            <div class="page-wrapper">
              <div class="content container-fluid">
                  @include('layouts.dashboard_content')
              </div>
            </div>

        </div>
      @endif

    @include('includes.footer')
