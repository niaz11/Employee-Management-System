@extends('main')

@section('title','| View Post')

@section('content')
	<div class="row" style="margin-top: 80px;">
		<div class="col-md-6 col-md-offset-3">
			<h3>Heading: {{ $post->title }} </h3>
			<p class="lead">Details: {!! $post->body !!} </p>
			<p>Created At: {{date('M j, Y h:i A',strtotime($post->updated_at))}}</p>
		</div>

		<div class="col-md-3">
			<div class="well wel-sm">				
				<div class="row">
					<div class="col-sm-12">
						{!! Html::linkRoute('DepartmentNews.index', 'See more posts', [], ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 20px;'] ) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
	

@endsection