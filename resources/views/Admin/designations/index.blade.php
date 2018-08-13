@extends('Admin.master')

@section('title', '| All Designations')

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary dept-margin">
				  <!-- Default panel contents -->
				  <div class="panel-heading head">Designations</div>
				  

				  <!-- Table -->
				  <table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col"></th>
								<th scope="col"></th>
								
							</tr>
						</thead>

						<tbody>
							
							@foreach($designations as $designation)
								
								<tr>
									<th class="scope-row"> {{ $designation->id }} </th>
									<td> {{ $designation->name }} </td>
									<td class="view"><a href="{{ route('designations.show', $designation->id) }}" class="btn btn-success btn-sm">View</a> </td>
									<td>{!! Form::open(['route' => ['designations.destroy', $designation->id], 'method' => 'DELETE']) !!}
						
									{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm view']) !!}
									
									{!! Form::close() !!}</td>
								</tr>
								
							@endforeach

						</tbody>
					</table>
				</div>
			</div><!--end of .col-md-7 -->
			
			<div class="col-md-4 col-md-offset-2">
				<div class="panel panel-primary panel-margin">
					<div class="panel-body">	
						{!! Form::open(['route' => ['designations.store'], 'method' => 'POST']) !!}
							
							<h4 class="head">New Designation</h4>
							{{ Form::label('name', 'Name:') }}
							{{ Form::text('name', null, ['class' => 'form-control']) }}

							{{ Form::submit('Create New Department', ['class' => 'btn btn-success btn-block form-spacing-top']) }}

						{!! Form::close() !!}
					</div>

				</div>
			</div>

	</div>

@stop