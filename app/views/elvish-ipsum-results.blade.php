@extends('elvish-ipsum')

@section('content')
<div class="container">
	<div class="panel panel-info top-buffer">
	  <div class="panel-heading">
	    <h3 class="panel-title">Here's your Elvish Ipsum texts</h3>
	  </div>
	  <div align="left" class="panel-body">
	    <p>
		<?php
			$generator = new Badcow\LoremIpsum\Generator();
			$text = $generator->getParagraphs($paragraphs);
			echo implode('</p><p>', $text);
		?>
		</p>
	  </div>
	</div>
</div>
@stop