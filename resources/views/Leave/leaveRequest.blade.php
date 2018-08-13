@extends('main')

@section('title', '| All Requests')

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default dept-margin">
			  <!-- Default panel contents -->
			  <div class="panel-heading head">All leave Requests</div>
			  

			  <!-- Table -->
			  <table class="table">
					<thead>
						<tr>
							<th scope="col">Employee ID</th>
							<th scope="col">Name</th>
							<th scope="col">Department</th>
							<th scope="col">Designation</th>
							<th scope="col"></th>
							<th scope="col"></th>
							
						</tr>
					</thead>

					<tbody>
						
						@foreach($requests as $request)
							
							<tr>
								<th class="scope-row"> {{ $request->user_id }} </th>
								<td> {{ $request->name }} </td>
								<td> {{ $request->department }} </td>
								<td> {{ $request->designation }} </td>
								<td class="view"><a href="{{ route('Leave.edit', $request->id) }}" class="btn btn-success btn-sm">View</a> </td>

								<td class="view"><a href="{{ route('Leave.reject', $request->id) }}" class="btn btn-danger btn-sm">Reject</a> </td>
								
							</tr>
							
						@endforeach

					</tbody>
				</table>
			</div>
		</div><!--end of .col-md-7 -->
	</div>

@stop