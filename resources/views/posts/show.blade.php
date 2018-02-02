@extends('main')

@section('title', '| View Post')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
			
			<p class="lead">{{ $post->body }}</p>
		</div>
		
		<div class="col-md-4">
			<div class="card bg-light">
				<div class="card-body">
					<dl class="row">
						<dt class="col-sm-5 text-truncate text-right">Created At:</dt>
						<dd class="col-sm-7 pl-0">{{ date('d.m.y H:i', strtotime($post->created_at)) }}</dd>
						<dt class="col-sm-5 text-truncate text-right">Last Updated:</dt>
						<dd class="col-sm-7 pl-0">{{ date('d.m.y H:i', strtotime($post->updated_at)) }}</dd>
						
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
							<!-- <a href="#" class="btn btn-primary btn-block">Edit</a> -->
						</div>
						<div class="col-sm-6">
							{!! Html::linkRoute('posts.destroy', 'Delete', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
							<!-- <a href="#" class="btn btn-danger btn-block">Delete</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
