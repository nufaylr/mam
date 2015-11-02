@extends('layouts.master')

@section('content')
    <div class="col-md-12">
    	<div class="panel panel-default">
			<div class="panel-heading">820 App store</div>
  				<div class="panel-body">
	            	<div class="container">		                
		                <div class="row">
			                <div class="col-xs-11 col-sm-11 col-lg-11">
			                  <ul class="media-list">
			                    <li class="media">
			                      <div class="pull-left">
			                      	<div class="row">
			                      		<div class="col-md-12">
			                      			<img class="img-rounded blank" src=" /mdm/{{{ $appsDetails['app_slug'] }}}/{{{ $appsDetails['app_slug'] }}}.png">
			                      		</div>
			                      		<div class="col-md-12">
			                      			<br/>
			                      			<a href="/{{{ $linkPath }}}" class="btn btn-success">Install</a>
			                      		</div>
			                      	</div>
			                      </div>
			                      
			                      <div class="media-body">
			                        <h3 id="title" style="text-align:left;">{{{ $appsDetails['app_name'] }}}</h3>                     
			                        <div id="downloadGroup" class="btn-group" style="text-align:left;"></div>
			                        <p></p>
			                        <p id="desc" style='min-height:150px; color:#999999;'>{{{ $appsDetails['full_description'] }}}</p> 
			                      </div>
			                    </li>
			                  </ul>
			                </div>
              			</div>                
	            	</div>  				  
  				</div>
  			<a class="btn btn-default" href="/auth/logout" role="button">logout</a>
		</div>
    </div>
@stop