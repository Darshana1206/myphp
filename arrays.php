<!DOCTYPE html>
<html>
<head>
	<title>	Arrays</title>
</head>
<body style="background-color: powderblue">
	<h1 align="center">Create arrays</h1>
	<?php 	
		$friends =  array(2,4,56,"Thusitha",array(23,45,78),"Shehan","Adithya")
	 ?>
	 <h2 style="color: blue">Before</h2>
	 <?php echo $friends[1]; ?>
	 <pre>	
	 	<?php 	print_r($friends); ?>
	 </pre>
	 <?php $friends[3] = "Suting"; ?><br>
	 <?php $friends[] = "Darshana";?>
	 <?php echo $friends[4][1]; ?>

	 	<h2 style="color: blue">After</h2>
	 <pre>
	 	<?php 	print_r($friends); ?>
	 </pre>

	 <h1 align="center">Association Arrays</h1>
	 <?php $student = array("First_name" =>"Darshana" ,"Second_name"=>"Bandara", "age"=>23 ); ?>
	 <pre><?php print_r($student); ?></pre><br>

	 <?php echo $student["First_name"];  ?><br>
	 <?php echo $student["First_name"]." ".$student["Second_name"]; ?>

	 <h1 align="center">Array functions</h1>

	 <?php $myArr = array(12,56,74,85,96,14); ?><br>
	 <pre><?php print_r($myArr) ?></pre>
	 Maximum: <?php echo max($myArr); ?><br>
	 Minimum: <?php echo min($myArr); ?><br>

	 Sort: <?php sort($myArr); ?><br>
	 <pre><?php print_r($myArr) ?></pre>
	 Reverse sort: <?php  rsort($myArr); ?><br>
	 <pre><?php print_r($myArr) ?></pre>

	 count: <?php echo count($myArr); ?>

	 implode: <?php $string=implode(" | ", $myArr); ?>
	 <pre><?php echo $string; ?></pre><br>

	 explode: <?php $newArr = explode(" | ", $string); ?>
	 <pre><?php print_r($newArr); ?></pre>

	 search: <?php echo in_array(56, $myArr); ?><br>
	 search: <?php echo in_array(57, $myArr); ?><br>



</body>
</html>