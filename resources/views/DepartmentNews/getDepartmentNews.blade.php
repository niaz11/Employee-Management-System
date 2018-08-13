@extends('main')

@section('title', '| Department News')

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default dept-margin">
			  <!-- Default panel contents -->
			  <div class="panel-heading head">All Department Notificatins</div>
			  

			  <!-- Table -->
			  <table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Heading</th>
							<th scope="col">News</th>
							<th scope="col">Created At</th>
						</tr>
					</thead>

					<tbody>
						
						@foreach($requests as $request)
							
							<tr>
								<th class="scope-row"> {{ $request->id }} </th>
								<th class="scope-row"> {{ $request->title }} </th>
								<td>{{ substr(strip_tags($request->body), 0,40) }} {{ strlen(strip_tags($request->body)) > 40 ? "..." : "" }}</td>
					      
						        <td>{{ date('M j, Y h:ia',strtotime($request->created_at)) }}</td>
						      
						        <td><a href="{{ route('DepartmentNews.show', $request->id) }}" class="btn btn-primary btn-sm">View</a> 							
							</tr>
							
						@endforeach

					</tbody>
				</table>
			</div>
		</div><!--end of .col-md-7 -->
	</div>

@stop