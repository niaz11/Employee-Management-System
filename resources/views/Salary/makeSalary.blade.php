@extends('Admin.master')

@section('title', '| Salary')

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')

		<div class="row">			
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-primary panel-margin">
					<div class="well wel-sm" style="background-color: lightblue;">
						<h4 class="head">Salary</h4>
					</div>
					<div class="panel-body">	
						{!! Form::open(['route' => ['Salary.store'], 'method' => 'POST']) !!}

							{{ Form::label('user_id', 'Name:') }}
							
							{{ Form::select('user_id', $employees, [], ['class' => 'form-control']) }}
							
							{{ Form::submit('Paid', ['class' => 'btn btn-success btn-block form-spacing-top']) }}

						{!! Form::close() !!}
					</div>

				</div>
			</div>

	</div>

@stop