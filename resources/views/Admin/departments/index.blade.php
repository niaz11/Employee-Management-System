@extends('Admin.master')

@section('title', '| All Departments')

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary dept-margin">
				  <!-- Default panel contents -->
				  <div class="panel-heading head">Departments</div>
				  

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
							
							@foreach($departments as $department)
								
								<tr>
									<th class="scope-row"> {{ $department->id }} </th>
									<td> {{ $department->name }} </td>
									<td class="view"><a href="{{ route('departments.show', $department->id) }}" class="btn btn-success btn-sm">View</a> </td>
									<td>{!! Form::open(['route' => ['departments.destroy', $department->id], 'method' => 'DELETE','onsubmit' => 'return confirmDelete()']) !!}
						
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
						{!! Form::open(['route' => ['departments.store'], 'method' => 'POST']) !!}
							
							<h4 class="head">New Department</h4>
							{{ Form::label('name', 'Name:') }}
							{{ Form::text('name', null, ['class' => 'form-control']) }}

							{{ Form::submit('Create New Department', ['class' => 'btn btn-success btn-block form-spacing-top']) }}

						{!! Form::close() !!}
					</div>

				</div>
			</div>

	</div>

@stop

@section('scripts')
	<script type="text/javascript">
		function confirmDelete() {
		var result = confirm('Are you sure you want to delete?');

		if (result) {
		        return true;
		    } else {
		        return false;
		    }
		}
	</script>


@stop