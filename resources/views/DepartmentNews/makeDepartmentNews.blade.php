@extends('Admin.master')

@section('title', '| Event')

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')

		<div class="row">			
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-primary panel-margin">
					<div class="well wel-sm" style="background-color: lightblue;">
						<h4 class="head">Department News</h4>
					</div>
					<div class="panel-body">	
						{!! Form::open(['route' => ['DepartmentNews.store'], 'method' => 'POST']) !!}

							
							{{ Form::label('title', 'Heading:') }}
							{{ Form::text('title',null, ['class' => 'form-control']) }}
							
							{{ Form::label('department', 'Department:', ['class' => 'form-spacing-top']) }}
							
							{{ Form::select('department', $employees, [], ['class' => 'form-control']) }}
							
							{{ Form::label('body', 'News Body:', ['class' => 'form-spacing-top']) }}
							{{ Form::textarea('body', null, ['class' => 'form-control']) }}
							
							{{ Form::submit('Create News', ['class' => 'btn btn-success btn-block form-spacing-top']) }}

						{!! Form::close() !!}
					</div>

				</div>
			</div>

	</div>

@stop