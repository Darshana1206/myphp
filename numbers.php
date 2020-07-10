<!DOCTYPE html>
<html>
<head>
	<title>number functions</title>
</head>
<body style="background-color: powderblue";>

	<?php
		$value1 = 20;
		$value2 = 50;

		$value3 = ((30+ $value1 +$value2)/$value1 - 3);
		echo "basic calculations = ". $value3; 
	 ?>
	 <h1>Some important functions</h1>
	 squre root: <?php echo sqrt(100); ?><br>
	 power     : <?php echo pow(2, 3); ?><br>
	 Absolute value: <?php echo abs(6-10); ?><br>
	 modulo : <?php echo fmod(17, 8); ?><br>
	 Random number: <?php echo rand(); ?><br>
	 Random number: <?php echo rand(1,100); ?><br>

	 <h2 style="color: blue">increment and decrement</h2>
	 Increment : <?php echo $value1 = $value1 + 10; ?><br>
	 Increment : <?php echo $value1 += 10; ?><br><br>
	 Decrement : <?php echo $value2 = $value2 - 10; ?><br>
	 Decrement : <?php echo $value2 -= 10; ?><br>
	 Multiplication: <?php echo $value2 *=2; ?>


</body>
</html>