@extends('_master')

@section('title')
	Yixuan Li - Random User Generators
@stop

@section('header')
	Random User Generator
@stop

@section('subhead')
	Generate a random fake name, address, email, phone number, and even credit card information for use with online message boards, social media, or whatever else.
	The idea is that, to improve online privacy, you should change your username and email address frequently so sites don't build a history of your activities. Of course, this is only a small part of the things that you can do to improve online privacy.
@stop

@section('body')
	<div id="homebuttons" class="row">
              <br />

          {{ Form::open(array(
            'url' => '/fakers'
          )) }}

            {{ Form::label('users', 'How many users?') }}
              {{ Form::text('users', $users, array(
                'maxlength' => 3
              )) }} (max = 100)

              <br /><br />

            {{ Form::submit('Gimme me some users!', 
              array('class' => 'btn btn-info'
            )) }}

          </div>
@stop
