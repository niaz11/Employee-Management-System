@extends('main')

@section('title', '| All Leave Requests')

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default dept-margin">
			  <!-- Default panel contents -->
			  <div class="panel-heading head">All leave Notificatins</div>
			  

			  <!-- Table -->
			  <table class="table">
					<thead>
						<tr>
							<th scope="col">Title</th>
							<th scope="col">Application</th>
							<th scope="col">Accept / Reject</th>
						</tr>
					</thead>

					<tbody>
						
						@foreach($requests as $request)
							
							<tr>
								<th class="scope-row"> {{ $request->title }} </th>
								<td> {{ $request->application }} </td>
								<td>
									@if ($request->view == '0')
									    Leave request is pending.
									@elseif ($request->view == '1')
									    Leave request is accepted.
									@else
									    Leave request is rejected.
									@endif 
							    </td>								
							</tr>
							
						@endforeach

					</tbody>
				</table>
			</div>
		</div><!--end of .col-md-7 -->
	</div>

@stop