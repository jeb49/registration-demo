<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

ini_set('display_errors', 1);
include("account.php");
include("functions.php");

//Connecting to the database

$db = mysqli_connect($hostname, $username, $password, $project);
mysqli_select_db($db, $project);

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}

//This line is to get how many people are being registered

$choice = getdata("opt");



if ($choice == "one") {
	$check = true;

	$person1 = array(getdata("email1"), getdata("flname1"), getdata("address1"), getdata("city1"), getdata("state1"), getdata("zip1"), getdata("age1"), getdata("tchoice1"));

	$p1Len = count($person1);
	$lg1 = getcheck("legal1");

	//do check to see if all the fields have been entered

	if (!$lg1) {
		$check = false;
	}

	for ($i = 0; $i < $p1Len; $i++) {
		if ($person1[$i] == "") {
			$check = false;
			break;
		}
	}

	if ($check) {
		insert($person1[0], $person1[1], $person1[2], $person1[3], $person1[4], $person1[5], $person1[6], $person1[7], $output);
		echo "";
		header('Refresh: 1; URL=p1.html');
	} else {
		//if the user has not entered all ofo their info, they will be redirected back to the registration page
		echo "Please fill out all of the information. Redirecting you to the Registration Page ";
		header('Refresh: 3; URL=demo.html');
	}
} else if ($choice == "two") {

	//check to see if all of the fields have been entered

	$check = true;

	$person1 = array(getdata("email1"), getdata("flname1"), getdata("address1"), getdata("city1"), getdata("state1"), getdata("zip1"), getdata("age1"), getdata("tchoice1"));
	$p1Len = count($person1);

	$person2 = array(getdata("email2"), getdata("flname2"), getdata("address2"), getdata("city2"), getdata("state2"), getdata("zip2"), getdata("age2"), getdata("tchoice2"));
	$p2Len = count($person2);
	$lg2 = getcheck("legal2");

	if (!$lg2) {
		$check = false;
	}

	for ($i = 0; $i < $p1Len; $i++) {
		if ($person1[$i] == "") {

			$check = false;
			break;
		}
	}

	for ($i = 0; $i < $p2Len; $i++) {
		if ($person2[$i] == "") {
			$check = false;
			break;
		}
	}


	if ($check) {
		insert($person1[0], $person1[1], $person1[2], $person1[3], $person1[4], $person1[5], $person1[6], $person1[7], $output);
		insert($person2[0], $person2[1], $person2[2], $person2[3], $person2[4], $person2[5], $person2[6], $person2[7], $output);
		echo "";
		header('Refresh: 1; URL=p2.html');
	} else {
		//redirect to registration page if info is missing
		echo "Please fill out all of the information. Redirecting you to the Registration Page ";
		header('Refresh: 3; URL=page5.html');
	}
} else if ($choice == "three") {
	$check = true;
	//do check
	$person1 = array(getdata("email1"), getdata("flname1"), getdata("address1"), getdata("city1"), getdata("state1"), getdata("zip1"), getdata("age1"), getdata("tchoice1"));
	$p1Len = count($person1);

	$person2 = array(getdata("email2"), getdata("flname2"), getdata("address2"), getdata("city2"), getdata("state2"), getdata("zip2"), getdata("age2"), getdata("tchoice2"));
	$p2Len = count($person2);

	$person3 = array(getdata("email3"), getdata("flname3"), getdata("address3"), getdata("city3"), getdata("state3"), getdata("zip3"), getdata("age3"), getdata("tchoice3"));
	$p3Len = count($person3);

	$lg3 = getcheck("legal3");

	if (!$lg3) {
		$check = false;
	}
	for ($i = 0; $i < $p1Len; $i++) {
		if ($person1[$i] == "") {
			$check = false;
			break;
		}
	}

	for ($i = 0; $i < $p2Len; $i++) {
		if ($person2[$i] == "") {
			$check = false;
			break;
		}
	}

	for ($i = 0; $i < $p3Len; $i++) {
		if ($person3[$i] == "") {
			$check = false;
			break;
		}
	}

	if ($check) {
		insert($person1[0], $person1[1], $person1[2], $person1[3], $person1[4], $person1[5], $person1[6], $person1[7], $output);
		insert($person2[0], $person2[1], $person2[2], $person2[3], $person2[4], $person2[5], $person2[6], $person2[7], $output);
		insert($person3[0], $person3[1], $person3[2], $person3[3], $person3[4], $person3[5], $person3[6], $person3[7], $output);
		echo "Redirecting you to the payment page.";
		header('Refresh: 1; URL=p3.html');
	} else {
		//redirect to registration page if not all of the information has been entered
		echo "Please fill out all of the information. Redirecting you to the Registration Page ";
		header('Refresh: 3; URL=page5.html');
	}
} else if ($choice == "four") {
	//do check to see of all of the information has been entered
	$check = true;

	$person1 = array(getdata("email1"), getdata("flname1"), getdata("address1"), getdata("city1"), getdata("state1"), getdata("zip1"), getdata("age1"), getdata("tchoice1"));
	$p1Len = count($person1);

	$person2 = array(getdata("email2"), getdata("flname2"), getdata("address2"), getdata("city2"), getdata("state2"), getdata("zip2"), getdata("age2"), getdata("tchoice2"));
	$p2Len = count($person2);

	$person3 = array(getdata("email3"), getdata("flname3"), getdata("address3"), getdata("city3"), getdata("state3"), getdata("zip3"), getdata("age3"), getdata("tchoice3"));
	$p3Len = count($person3);

	$person4 = array(getdata("email4"), getdata("flname4"), getdata("address4"), getdata("city4"), getdata("state4"), getdata("zip4"), getdata("age4"), getdata("tchoice4"));
	$p4Len = count($person4);

	$lg4 = getcheck("legal4");

	if (!$lg4) {
		$check = false;
	}
	for ($i = 0; $i < $p1Len; $i++) {
		if ($person1[$i]  == "") {
			$check = false;
			break;
		}
	}
	for ($i = 0; $i < $p2Len; $i++) {
		if ($person2[$i] == "") {
			$check = false;
			break;
		}
	}

	for ($i = 0; $i < $p3Len; $i++) {
		if ($person3[$i] == "") {
			$check = false;
			break;
		}
	}
	for ($i = 0; $i < $p4Len; $i++) {
		if ($person4[$i] == "") {
			$check = false;
			break;
		}
	}

	if ($check) {
		insert($person1[0], $person1[1], $person1[2], $person1[3], $person1[4], $person1[5], $person1[6], $person1[7], $output);
		insert($person2[0], $person2[1], $person2[2], $person2[3], $person2[4], $person2[5], $person2[6], $person2[7], $output);
		insert($person3[0], $person3[1], $person3[2], $person3[3], $person3[4], $person3[5], $person3[6], $person3[7], $output);
		insert($person4[0], $person4[1], $person4[2], $person4[3], $person4[4], $person4[5], $person4[6], $person4[7], $output);
		echo "";
		header('Refresh: 1; URL=p4.html');
	} else {
		//redirect to registration page if not all of the information has been entered
		echo "Please fill out all of the information. Redirecting you to the Registration Page ";
		header('Refresh: 5; URL=page5.html');
	}
} else if ($choice == "five") {
	//do check

	$check = true;

	$person1 = array(getdata("email1"), getdata("flname1"), getdata("address1"), getdata("city1"), getdata("state1"), getdata("zip1"), getdata("age1"), getdata("tchoice1"));
	$p1Len = count($person1);

	$person2 = array(getdata("email2"), getdata("flname2"), getdata("address2"), getdata("city2"), getdata("state2"), getdata("zip2"), getdata("age2"), getdata("tchoice2"));
	$p2Len = count($person2);

	$person3 = array(getdata("email3"), getdata("flname3"), getdata("address3"), getdata("city3"), getdata("state3"), getdata("zip3"), getdata("age3"), getdata("tchoice3"));
	$p3Len = count($person3);

	$person4 = array(getdata("email4"), getdata("flname4"), getdata("address4"), getdata("city4"), getdata("state4"), getdata("zip4"), getdata("age4"), getdata("tchoice4"));
	$p4Len = count($person4);

	$person5 = array(getdata("email5"), getdata("flname5"), getdata("address5"), getdata("city5"), getdata("state5"), getdata("zip5"), getdata("age5"), getdata("tchoice5"));
	$p5Len = count($person5);

	$lg5 = getcheck("legal5");

	if (!$lg5) {
		$check = false;
	}

	for ($i = 0; $i < $p1Len; $i++) {
		if ($person1[$i] == "") {
			$check = false;
			break;
		}
	}

	for ($i = 0; $i < $p2Len; $i++) {
		if ($person2[$i] == "") {
			$check = false;
			break;
		}
	}

	for ($i = 0; $i < $p3Len; $i++) {
		if ($person3[$i] == "") {
			$check = false;
			break;
		}
	}
	for ($i = 0; $i < $p4Len; $i++) {
		if ($person4[$i] == "") {
			$check = false;
			break;
		}
	}

	for ($i = 0; $i < $p1Len; $i++) {
		if ($person1[$i] == "") {
			$check = false;
			break;
		}
	}
	if ($check) {
		insert($person1[0], $person1[1], $person1[2], $person1[3], $person1[4], $person1[5], $person1[6], $person1[7], $output);
		insert($person2[0], $person2[1], $person2[2], $person2[3], $person2[4], $person2[5], $person2[6], $person2[7], $output);
		insert($person3[0], $person3[1], $person3[2], $person3[3], $person3[4], $person3[5], $person3[6], $person3[7], $output);
		insert($person4[0], $person4[1], $person4[2], $person4[3], $person4[4], $person4[5], $person4[6], $person4[7], $output);
		insert($person5[0], $person5[1], $person5[2], $person5[3], $person5[4], $person5[5], $person5[6], $person5[7], $output);
		echo "";
		header('Refresh: 1; URL=p5.html');
	} else {
		//redirect to registration page if not all of the information has been entered
		echo "Please fill out all of the information. Redirecting you to the Registration Page ";
		header('Refresh: 5; URL=page5.html');
	}
}
