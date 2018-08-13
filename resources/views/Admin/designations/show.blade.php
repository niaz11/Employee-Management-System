@extends('Admin.master')

<?php $titleTag = htmlspecialchars($designation->name); ?>
@section('title', "| $titleTag ")

@section('stylesheets')
    {!! Html::style('css/app.css') !!}
@endsection

@section('content')

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary dept-margin">
				  <!-- Default panel contents -->
				  <div class="panel-heading head">{{$designation->name}}</div>
				  

				  <!-- Table -->
				  <table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col">Department</th>								
							</tr>
						</thead>
								
						<tbody>
							@foreach($designation->users as $user)
								<tr>
									<td>{{ $user->id }} </td>
									<td>{{ $user->name }} </td>
									<td>{{ $user->department->name }} </td>
								</tr>
						   @endforeach
						</tbody>
					</table>
				</div>
			</div><!--end of .col-md-7 -->

	</div>

@stop