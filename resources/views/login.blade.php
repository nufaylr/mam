@extends('layouts.master')

@section('content')
    <div class="col-md-12">
    	<div class="panel panel-default">
			<div class="panel-heading">User Login</div>
  				<div class="panel-body">
	            	<div class="row">
		                <div class="col-md-12">
		                  <form>
		                    <div class="form-group">
		                      <label for="exampleInputEmail1">Email address</label>
		                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		                    </div>
		                    <div class="form-group">
		                      <label for="login_password">Password</label>
		                      <input type="password" class="form-control" id="login_password" placeholder="Password">
		                    </div>
		                    <button type="submit" class="btn btn-default">Submit</button>
		                  </form>
		                </div>
		                <div class="col-md-12">
		                  <p><a href="#">Create account-></a></p>
		                </div>
	            	</div>  				  
  				</div>
		</div>
    </div>
@stop