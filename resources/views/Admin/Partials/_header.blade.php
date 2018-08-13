<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">{{ HTML::image('images/nexus-logo.jpg', 'User Image', ['class' => 'user-image']) }}</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Nexus</b>{{ HTML::image('images/nexus-logo.jpg', 'User Image', ['class' => 'user-image']) }}</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            {{ HTML::image('images/1519307985.jpg', 'User Image', ['class' => 'user-image']) }}
            <span class="hidden-xs">Niaz Mohammad</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              {{ HTML::image('images/1519307985.jpg', 'User Image', ['class' => 'img-circle']) }}
              <p>
                Niaz Mohammad - Web Developer
                <small>Member since Nov. 2017</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="row">
                <div class="col-xs-6 text-center">
                  <a href="#">Followers</a>
                </div>
                <div class="col-xs-6 text-center">
                  <a href="#">Friends</a>
                </div>
              </div>
              <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out
                </a>
                {!! Form::open(['route' => ['logout'], 'method' => 'POST', 'style' => 'display: none;', 'id' => 'logout-form']) !!}
                {!! Form::close() !!}
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>