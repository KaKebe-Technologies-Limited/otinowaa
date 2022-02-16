<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$district = "";
	$country = "";
    $subcountry = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$district = $_POST['district'];
		$country = $_POST['county'];
        $subcountry = $_POST['sub-county'];

		mysqli_query($db, "INSERT INTO info (district, country, subcountry) VALUES ('$district', '$country',$subcountry)"); 
		$_SESSION['message'] = "Information Saved"; 
		header('location: index.php');
	}

?>