@extends('main') 
@section('title', '| Homepage') 
@section('content')
<div class="row">
	<div class="col-md-8 offset-md-2">
		<h1>Blog</h1>
	</div>
	
	@foreach($posts as $post)
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h2>{{ $post->title }}</h2>
			<h5>Published: {{ date('d.m.y', strtotime($post->created_at)) }}</h5>
			<p>{{ substr($post->body, 0, 250) }}{{ strlen($post->body) > 250 ? "..." : "" }}</p>
			<a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary mb-2">Read More</a>
			<hr>
		</div>
	</div>
	@endforeach
	<div class="col-md-8 offset-md-2">
		<div class="d-flex justify-content-center">
			{{ $posts->links() }}
		</div>
	</div>

</div>
@endsection