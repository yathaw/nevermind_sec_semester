<?php 
	// Form က data ကို database ထဲသိမ်းမှာ 
	require 'connection.php';

	$name = $_POST['categoryname'];
	$photo = $_FILES['photo'];

	$photoname = $photo['name'];

	$source_dir = 'image/';
			// image/New Project(3).jpg
	$filepath = $source_dir.$photoname;
	move_uploaded_file($photo['tmp_name'], $filepath);

	$sql = "INSERT INTO categories (logo, name) VALUES (:value1, :value2)";
	$statement = $pdo->prepare($sql);
	$statement->bindParam(":value1", $filepath);
	$statement->bindParam(":value2", $name);
	$statement->execute();


	header('location:category_list.php');

?>