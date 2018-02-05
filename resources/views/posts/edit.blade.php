@extends('main')

@section('title', '| Edit Post')

@section('content')
	{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
	<!-- we need to add 'method' => 'PUT' for update -->
	<!-- by default form submit tries to do 'POST' -->
	<div class="row">
		
		<div class="col-md-8">
			{{ Form::label('title', 'Title:')}}
			{{ Form::text('title', null, ["class" => 'form-control form-control-lg mb-2']) }}
			
			{{ Form::label('slug', 'Slug:')}}
			{{ Form::text('slug', null, ["class" => 'form-control form-control-lg mb-2']) }}
			
			{{ Form::label('body', 'Post Body:')}}
			{{ Form::textarea('body', null, ["class" => 'form-control']) }}
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
							{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
							<!-- <a href="#" class="btn btn-primary btn-block">Edit</a> -->
						</div>
						<div class="col-sm-6">
							{{ Form::submit('Save Chenges', array('class' => 'btn btn-success btn-block'))}}
							<!-- <a href="#" class="btn btn-danger btn-block">Delete</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	{!! Form::close() !!}
@endsection
