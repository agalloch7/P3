@extends('fakers')

@section('content')

<div class="container">
	<div class="panel panel-info top-buffer">
	  <div class="panel-heading">
	    <h3 class="panel-title">Here's your random users</h3>
	  </div>
	  <div align="left" class="panel-body">
	  	<table class="table table-striped">
	  		<tr>
	  			<td><h3>Name</h3></td>
	  			<td><h3>Email</h3></td>
	  			<td><h3>Address</h3></td>
	  			<td><h3>Phone Number</h3></td>
	  			<td><h3>Credit Card Type</h3></td>
	  			<td><h3>Credit Card Number</h3></td>
	  			<td><h3>Credit Card Expiration Date</h3></td>
		<?php
		$faker = Faker\Factory::create();
			for ($i = 0; $i < $users; $i++)
			{ 
				?>
				<tr> 
				<td> <?php echo $faker->name; ?> </td>
			        <td> <?php echo $faker->email; ?> </td>
			        <td> <?php echo $faker->address; ?> </td>
			        <td> <?php echo $faker->phoneNumber; ?> </td>
			        <td> <?php echo $faker->creditCardType; ?> </td>
			        <td> <?php echo $faker->creditCardNumber; ?> </td>
			        <td> <?php echo $faker->creditCardExpirationDateString; ?> </td>
			    </tr>
		<?php
			}
		?>
	</table>
	  </div>
	</div>
</div>

@stop
