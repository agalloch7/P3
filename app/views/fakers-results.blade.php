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
				echo $faker->name . '<br />';
				echo $faker->userName . '<br />';
			        echo $faker->email . '<br />';
			        echo $faker->address . '<br />';
			        echo $faker->phoneNumber . '<br />';
			        echo $faker->creditCardType . '<br />';
			        echo $faker->creditCardNumber . '<br />';
			        echo $faker->creditCardExpirationDateString . '<br />';
			        

			}
		?>
	  </div>
	</div>
</div>

@stop
