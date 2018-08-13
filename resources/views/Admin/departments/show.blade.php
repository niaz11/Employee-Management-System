@extends('Admin.master')

<?php $titleTag = htmlspecialchars($department->name); ?>
@section('title', "| $titleTag ")

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary dept-margin">
				  <!-- Default panel contents -->
				  <div class="panel-heading head">{{$department->name}}</div>
				  

				  <!-- Table -->
				  <table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col">Designation</th>								
							</tr>
						</thead>
								
						<tbody>
							@foreach($department->users as $user)
								<tr>
									<td>{{ $user->id }} </td>
									<td>{{ $user->name }} </td>
									<td>{{ $user->designation->name }} </td>
								</tr>
						   @endforeach
						</tbody>
					</table>
				</div>
			</div><!--end of .col-md-7 -->

	</div>

@stop