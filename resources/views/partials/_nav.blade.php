<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{ HTML::image('images/nexus.jpg', 'a picture') }}</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::is('/') ? "active" : "" }}">
                    <a href="/">Home</a>
                </li>
                <li class="{{ Request::is('about') ? "active" : "" }}">
                    <a href="/about">About</a>
                </li>
                
                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="android">Android App Development </a>
                          </li>
                          <li>
                              <a href="web">Web App Development </a>
                          </li>
                          <li>
                              <a href="ios">IOS App Development </a>
                          </li>
                      </ul>
                </li>
                <li class="{{ Request::is('contact') ? "active" : "" }}">
                    <a href="/contact">Contact</a>
                </li>
                
                @if (Auth::user())
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ route('employees.index') }}">Employee List </a>
                          </li>
                      </ul>
                  </li>
                @endif
                @if (Auth::user())
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Application <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ route('Leave.show', Auth::user()->id) }}">Leave Request</a>
                          </li>
                          @if (Auth::user()->designation->name == 'System Analyst')
                          <li>
                              <a href="{{ route('Leave.index') }}">Leave Approval</a>
                          </li>
                          @endif
                      </ul>
                  </li>
                @endif
                @if (Auth::user())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notification <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="inbox">Leave</a>
                        </li>
                        <li>
                            <a href="{{ route('Salary.index') }}">Salary</a>
                        </li>
                        <li>
                            <a href="{{ route('DepartmentNews.index') }}">Department News</a>
                        </li>
                    </ul>
                </li>
                @endif
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">Login<span class="glyphicon glyphicon-log-in"></span></a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="#">|</a></li>
                      <li class="nav-item {{ Request::is('register') ? "active" : "" }}">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                      </li>
                  @else
                      <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          
                           {{ Html::image('images/'.Auth::user()->image,Auth::user()->name, ['class' => 'user-image']) }} 
                          
                          {{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="width: 180px; background-color: #3c8dbc;">
                          <!-- User image -->
                          <li class="user-header">
                            {{ Html::image('images/'.Auth::user()->image,Auth::user()->name, ['class' => 'img-circle', 'style'=>"width:170;"]) }}
                            <p style="color: black;">
                              {{ Auth::user()->name }}
                              <small> {{ Auth::user()->designation->name }}</small>
                            </p>
                          </li>
                          <!-- Menu Footer-->
                          <li class="user-footer">
                            <div class="pull-left">
                              <a href="{{ route('employees.show', Auth::user()->id) }}" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                              <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Log out
                              </a>
                              {!! Form::open(['route' => ['logout'], 'method' => 'POST', 'style' => 'display: none;', 'id' => 'logout-form']) !!}
                              {!! Form::close() !!}
                            </div>
                          </li>
                        </ul>
                      </li>
                  @endguest
              </ul>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>