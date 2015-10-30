@extends('layouts.master')

@section('content')
    <div class="col-md-12">
    	<div class="panel panel-default">
			<div class="panel-heading">820 App store</div>
  				<div class="panel-body">
	            	<div class="container">		                
		                @foreach ($apps as $app)
		                	<div class="col-xs-6 col-sm-3 pa">
	    						<a href='/store/apps/{{$app->id}}'>
	                      			<img class='img-rounded blank' src='mdm/{{$app->app_slug}}/{{$app->icon}}'>
	                      			<h5>{{$app->app_name}}</h5>
	                    		</a>
                    		</div>
						@endforeach	                
	            	</div>  				  
  				</div>
  			<a class="btn btn-default" href="auth/logout" role="button">logout</a>
		</div>
    </div>
@stop