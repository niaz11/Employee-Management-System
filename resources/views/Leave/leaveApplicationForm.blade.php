@extends('main')

@section('title', ' | Leave')

@section('stylesheets')
    {!! Html::style('css/jquery-ui.min.css') !!}
    {!! Html::style('css/datepicker.css') !!}
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')

	<!-- Page Heading/Breadcrumbs -->
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-12">
            <h1 class="page-header" style="font-size: 20px;">Leave Application Form
            </h1>
            <ol class="breadcrumb">
                <li><a href="/">Home</a>
                </li>
                <li class="active">Leave Request</li>
            </ol>
        </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-2 form">
            
            {!! Form::open(['route' => ['Leave.store'], 'method' => 'POST','class' => 'margin']) !!}
                
                <h2 style="text-align: center;">Application Form</small></h2>
                <hr class="colorgraph">
                <div class="form-group">
                    {{ Form::label('headmail', 'To:') }}
                    {{ Form::select('headmail', $head, [], ['class' => 'form-control well well-sm']) }}

                </div>

                <div class="form-group">
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', old('title'), ['class' => 'form-control']) }}
                <div class="form-group">
                    {{ Form::label('application', 'Application:') }}
                    {{ Form::textarea('application', null, ['class' => 'form-control', 'rows' => '5']) }}
                </div> 
 				
 				<div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
		                <div class="form-group">

		                    {{ Form::label('start_date', 'Starting Date:') }}
		                    {{ Form::text('start_date',old('start_date'), ['class' => 'form-control', 'placeholder' => "dd/mm/yy", 'id'=>'dp_1']) }}
		                </div>
		            </div>
	                <div class="col-xs-12 col-sm-6 col-md-6">
		                <div class="form-group">

		                    {{ Form::label('end_date', 'Ending Date:') }}
		                    {{ Form::text('end_date',old('end_date'), ['class' => 'form-control', 'placeholder' => "dd/mm/yy", 'id'=>'dp_2']) }}
		                </div>
		            </div>
		        </div>
		        <div class="form-group">
		                    
		            {{ Form::submit('Apply', ['class' => 'btn btn-primary btn-lg btn-block']) }}

		        </div>
            {!! Form::close() !!}
            

        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script type="text/javascript">
	    $('#dp_1').datepicker({
	        toggleSelected: true,
	        inline: false,
	        range: false,
	        
	    })
	</script>

	<script type="text/javascript">
	    $('#dp_2').datepicker({
	        toggleSelected: true,
	        inline: false,
	        range: false,
	        
	    })
	</script>
@endsection 