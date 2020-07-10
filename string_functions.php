<?php 
	$first= "My name is Darshana.";
	$second = "I'm 23 years old";
	$full= $first;
	$full .= $second;
	echo "$full";
 ?>
 <br>
 <br>
 All simple: <?php echo strtolower($full); ?><br>
 All capital: <?php echo strtoupper($full); ?><br>
 First letter capital: <?php echo ucfirst($full); ?><br>
 First letter capital in all words: <?php echo ucwords($full); ?><br>
 Number of characters: <?php echo strlen($full); ?><br>
 Find a word: <?php echo strstr($full, "Darshana"); ?><br>
 Replace a string or a character: <?php echo str_replace("Darshana", "Ravindu", $full); ?>