@extends('layouts.master')

@section('content')
    <div class="col-md-12">
    	<div class="panel panel-default">
			<div class="panel-heading">User Login</div>
  				<div class="panel-body">
	            	<div class="row">
		                <div class="col-md-12">
		                  	<form method="POST" action="/auth/register">
			                  	{!! csrf_field() !!}
			                  	<div class="form-group">
			                  		<label for="name">Name</label>
			                  		<input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
			                  	</div>
			                  	<div class="form-group">
			                  		<label for="email">Email</label>
			                  		<input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
			                  	</div>
			                  	<div class="form-group">
			                  		<label for="password">Password</label>
			                  		<input type="password" class="form-control" name="password" id="password">
			                  	</div>
			                  	<div class="form-group">
			                  		<label for="password">Confirm Password</label>
			                  		<input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
			                  	</div>

							    <div class="form-group">
							       <button type="submit" class="btn btn-default">Register</button>
							    </div>
							</form>
		                </div>
	            	</div>  				  
  				</div>
		</div>
    </div>
@stop


