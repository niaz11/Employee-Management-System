@extends('Admin.master')

<?php $titleTag = htmlspecialchars($user->name); ?>
@section('title', "| $titleTag ")

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
    {!! Html::style('css/jquery-ui.min.css') !!}
    {!! Html::style('css/datepicker.css') !!}
@endsection

@section('content')

<div class="container" style="width: 1120px;">
	<div class="row" id="main" style="margin-top: 20px;margin-left: 20px;margin-right: 20px;">
		<div class="col-md-4 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                	<div>
        				{{ Html::image('images/'.$user->image, $user->name, ['class' => 'img-circle img-thumbnail']) }}
        				<h2>{{$user->name}}</h2>
        			</div>
        		</div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
			    <div class="col-md-12">
			    	{!! Form::model($user, ['route' => ['employee.update', $user->id], 'method' => 'PUT']) !!}
						<h2>Personal Information</small></h2>
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
			                        {{ Form::label('name', 'Name:') }}
									{{ Form::text('name', null, ['class' => 'form-control input-lg', 'placeholder'=>"Name", 'disabled'=>'disabled']) }}
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									{{ Form::label('email', 'Email:') }}
									{{ Form::email('email', null, ['class' => 'form-control input-lg', 'disabled'=>'disabled']) }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									{{ Form::label('gender', 'Gender:') }}
									{{ Form::text('gender', null, ['class' => 'form-control input-lg', 'disabled'=>'disabled']) }}
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									{{ Form::label('birthdate', 'Birthdate:') }}
									{{ Form::text('birthdate', null, ['class' => 'form-control input-lg', 'disabled'=>'disabled']) }}
								</div>
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('phone', 'Phone:') }}
							{{ Form::text('phone', null, ['class' => 'form-control input-lg', 'disabled'=>'disabled']) }}
						</div>
						<div class="form-group">
							{{ Form::label('national_id', 'National ID:') }}
							{{ Form::text('national_id', null, ['class' => 'form-control input-lg', 'disabled'=>'disabled']) }}
						</div>

						<h2>Address</h2>
						<hr class="colorgraph">
						<div class="form-group">
							{{ Form::label('current_address', 'Current Address:') }}
							{{ Form::text('current_address', null, ['class' => 'form-control input-lg', 'disabled'=>'disabled']) }}
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									{{ Form::label('city', 'City:') }}
									{{ Form::text('city', null, ['class' => 'form-control input-lg', 'disabled'=>'disabled']) }}
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">							<div class="form-group">
									{{ Form::label('country', 'Country:') }}
									{{ Form::text('country', null, ['class' => 'form-control input-lg', 'disabled'=>'disabled']) }}
								</div>
							</div>
						</div>
						<h2>Educational Qualification</h2>
						<hr class="colorgraph">
						<div class="form-group">
							{{ Form::label('degree', 'Level of Education:') }}
							{{ Form::text('degree', null, ['class' => 'form-control input-lg', 'disabled'=>'disabled']) }}
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
			                        {{ Form::label('subject', 'Concentration:') }}
									{{ Form::text('subject', null, ['class' => 'form-control input-lg', 'disabled'=>'disabled']) }}
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									{{ Form::label('institution', 'Institution:') }}
									{{ Form::text('institution', null, ['class' => 'form-control input-lg', 'disabled'=>'disabled']) }}
								</div>
							</div>
					   </div>
						<h2>Apply for Position</h2>
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
			                        {{ Form::label('department_id', 'Department:') }}
									{{ Form::text('department_id', $user->department->name, ['class' => 'form-control input-lg', 'disabled'=>'disabled']) }}
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									{{ Form::label('designation_id', 'Designation:') }}
									{{ Form::text('designation_id', $user->designation->name, ['class' => 'form-control input-lg', 'disabled'=>'disabled']) }}
								</div>
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('join_date', 'Joining Date:') }}
                    		{{ Form::text('join_date',old('join_date'), ['class' => 'form-control', 'id'=>"dp_1", 'placeholder' => "dd/mm/yy"]) }}
						</div>
						
						
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-md-6"></div>
							<div class="col-xs-12 col-md-6">
								{{ Form::submit('Confirm', ['class' => 'btn btn-success btn-block btn-lg']) }}
							</div>
						</div>
					{!! Form::close() !!}
				</div>
           </div>
       </div>
	</div>
</div>       
@stop
@section('scripts')
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script type="text/javascript">
    $('#dp_1').datepicker({
        toggleSelected: true,
        inline: false,
        range: false,
        
    })
</script>
@endsection 