@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 mx-auto">
			<h1>Create New Post</h1>
			<hr>
			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
				{{ Form::label('title', 'Title:')}}
				{{ Form::text('title', null, array('class' => 'form-control mb-2', 'required' => '', 'maxlength' => '191'))}}
				
				{{ Form::label('body', 'Post Body:')}}
				{{ Form::textarea('body', null, array('class' => 'form-control mb-2', 'required' => ''))}}
				
				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block'))}}
			{!! Form::close() !!}
		</div>
	</div>

@endsection

	
@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection
