<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Working Text and Number </title>
</head>
<body>

	<?php 
		$name = "Mg Mg";
		$address = "Yangon";

		// output => Mg Mg lives in Yangon.
		echo "<i> $name </i> lives in Yangon.";
		echo "<br>";

		echo '<i> $name </i> lives in $address.';
		echo "<br>";

		echo '<i>'.$name.'</i> lives in '.$address.'.';
		echo "<br>";

		echo $name.' lives in '.$address;
		echo "<br>";

		// trim => remove space the beginning and ending of a string
		// trim(string);

		$trim_name = " Aye Aye ";
		var_dump($trim_name);
		echo "<br>";
		var_dump(trim($trim_name));

		echo"<br>";
		echo $trim_name;
		echo"<br>";


		// strcasecmp => compare two strings
		// strcasecmp(string1, string2);
		// RETURN
		// 0 => if the two strings are equal
		// <0 => if string1 is less than string2
		// >0 => if string1 is greater than string2

		echo strcasecmp('Hello World!',"HELLO WORLD!")."<br>";

		echo strcasecmp("Hello World","Hello")."<br>";

		echo strcasecmp("Hello world!","HELLO WORLD! HELLO!")."<br>"; 

		// strtolower
		echo strtolower('Beef, CHICKEN, Pork, duCK')."<br>";

		// strtoupper
		echo strtoupper('Beef, CHICKEN, Pork, duCK')."<br>";

		// substr(string, start, end)
		echo substr('Hello World',6)."<br>";

		$letterA = 'Technogym is a leading company in the field of commercial and home gym equipment. Known all over the world as "The Wellness Company", its goal is to help develop the philosophy of fitness and wellbeing and turn it into a true lifestyle. To do so, Technogym provides people with gym equipment of the highest quality, together with other services like content and programs.

			Technogym’s outstanding products are equally chosen by people for their home gym equipment and by organizations or sports and medical centers due to their unmatched quality and reliability. This is partly a direct result of the decades of experience gained as the official supplier to eight Olympic and Paralympic Games, concrete evidence that anyone choosing Technogym is choosing to train on equipment able to meet professional athletes’ needs, but is still designed for all types of users, from beginners to professionals.

			In this article, you will find an overview of the main differences between home gym equipment and commercial equipment provided by Technogym, one of the few suppliers able to truly satisfy any need of fitness enthusiasts looking for the best products.';

		echo substr($letterA, 0,50)."... See More <br>";

		// str_replace(find, replace, string);

		// Hello Wolrd => Hello Summer
		echo str_replace("World", "Summer" ,"Hello World");
		echo "<br>";

		$num1 = 45;
		$num2 = 12;

		$sum =  $num1 + $num2;
		$sub = $num1 - $num2;
		$mul = $num1 * $num2;
		$div = $num1 / $num2;

		echo "SUM => $sum <br>";
		echo "SUB => $sub <br>";
		echo "MUL => $mul <br>";
		echo "DIV => $div <br>";


		echo "<h1> If Statement </h1>";

		$x = 3;
		if($x < 10){
			echo "x is less than 10.";
		}


		echo "<h1> IF...else Statement </h1>";

		$y = 12;
		if ($y < 10) {
			echo "y is less than 10.";
		}else{
			echo "y is greater than 10.";
		}


		echo "<h1> If... elseif ... else </h1>";

		$z = 30;
		if($z < 10){
			echo "z is less than 10.";
		}
		elseif($z > 50){
			echo "z is greater than 50.";
		}
		elseif($z == 0){
			echo "z is equal 0.";
		}else{
			echo "z is 30.";
		}

		echo "<h1> Switch Statement </h1>";
		switch ($z) {
			case "$z < 10":
			echo "z is less than 10.";
			break;

			case "$z > 50":
			echo "z is greater than 50.";
			break;

			case "$z == 0":
			echo "z is equal 0.";
			break;
			
			default:
			echo "z is 30.";
			break;
		}

		
























	?>
	


</body>
</html>