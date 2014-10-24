@extends('_master')

@section('title')
	Yixuan li - DWA15 P3 Home
@stop

@section('bodyid')
	"home"
@stop

@section('header')
	Developer's Best Friend
@stop

@section('subhead')
	An Elvish Ipsum Generator and Random User Generator. by Yixuan Li.
@stop

@section('body')
	<div id="homebuttons" class="row">
  		<div class="col-md-6">
  			<a href="/elvish-ipsum" class="btn btn-info btn-lg" role="button">
  			<span class="glyphicon glyphicon-list-alt"></span>&nbsp; Generate some elvish ipsum</a>
  		</div>
  		<div class="col-md-6">
  			<a href="/fakers" class="btn btn-info btn-lg" role="button">
  			<span class="glyphicon glyphicon-user"></span>&nbsp; Create some random users</a>
  		</div>
	</div>
@stop