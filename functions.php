<?php

/*
	getdata: a function to get what the user enters in the text boxes so that I
	am able to put it in the database. I also try to make sure that the data is
	safe to enter into the db using the mysqli_real_escape_string function. This
	also deals well with empty space, if the user just enters white space, the
	result is trimmed with an empty string being returned.
*/

function getdata ($name){
	global $db;
	$temp= $_GET [$name];
	$temp = mysqli_real_escape_string($db, $temp);
	$temp2 = trim ($temp);
	return $temp2;
}

/*
	insert: this function serves two purposes: to insert the parameters into the
	db and to notify my pastor once they have registered. for testing, it includes
	my email.
*/

function insert ($email, $name, $address, $city, $state, $zip, $age, $tchoice, &$output){
	//insert into db

	global $db;

	$t = "insert into REG values ('$email', '$name', '$address', '$city', '$state', '$zip', '$age', '$tchoice')";
	($u = mysqli_query($db,$t)) or die (mysqli_error($db));

	//email pastor

	$output .= "<Hey! there's a person that's registering!! br><br>";

	$output .= "Email: $email <br><br>";
	$output .= "Name: $name <br><br>";
	$output .= "Address: $address <br><br> ";
	$output .= "City: $city <br><br>";
	$output .= "State: $state <br><br>";
	$output .= "Zipcode: $zip <br><br>";
	$output .= "Age: $age <br><br>";
	$output .= "T Shirt Choice: $tchoice <br><br>";

	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=iso-8859-1';

	mail("jeb49@njit.edu", "hey! someone is registering!", $output, implode("\r\n", $headers));
}

/*
	getcheck: similar to getdata, this checks weither a check box is checked or not.
	because of the fact that if check boxes are not checked off, they don't have a
	value, this is the best option to deal with them.
*/

function getcheck ($name){
	global $db;
	$temp= isset($_GET [$name]);
	$temp = mysqli_real_escape_string($db, $temp);

	return $temp;
}
?>