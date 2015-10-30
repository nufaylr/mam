@extends('layouts.master')

@section('content')
    <div class="col-md-12">
    	<div class="panel panel-default">
			<div class="panel-heading">User Login</div>
  				<div class="panel-body">
	            	<div class="row">
		                <div class="col-md-12">
		                  	<form method="POST" action="/auth/login">
			                  	{!! csrf_field() !!}
			                  	<div class="form-group">
			                  		<label for="email">Email</label>
			                  		<input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
			                  	</div>
			                  	<div class="form-group">
			                  		<label for="password">Password</label>
			                  		<input type="password" class="form-control" name="password" id="password">
			                  	</div>

  								<div class="checkbox">
  									<label>
  										<input type="checkbox" name="remember"> Check me out
  									</label>
  								</div>

							    <div class="form-group">
							       <button type="submit" class="btn btn-default">Login</button>
							    </div>
							</form>
		                </div>
		                <div class="col-md-12">
		                  <p><a href="register">Create account</a></p>
		                </div>
	            	</div>  				  
  				</div>
		</div>
    </div>
@stop


