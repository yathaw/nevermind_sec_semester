<?php 

	// Array => 3 
		// 1. Index or Numeric Array
		// 2. Associative Array
		// 3. Multidimensional Array

		echo "<h1> Index or Numeric Array </h1>";

		// $fruits = array("apple", "orange", "grape");
		$fruits = ["apple", "orange", "grape"];

		echo $fruits[1];

		echo "<h1> Associative Array </h1>";

		$results = array(
			"A" => 10,
			"B" => 20,
			"C" => 30
		);

		echo $results["B"];

		echo "<h1> Multidimensional Array </h1>";

		$meals = array(
			'breakfast' => ["Coffee", "Bread"],
			'lunch' => ["Fried Rice", "Dumpling"],
			'dinner' => ["Fried Chicken", "Cocacola"]
		);

		echo $meals['breakfast'][0];

		// array_key_exists(key, array) => return true false

		$array1 = array(
			"Walnut Bun" => 1,
			"Cashew Nuts and White Mushrooms" => 4.95,
			"Dried Mulberries" => 3.00,
			"Eggplant with Chili Sauce" => 6.50,
			"Shrimp Puffs" => 0
		);

		echo "<h1> Array Key Exists </h1>";

		if(array_key_exists('Shrimp', $array1)){
			echo "Yes,we have Shrimp Puffs.";
		}else{
			echo "No yet.";
		}

		if(array_key_exists('6.50', $array1)){
			echo "Yes,we have.";
		}else{
			echo "No yet.";
		}

		// in_array(string, array) => return true false
		echo "<h1> In array </h1>";

		if (in_array('Puffs',$array1)) {
			echo "Yes, we have.";
		}else{
			echo "Not yet.";
		}
		echo "<br>";

		// unset

		$array2 = array('a', 'b', 'c', 'd', 'e', 'f', 'g');

		unset($array2[2], $array2[1]);

		foreach($array2 as $array){
			echo $array."<br>";
		}

		// Array to String => implode(separator, array)
		$array3 = array('Chicken Bun','Stuffed Duck Web','Turnip Cake'); 

		echo implode(' => ',$array3);
		echo "<br>";



		// String to Array => explode(separator, string)
		$string1 = 'Bass-Carp-Pike-Flounder';

		$array4 = explode('-', $string1);

		foreach($array4 as $array){
			echo $array."<br>";
		}

		$genres = array('action', 'horror', 'romance', 'anime');

		echo implode(', ',$fruits);
		echo "<br>";

		$phone_field = '0987654321, 0987654321';
		$array5 = explode(', ',$phone_field);

		foreach($array5 as $key => $array){
			echo $key." => ".$array."<br>";
		}




























?>