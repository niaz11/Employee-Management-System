@extends('Admin.master')

<?php $titleTag = htmlspecialchars($user->name); ?>
@section('title', "| $titleTag ")

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
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
        				<h4> {{ $user->designation->name }} </h4>
        				<h4> {{ $user->department->name }} </h4>
        				<a href="#" class="font-color"><i class="fa fa-dribbble"></i></a>
					    <a href="#" class="font-color"><i class="fa fa-twitter"></i></a>
					    <a href="#" class="font-color"><i class="fa fa-linkedin"></i></a>
					    <a href="#" class="font-color"><i class="fa fa-facebook"></i></a>
        			</div>
        		</div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
			    <div class="col-md-12">
						<h2>Personal Information</small></h2>
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<label style="font-size: 16px;">Name:</label>
								<div class="well well-sm design">
									{{ $user->name }}
								</div>								
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<label style="font-size: 16px;">Email:</label>
								<div class="well well well-sm design">
									{{ $user->email }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">						
								<label style="font-size: 16px;">Gender:</label>
								<div class="well well well-sm design">
									{{ $user->gender }}
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<label style="font-size: 16px;">Birthdate:</label>
								<div class="well well well-sm design">
									{{ $user->birthdate }}
								</div>
							</div>
						</div>
						<label style="font-size: 16px;">Phone:</label>
						<div class="well well well-sm design">
							{{ $user->phone }}
						</div>
						<label style="font-size: 16px;">National ID:</label>
						<div class="well well well-sm design">
							{{ $user->national_id }}
						</div>

						<h2>Address</h2>
						<hr class="colorgraph">
						<label style="font-size: 16px;">Current Address:</label>
						<div class="well well well-sm design">
							{{ $user->current_address }}
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<label style="font-size: 16px;">City:</label>
								<div class="well well well-sm design">
									{{ $user->city }}
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">							<label style="font-size: 16px;">Country:</label>
								<div class="well well well-sm design">
									{{ $user->country }}
								</div>
							</div>
						</div>
						<h2>Educational Qualification</h2>
						<hr class="colorgraph">
						<label style="font-size: 16px;">Level of Education:</label>
						<div class="well well well-sm design">
							{{ $user->degree }}
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<label style="font-size: 16px;">Concentration:</label>
								<div class="well well well-sm design">
									{{ $user->subject }}
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<label style="font-size: 16px;">Institution:</label>
								<div class="well well well-sm design">
									{{ $user->institution }}
								</div>
							</div>
					   </div>
						<h2>Job Status</h2>
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<label style="font-size: 16px;">Joining Date:</label>
								<div class="well well well-sm design">
									{{ $user->join_date }}
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<label style="font-size: 16px;">Leave Staus:</label>
								<div class="well well well-sm design">
									{{ $user->onLeave }}
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<label style="font-size: 16px;">Leave Taken:</label>
								<div class="well well well-sm design">
									{{ $user->useLeave }}
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<label style="font-size: 16px;">Remaining Leave:</label>
								<div class="well well well-sm design">
									{{ $user->existLeave }}
								</div>
							</div>
						</div>	
						{!! Form::open(['route' => ['employee.destroy', $user->id], 'method' => 'DELETE']) !!}
						
						{!! Form::submit('Remove', ['class' => 'btn btn-danger btn-lg btn-block']) !!}
						
						{!! Form::close() !!}					
				</div>
           </div>
       </div>
	</div>
</div>       
@stop
@section('scripts')
    
@endsection 