@extends('fakers')

@section('content')

<div class="container">
	<div class="panel panel-info top-buffer">
	  <div class="panel-heading">
	    <h3 class="panel-title">Here's your random users</h3>
	  </div>
	  <div align="left" class="panel-body">
		<?php
		$faker = Faker\Factory::create();
			for ($i = 0; $i < $users; $i++)
			{
			    echo $faker->name;
		        echo $faker->email;
		        echo $faker->address;

			}
		?>
	  </div>
	</div>
</div>

@stop