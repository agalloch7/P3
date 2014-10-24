@extends('_master')

@section('title')
	Yixuan Li - Elvish Ipsum Generator
@stop

@section('bodyid')
	"Elvish Ipsum Generator"
@stop

@section('header')
	Elvish Ipsum Generator
@stop

@section('subhead')
	Artisanal filler text for your site or project.
@stop

@section('body')
          <div id="homebuttons" class="row">
              <br />

          {{ Form::open(array(
            'url' => '/elvish-ipsum'
          )) }}

            {{ Form::label('paragraphs', 'How many paragraphs?') }}
              {{ Form::text('paragraphs', $paragraphs, array(
                'maxlength' => 1
              )) }} (max = 9)

              <br /><br />

            {{ Form::submit('Elf me!', 
              array('class' => 'btn btn-info'
            )) }}

          </div>
@stop