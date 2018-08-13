@extends('main')

@section('title',' | About')

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')

	<!-- Page Heading/Breadcrumbs -->
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-12">
            <h1 class="page-header">About Us
            </h1>
            <ol class="breadcrumb">
                <li><a href="/">Home</a>
                </li>
                <li class="active">About</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Intro Content -->
    <div class="row">
        <div class="col-md-6">
            {{ Html::image('images/blog.png','image', ['class' => 'img-responsive image-size']) }}
        </div>
        <div class="col-md-6">
            <h2>About <strong>Nexus</strong> </h2>
            <p>
            	Nexus IT builds on over five years of experience in software development. It is one of the leading software companies in Bangladesh, pioneering in biometrics and is a world leader in Automated Fingerprint Identification System (AFIS). Nexus IT is one of the few companies worldwide to develop an NIST certified AFIS, and the first among the South Asian countries. We feel proud to represent Bangladesh at the forefront of biometrics and information technology.
            </p>
            <p>
                Nexus IT has successful track record of delivering innovative and cost-effective technical services to customers in both Corporate and public sectors undertakings.
        	</p>
            <p>
	            Our customer includes number of Fortune 500 companies and offering mission critical public services IT services like e-Payment, Customs House Automation, Port IT operation (CTMS), automation of commercial banks and more than 4000+ microfinancebanks in SaaS model on a private cloud, to name a few. We have track record in web application, Mobility, Bio-informatics, BigData, Simulation-Gamingand these days Internet of Thing Technology adaptation.
	        </p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-12">
            <h2 class="page-header">Our Team</h2>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="card">
                  {{ Html::image('images/niaz.jpg','image', ['style' => "width:100%; height:300px;"]) }}
                  <div style="margin: 15px 0;">
                    <a href="#" class="a"><i class="fa fa-2x fa fa-dribbble"></i></a> 
                    <a href="#" class="a"><i class="fa fa-2x fa fa-twitter"></i></a>  
                    <a href="#" class="a"><i class="fa fa-2x fa fa-linkedin"></i></a>  
                    <a href="#" class="a"><i class="fa fa-2x fa fa-facebook"></i></a> 
                 </div>
                 <p><button>Contact</button></p>
                </div>
            </div>
            <div class="col-md-8" style="font-size: 16px;">
                <h2>Niaz Mohammad</h2>
                <p class="title">CEO & Founder</p>
                <p>
                Niaz Mohammad is the CEO & Founder  of Nexus IT leads on its Board of Directors, is responsible for Nexus IT’s day-to-day-operations, as well as lead the company’s product & service development and technology strategy. He is a valiant freedom fighter, has been recognized one of the pioneer entrepreneur in the software industry.</p>
                <p>
                    Our Journey · What we do · How we do · Vision · Mission · Leadership Team · Organogram · Services · Dark Core · IP/Ethernet · SDH · DWDM · FTTX · Co-Location Service · Platform as a Service · Technology · DWDM · IP/MPLS · SDH · Metro Ethernet · GPON · Network · Long Haul Network ·
                </p>
            </div>
        </div>
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-4 text-center">
                <div class="card">
                  {{ Html::image('images/dixon.jpg','image', ['style' => "width:100%; height:300px;"]) }}
                  <div style="margin: 15px 0;">
                    <a href="#" class="a"><i class="fa fa-2x fa fa-dribbble"></i></a> 
                    <a href="#" class="a"><i class="fa fa-2x fa fa-twitter"></i></a>  
                    <a href="#" class="a"><i class="fa fa-2x fa fa-linkedin"></i></a>  
                    <a href="#" class="a"><i class="fa fa-2x fa fa-facebook"></i></a> 
                 </div>
                 <p><button>Contact</button></p>
                </div>
            </div>
            <div class="col-md-8" style="font-size: 16px;">
                <h2>Dixon Halder</h2>
                <p class="title">Co-Founder</p>
                <p>
                Dixon Halder is the Co Founder  of Nexus IT leads on its Board of Directors, is responsible for Nexus IT’s day-to-day-operations, as well as lead the company’s product & service development and technology strategy. He is a valiant freedom fighter, has been recognized one of the pioneer entrepreneur in the software industry.</p>
                <p>
                    Our Journey · What we do · How we do · Vision · Mission · Leadership Team · Organogram · Services · Dark Core · IP/Ethernet · SDH · DWDM · FTTX · Co-Location Service · Platform as a Service · Technology · DWDM · IP/MPLS · SDH · Metro Ethernet · GPON · Network · Long Haul Network ·
                </p>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Our Customers -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Our Clients & Partners</h2>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            {{ Html::image('images/bikash.png','image', ['class'=>"img-responsive customer-img"]) }}
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            {{ Html::image('images/share.jpg','image', ['class'=>"img-responsive customer-img"]) }}
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            {{ Html::image('images/bosundhara.png','image', ['class'=>"img-responsive customer-img"]) }}
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            {{ Html::image('images/citybank.jpg','image', ['class'=>"img-responsive customer-img"]) }}
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            {{ Html::image('images/robi.png','image', ['class'=>"img-responsive customer-img"]) }}
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            {{ Html::image('images/IBBL.jpg','image', ['class'=>"img-responsive customer-img"]) }}
        </div>
    </div>
    <!-- /.row -->

@endsection