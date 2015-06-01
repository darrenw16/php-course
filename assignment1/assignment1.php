<!DOCTYPE html>
<html>
<head>
	<title>Assingment 1</title>
	<link rel="stylesheet" type="text/css" href="css/king_1.css">
</head>
<body>
	<img src="images/Kinglogo.jpg" alt="King Real Estate">

	<h4>Thank You! A repersentitve will be contact you shortly</h4>

	<?php
	//Gather data from form

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];

	$contactchoice = $_POST['contact'];
	$phoneoremail = $_POST['phoneoremail'];

	$city = $_POST['city'];
	$comments = $_POST['comments']

	//display new page 

	$fullname = $firstname.' '.$lastname;

	print "<p>Information Submitted for: $fullname </p>\n";

	print "<p>Your $contactchoice is $phoneoremail <br />\n";
	print "and your interested in living in $city </p>\n";

	print "<p>Our repersentitve will review your comments below:</p>\n";

	print "<textarea cols='60' rows='5' disabled='disabled' ";
	print "class='textdisabled'".$comments"</textarea>\n";

	?>

</p>
</body>
</html>