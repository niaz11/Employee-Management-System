<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Nexus @yield('title')</title><!--Change this title for each page-->

<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<!-- Bootstrap 3.3.7 -->
{!! Html::style('css/bootstrap.min.css') !!}
<!-- Font Awesome -->
{!! Html::style('css/font-awesome.min.css') !!}
<!-- Ionicons -->
{!! Html::style('css/ionicons.min.css') !!}
<!-- Theme style -->
{!! Html::style('css/AdminLTE.min.css') !!}
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
{!! Html::style('css/_all-skins.min.css') !!}
<!-- jvectormap -->
{!! Html::style('css/jquery-jvectormap.css') !!}
<!-- Date Picker -->
{!! Html::style('css/bootstrap-datepicker.min.css') !!}
<!-- Daterange picker -->
{!! Html::style('css/daterangepicker.css') !!}
<!-- bootstrap wysihtml5 - text editor -->
{!! Html::style('css/bootstrap3-wysihtml5.min.css') !!}

@yield('stylesheets')