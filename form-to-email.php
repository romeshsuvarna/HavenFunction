<?php
 $prog		= $_POST['input_interest'];
 $pref_date = $_POST['pref_date'];
 $no_adult	= $_POST['input_adult'];
 
 $first_name= $_POST['input_fname'];
 $last_name	= $_POST['input_lname'];
 $email		= $_POST['input_email'];
 $contact_no= $_POST['input_contact'];
 $comment	= $_POST['input_comment'];


$email_from = $email;
$email_subject = "Haven Reservation Enquiry from  $first_name  $last_name for preffered date - $pref_date " ;
$email_body = "You have received a new message from the $first_name $last_name.\n\n\n".
				"Area of Interest : $prog \n\n".
				"Event Details\n".
				"        First Name: $first_name \n".
				"        Preffered Date: $pref_date \n".
				"        Number of Guests: $no_adult  \n\n\n".
				"Customer Details \n".
				"        Full Name:  $first_name $last_name \n".
				"        Email Id:  $email \n".
				"        Contact Number:  $contact_no \n".
				"        Additional Comment:\n".
				"        $comment \n\n\n\n".

				"Email sent to    ".

	/*$email_message = "Preffered Date: $pref_date \n";
	$email_message = "First Name: $first_name \n"; */

$to = "reachvijay25@hotmail.com";
$headers = "From: $email_from \r\n";
 
 // $headers .= "Reply-To: $visitor_email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);




?>

