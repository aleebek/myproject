@extends('main') @section('title', '| Contact') @section('content')
<div class="row">
	<div class="col-md-8 offset-md-2">
		<h1>Contact Me</h1>
		<hr>
		<form>
			<div class="form-group">
				<label name="email">Email:</label>
				<input name="email" id="email" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label name="subject">Subject:</label>
				<input name="subject" id="subject" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label name="message">Message:</label>
				<textarea name="message" id="message" type="text" class="form-control">Type your message here...</textarea>
			</div>
			<input type="submit" value="Send Message" class="btn btn-success">
		</form>
	</div>
</div>
@endsection
