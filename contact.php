<?php
		$name=$_POST['name']; 
    $email=$_POST['email']; 
    $message=$_POST['msg']; 
    echo $name;
    echo $email;
    echo $message;
    /*$from="From: $name<$email>\r\nReturn-path: $email"; 
    $subject="Message sent using your contact form"; 
    if(mail("rabib.sust@gmail.com", $subject, $message, $from)){
			echo"Mail sent!"; 
			//header("Location: http://rabibstudios.com");	
		}
	  else
	  echo"Mail not sent!"; */
?>