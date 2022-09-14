<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject']
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'From: Website'; 
    $to = 'jodebh20@yahoo.com'; 
    $subject = 'Hello';
    
			
    $body = "From: $name\n E-Mail: $email\n Subject: $subject\n fname: $Fname\n Lname: $lname\n Phone: $phone\n Message:\n $message";
				
    if ($_POST['submit']) {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } 
?>