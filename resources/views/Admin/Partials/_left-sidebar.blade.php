<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        {{ HTML::image('images/1519307985.jpg', 'User Image', ['class' => 'user-image']) }}
      </div>
      <div class="pull-left info">
        <p>Niaz Mohammad</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="{{ route('admin.dashboard') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>            
        </a>
      </li>
      <li>
        <a href="pages/mailbox/mailbox.html">
          <i class="fa fa-envelope"></i> <span>Mailbox</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-yellow">12</small>
            <small class="label pull-right bg-green">16</small>
            <small class="label pull-right bg-red">5</small>
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Leave Request</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('Leaves.index') }}"><i class="fa fa-circle-o"></i>All Leave Request</a></li>
        </ul>
      </li> 
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Department</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('departments.index') }}"><i class="fa fa-circle-o"></i> Add New Department</a></li>
        </ul>
      </li>  

     <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Designation</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('designations.index') }}"><i class="fa fa-circle-o"></i> Add New Designation</a></li>
        </ul>
      </li> 
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Employee</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('employee.index') }}"><i class="fa fa-circle-o"></i> Add New Employees</a>
          </li>
          <li><a href="{{ route('employee.create') }}"><i class="fa fa-circle-o"></i> All Employees</a>
          </li>
        </ul>
      </li>    

      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Salary</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('Salary.create') }}"><i class="fa fa-circle-o"></i> Make Salary</a>
          </li>
        </ul>
      </li>  

      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>News</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('DepartmentNews.create') }}"><i class="fa fa-circle-o"></i> Create Department News</a>
          </li>
        </ul>
      </li>           
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>