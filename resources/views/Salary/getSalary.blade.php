@extends('main')

@section('title', '| Payment History')

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default dept-margin">
			  <!-- Default panel contents -->
			  <div class="panel-heading head">All Payment Notificatins</div>
			  

			  <!-- Table -->
			  <table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Department</th>
							<th scope="col">Designation</th>
							<th scope="col">Amount</th>
							<th scope="col">Date of pay</th>
						</tr>
					</thead>

					<tbody>
						
						@foreach($requests as $request)
							
							<tr>
								<th class="scope-row"> {{ $request->id }} </th>
								<th class="scope-row"> {{ $request->name }} </th>
								<td> {{ $request->department }} </td>
								<td> {{ $request->designation }} </td>								
								<td> {{ $request->amount }} </td>								
								<td> {{ $request->created_at }} </td>								
							</tr>
							
						@endforeach

					</tbody>
				</table>
			</div>
		</div><!--end of .col-md-7 -->
	</div>

@stop