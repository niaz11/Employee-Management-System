@extends('main')

@section('title',' | Homepage')

@section('stylesheets')
    {!! Html::style('css/carousel.css') !!}
@endsection

@section('header')
        <!-- Header Carousel -->
    <header id="myCarousel" class="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/software.jpg');"></div>
                <div class="carousel-caption">
                    <h2>IT'S TIME TO BE SUPER AGGRESIVE TO FINE </h2>
                    <h2>NEW BUSSINESS VALUES WITH <STRONG>BIG DATA</STRONG> </h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/trainingmain-2.jpg');"></div>
                <div class="carousel-caption">
                    <h1>Welcome</h1>
                    <h2>You are at the right place to get your</h2>
                    <h2>desired <STRONG>Mobile Application</STRONG> build.</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/trainingmain-3.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/banner.jpg');"></div>
                <div class="carousel-caption">
                    <h2>A CUSTOMIZED SOLUTION FOR EVERY SOFTWARE DEVELOPMENT NEED.</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/blog.png');"></div>
                <div class="carousel-caption">
                    <h2>We have experties to make your all requirements fullfilled.</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
@endsection

@section('content')
    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="margin-top: 30px;font-size: 30px;">
                Welcome to <strong>Nexus</strong> 
            </h1>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i> PHP</h4>
                </div>
                <div class="panel-body">
                    <p>PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group.</p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-gift"></i> Laravel</h4>
                </div>
                <div class="panel-body">
                    <p>Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern. The Laravel Ecosystem. Revolutionize how you build the web.</p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-compass"></i> MySQL</h4>
                </div>
                <div class="panel-body">
                    <p>MySQL is an open-source relational database management system. Its name is a combination of "My", the name of co-founder Michael Widenius's daughter, and "SQL", the abbreviation for Structured Query Language.MySQL is written in C and C++. Its SQL parser is written in yacc.</p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header" style="margin-top: 30px;font-size: 30px;">Our Projects Protflio</h2>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                {{ Html::image('images/project/image.jpg','image', ['class' => 'img-responsive img-portfolio img-hover']) }}
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                {{ Html::image('images/project/image1.jpg','image', ['class' => 'img-responsive img-portfolio img-hover']) }}
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                {{ Html::image('images/project/image2.jpg','image', ['class' => 'img-responsive img-portfolio img-hover']) }}
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                {{ Html::image('images/project/image3.jpg','image', ['class' => 'img-responsive img-portfolio img-hover']) }}
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                {{ Html::image('images/project/image4.jpg','image', ['class' => 'img-responsive img-portfolio img-hover']) }}
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                {{ Html::image('images/project/awesome.jpg','image', ['class' => 'img-responsive img-portfolio img-hover']) }}
            </a>
        </div>
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Nexus Features</h2>
        </div>
        <div class="col-md-8">
            <p>The Nexus Website by Start Bootstrap includes:</p>
            <ul>
                <li><strong>Laravel v5.6</strong>
                </li>
                <li>jQuery v1.11.0</li>
                <li>Bootstrap v3.3.7</li>
                <li>Font Awesome v5.1.0</li>
                <li>Working Laravel Framwork validation</li>
                <li>Unstyled page elements for easy customization</li>
            </ul>
            <p style="width: 700px;">This Project includes a development presentation of an information system for managing the staff data within a small company or organization. The system as such as it has been developed is called Employee Management System. It consists of functionally related GUI (application program) and database.</p>
        </div>
        <div class="col-md-4">
            {{ Html::image('images/project/employee_benefit.jpg','image', ['class' => 'img-responsive img-hover']) }}
        </div>
    </div>
    <!-- /.row -->
@endsection

@section('scripts')
    <script src="{{ asset('js/carousel.js') }}"></script>
@endsection 