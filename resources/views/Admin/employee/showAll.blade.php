@extends('Admin.master')

@section('title', '| All Employees')

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default dept-margin">
			  <!-- Default panel contents -->
			  <div class="panel-heading head">All Employees</div>
			  

			  <!-- Table -->
			  <table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Department</th>
							<th scope="col">Designation</th>
							<th scope="col">Joining Date</th>
							<th scope="col"></th>
							
						</tr>
					</thead>

					<tbody>
						
						@foreach($users as $user)
							
							<tr>
								<th class="scope-row"> {{ $user->id }} </th>
								<td> {{ $user->name }} </td>
								<td> {{ $user->department->name }} </td>
								<td> {{ $user->designation->name }} </td>
								<td> {{ $user->join_date }} </td>
								<td><a href="{{ route('employee.eachProfile', $user->id) }}" class="btn btn-success btn-sm">View</a> </td>
							</tr>
							
						@endforeach

					</tbody>
				</table>
			</div>
		</div><!--end of .col-md-7 -->
	</div>

@stop