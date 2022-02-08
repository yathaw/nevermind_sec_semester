<?php 
	// For Loop => စမှတ် ဆုံးမှတ် ရှိခဲ့ရင် 
	// While Loop
	// Do...while Loop
	// Foreach => စမှတ် နဲ့ ဆုံးမှတ် မသိခဲ့ရင် 

	echo "<h1> For Loop </h1>";
	//for (start; end; increase)
	for ($i=1; $i <= 10; $i++) { 
		echo "Student - $i <br>";
	}

	echo "<h1> While Loop </h1>";
	$a = 1; // start
	while ($a <=4 ) {
		echo "Student A - $a <br>";
		$a++;
	}

	echo "<h1> Do...while Loop </h1>";
	$b = 4;
	do{
		echo "Student B - $b <br>";
		$b++;
	}while($b <=10);

	echo "<h1> Foreach Loop </h1>";

	$fruits = ["apple", "orange", "grape"];
	
	echo $fruits[0];
	
	echo "<hr>";
	foreach ($fruits as $fruit) {
		echo $fruit."<br>";
	}

	
	













?>