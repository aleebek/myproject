@extends('main') @section('title', '| Homepage') @section('content')
<div class="row">
	<div class="col-md-12">
		<div class="jumbotron col-md-12">
			<h1 class="display-4">Welcome to my blog!</h1>
			<p class="lead">Thank you so much for visiting my blog</p>
			<hr class="my-4">
			<p>Nam malis elit se proident si sed esse iudicem despicationes. Fore mandaremus id arbitror ad cernantur nulla doctrina aliquip. Dolor pariatur ad arbitror.</p>
			<p class="lead">
				<a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
			</p>
		</div>
	</div>
</div>
<!-- End of .row -->
<div class="row">
	<div class="col-md-8">
		@foreach($posts as $post)
			<div class="post">
				<h3>{{ $post->title }}</h3>
				<p class="lead">{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
				<a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
			</div>
			<hr class="my-4">
		@endforeach
	</div>
	<div class="col-md-3 col-md-offset-1">
		<h2>Sidebar</h2>
	</div>
</div>
@endsection