@extends('main')

@section('title', ' | Services - IOS')

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
                    <li class="active">IOS</li>
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
        <div class="row" style="background: #f34a6e;margin:0px;">
        	<div class="col-lg-7">
        		{{ Html::image('images/service/services-ios.png','image', ['class' => 'img-responsive', 'style' => 'width:600px;height:600px;']) }}
        	</div>
        	
        	<div class="col-lg-5">
                {{ Html::image('images/service/network.png','image', ['class' => 'img-responsive', 'style' => 'width:80px;height:80px;margin-top:30px;']) }}
                <h1>IOS APP DEVELOPMENT</h1>
        		<P>Innovation and change define the mobile landscape, and Apple’s iOS is at the forefront. Our iOS team embraces change, and as the iOS ecosystem has grown we have incorporated every new feature and technology. We understand how the iPhone, iPad, Apple Watch, and Apple TV can work together, and know how to leverage each of their strengths to create solutions spanning all of Apple’s mobile offerings.
				</P>
        	</div>
        </div>

        <div class="row" style="background: #28d1c51a;margin:0px; ">
        	<div class="col-lg-8 col-lg-offset-2" >
        		<h1 style="margin-top: 50px;text-align: center;">Nexus iOS app developers stay</h1>
        		<p>On top of emerging trends in software development and architecture, working closely with clients to build incredible apps their audiences want to use and keep coming back to. Our commitment to quality and staying on top of the changing mobile landscape makes it essential for our mobile developers to leverage as much reusable work as possible.</p>
        	</div>
        </div>

        <div class="row" style="background: #28d1c51a;margin:0px; ">
        	<div class="col-lg-8 col-lg-offset-2" >
        		<h1 style="margin-top: 100px;text-align: center;">WE MAINTAIN</h1>
                <p>• A set of best practices with regard to Apple and open source frameworks and libraries. This allows us not only to select the right tool for the job, but also understand how to use it the best and most efficient way possible.</p>
        		<p>• A set of internal and open source helper libraries and frameworks. These include helpers for efficient functional programing, layout, database, and other common tasks. These allow us to ignore the boilerplate parts of development and focus on adding real value to our projects.</p>

                <p>• A set of high-quality, high-performance, reusable UI controls that are in line with Apple’s user interface guidelines and integrate seamlessly into any iOS app. Our UX team has iterated on these guidelines to ensure every iOS app we ship features an excellent user experience that doesn’t have to be built from scratch for every project.</p>
				
        	</div>
        </div>
        <div class="row" style="background: #28d1c51a;margin:0px; ">
            <div class="col-lg-8 col-lg-offset-2" >
                <h1 style="margin-top: 100px;text-align: center;">Selecting the Best Team</h1>
                
                <p><strong> So how do you hire a top Android application development company in Bangladesh?</strong> Of course look at their experience and capabilities, but the devil is really in the details. Shoddy software is the result of cut corners that the client often cannot see — you need an Android team that takes pride in its work and makes sure every application is highly performant and maintainable. So what to look for? Some examples:</p>
                <p style="margin-top: 20px;">• The team should be efficient. Android teams need to have a desire to make great apps, but at the same time no one needs to make a $10,000 button. A successful Android team knows the expansive list of effective open source libraries that can speed up development and knows when and how to leverage them.</p>
                <p>• The team should be tightly integrated with the UX team. There are significant gains to have by designing apps well for the Android platform and a successful Android team helps guide the UX team in this manner. If the Android team isn’t fighting for better designs for their platform, then they’re not experienced enough to trust.</p>

                <p>• The team should have quality safeguards in place during development. This means tools and libraries that report back when an app fails to meet appropriate CPU and memory profiles. It’s hard for designers and users on modern devices to reproduce these lags and crashes, but your users on low end devices will suffer. Without these tools in place your product will either be subpar or your QA team will have to spend countless hours verifying your app on a wide range of devices.</p>
                <p>• The team should be tightly integrated with the QA team. With 20,000 potential devices your apps may run on, a successful Android team needs to have a strong affinity towards testing and should be working with QA daily. Having a strong testing suite built around your app is critical to the success of your app and ensuring the team can focus on building great features instead of playing whack-a-mole with bugs.</p>
                <p>• The team should be security focused. Avoiding security issues up front can save development time and results in a better product. While external security scans can turn up some issues, a security issue in your app is enough to ruin your reputation and it’s not worth the risk to employ a team that’s going to treat that as a low priority.</p>
            </div>
        </div>

@endsection