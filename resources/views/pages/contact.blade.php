@extends('main')

@section('title',' | Contact')

@section('stylesheets')
    
@endsection

@section('content')

	        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact Us
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d58564.130394099295!2d91.16913225!3d23.451151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1519520107057" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    <strong style="font-size:20px;">Nexus</strong><br>Kotbari, Comilla 3506<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (+880) 1723 630231</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Sunday - Thursday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row" style="margin-top: 50px;">
                <div class="col-md-8">
                    <h2>Send us a Message</h2>
                    <hr>

                    <form action="{{ url('contact') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label name="email">Email:</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label name="subject">Subject:</label>
                            <input type="text" name="subject" class="form-control">
                        </div>

                        <div class="form-group">
                            <label name="message">Message:</label>
                            <textarea type="text" name="message" class="form-control" placeholder="Type your messages here..."></textarea>
                        </div>

                        <input type="submit" value="Send message" class="btn btn-success">
                    </form>
                </div>
            </div>

@endsection