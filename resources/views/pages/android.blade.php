@extends('main')

@section('title', ' | Services - ANDROID')

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
                    <li class="active">Android</li>
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
        <div class="row" style="background: #6ff06f;margin:0px;">
        	<div class="col-lg-6">
        		{{ Html::image('images/service/services-and.png','image', ['class' => 'img-responsive', 'style' => 'width:600px;height:400px;']) }}
        	</div>
        	
        	<div class="col-lg-6">
        		<h1>ANDROID APP DEVELOPMENT</h1>
        		<P>The foundation of Android development is built on Java – both a blessing and a curse for companies looking to create an Android app. Java is one of the most popular languages, and is often one of the first taught to developers in school. What this translates to is a sea of developers that all claim to understand and be proficient in Java. This volume makes it difficult to differentiate between merely competent and highly talented Android developers. Many of the times Android App development projects fail for the incompetence of developers. Dream71 Bangladesh Ltd is one of the leading Android App Development companies in Bangladesh which comes with the promise of understanding the requirement and delivering in the most finest possible manner.
				</P>
        	</div>
        </div>

        <div class="row" style="background: #28d1c51a;margin:0px; ">
        	<div class="col-lg-8 col-lg-offset-2" >
        		<h1 style="margin-top: 50px;text-align: center;">Android app Features</h1>
        		<p>•Common Java application architecture has no place in the Android Framework. Android apps have to be fast – 60fps fast. The days of acceptable laggy interfaces are long gone in the mobile landscape. Getting that type of performance across the ~20,000 android devices in existence isn’t easy and requires an incredible amount of attention to detail coupled with deep QA resources.</p>
				<p>• Android apps need to be memory efficient. The early android devices gave 16MB to apps and it’s not uncommon to see devices today that only give 60MB to each individual app to run. If you ask the average Java developer what their last application’s memory footprint is they either will not know or it’ll be far above that.</p>
				<p>• Android apps need to be able to close and open at any time and at any place in the app. Architecting for that isn’t something a traditional Java developer does day to day and it’s not something he or she will be able to flip on a dime and pick up right away.</p>

				<p>These requirements don’t translate to traditional Java applications and the Android framework itself doesn’t allow for traditional application design. Even the UI framework is entirely specific to Android. The way Android is structured, it could be argued that you’re better off hiring someone with no Java experience, who will take the time to really learn the Android Framework, instead of an experienced Java developer who will try to force their experience onto the App.</p>
        	</div>
        </div>

        <div class="row" style="background: #28d1c51a;margin:0px; ">
        	<div class="col-lg-8 col-lg-offset-2" >
        		<h1 style="margin-top: 100px;text-align: center;">Find A Great Android Developer</h1>
        		<p><strong> So how do you hire a top Android application development company in Bangladesh?</strong> Of course look at their experience and capabilities, but the devil is really in the details. Shoddy software is the result of cut corners that the client often cannot see — you need an Android team that takes pride in its work and makes sure every application is highly performant and maintainable. So what to look for? Some examples:</p>
				<p style="margin-top: 20px;">• The team should be efficient. Android teams need to have a desire to make great apps, but at the same time no one needs to make a $10,000 button. A successful Android team knows the expansive list of effective open source libraries that can speed up development and knows when and how to leverage them.</p>
				<p>• The team should be tightly integrated with the UX team. There are significant gains to have by designing apps well for the Android platform and a successful Android team helps guide the UX team in this manner. If the Android team isn’t fighting for better designs for their platform, then they’re not experienced enough to trust.</p>

				<p>• The team should have quality safeguards in place during development. This means tools and libraries that report back when an app fails to meet appropriate CPU and memory profiles. It’s hard for designers and users on modern devices to reproduce these lags and crashes, but your users on low end devices will suffer. Without these tools in place your product will either be subpar or your QA team will have to spend countless hours verifying your app on a wide range of devices.</p>
				<p>• The team should be tightly integrated with the QA team. With 20,000 potential devices your apps may run on, a successful Android team needs to have a strong affinity towards testing and should be working with QA daily. Having a strong testing suite built around your app is critical to the success of your app and ensuring the team can focus on building great features instead of playing whack-a-mole with bugs.</p>
				<p>• The team should be security focused. Avoiding security issues up front can save development time and results in a better product. While external security scans can turn up some issues, a security issue in your app is enough to ruin your reputation and it’s not worth the risk to employ a team that’s going to treat that as a low priority.</p>
        	</div>
        </div>

@endsection