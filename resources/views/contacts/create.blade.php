@extends('layouts.default', ['title' => 'Contact'])

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2 col-sm-10 sm-offset-1">
			<h2>Get In Touch</h2>
			<p class="text-mute">If you having trouble with this service, please <a href="mailto:{{config('laracarte.admin_support_email')}}">ask for help</a>.</p>

			<form action="{{ route('contact_path') }}" method="POST">
				{{ csrf_field() }}

				<div class="form-group ">
					<label for="name" class="control-label">Name</label>
					<input class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name"  required="required" value="{{ old('name') ?: '' }}">
					{!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!}
				</div>

				<div class="form-group">
					<label for="email" class="control-label">Email</label>
					<input type="email" name="email" id="email" class="form-control {{ $errors->first('email') ? 'is-invalid' : '' }}" required="required" value="{{ old('email') ?: '' }}">
					{!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
				</div>

				<div class="form-group ">
					<label for="message" class="control-label sr-only">Message</label>
					<textarea class="form-control {{ $errors->first('message') ? 'is-invalid' : '' }}" name="message" id="message" cols="10" rows="10" required="required">{{ old('message') ?: '' }}</textarea>
					{!! $errors->first('message', '<span class="invalid-feedback">:message</span>') !!}
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-default btn-block">Submit Enquiry &raquo;</button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop