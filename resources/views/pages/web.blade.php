@extends('main')

@section('title', ' | Services - WEB')

@section('content')

        <!-- Page Heading/Breadcrumbs -->
        <div class="row" style="margin-top: 50px;">
            <div class="col-lg-12">
                <h1 class="page-header">Our Services
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="">Services</li>
                    <li class="active">WEB</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <div class="row">
            <div class="col-lg-12">
                {{ Html::image('images/service/services-banner.jpg','image', ['class' => 'img-responsive', 'style' => 'width:1200px;height:300px;']) }}
            </div>
        </div>
        <!-- /.row -->
        <div class="row" style="background: #0babf6b3;margin:0px;">
        	<div class="col-lg-7">
        		{{ Html::image('images/service/services-web.png','image', ['class' => 'img-responsive', 'style' => 'width:700px;height:600px;']) }}
        	</div>
        	
        	<div class="col-lg-5">
                {{ Html::image('images/service/index.png','image', ['class' => 'img-responsive', 'style' => 'width:80px;height:80px;margin-top:30px;']) }}
        		<h1>WEB APP DEVELOPMENT</h1>
        		<P>Innovation and change define the mobile landscape, and Apple’s iOS is at the forefront. Our iOS team embraces change, and as the iOS ecosystem has grown we have incorporated every new feature and technology. We understand how the iPhone, iPad, Apple Watch, and Apple TV can work together, and know how to leverage each of their strengths to create solutions spanning all of Apple’s mobile offerings.
				</P>
        	</div>
        </div>

        <div class="row" style="background: #28d1c51a;margin:0px; ">
        	<div class="col-lg-8 col-lg-offset-2" >
        		<h1 style="margin-top: 50px;text-align: center;">Nexus web app developers stay</h1>
        		<p>on top of emerging trends in software development and architecture, working closely with clients to build incredible apps their audiences want to use and keep coming back to. Our commitment to quality and staying on top of the changing mobile landscape makes it essential for our mobile developers to leverage as much reusable work as possible.</p>
        	</div>
        </div>

        <div class="row" style="background: #28d1c51a;margin:0px; ">
        	<div class="col-lg-8 col-lg-offset-2" >
        		<h1 style="margin-top: 100px;text-align: center;">WE MAINTAIN</h1>
        		<p>A set of best practices with regard to Apple and open source frameworks and libraries. This allows us not only to select the right tool for the job, but also understand how to use it the best and most efficient way possible.</p>
				<p style="margin-top: 20px;">A set of internal and open source helper libraries and frameworks. These include helpers for efficient functional programing, layout, database, and other common tasks. These allow us to ignore the boilerplate parts of development and focus on adding real value to our projects.

                A set of high-quality, high-performance, reusable UI controls that are in line with Apple’s user interface guidelines and integrate seamlessly into any iOS app. Our UX team has iterated on these guidelines to ensure every iOS app we ship features an excellent user experience that doesn’t have to be built from scratch for every project.</p>
				
        	</div>
        </div>

@endsection