
<?php


      $Name=$_POST["Name"];
	  $email=$_POST["email"];
	  $telephone=$_POST["mobile_number"];
	  $Subject=$_POST["Subject"];
	  $Message=$_POST["Message"];
	  $roof_area=$_POST["roof_top_area"];
	  $Monthly_bill=$_POST["electricity_bill"];
	   $address=$_POST["address"];
		
	  //$receiving_email_address = 'soltechno@outlook.com';
	  
	  $headers = "MIME-Version: 1.0" . "\r\n";
	  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	  $to = 'soltechno@outlook.com';
	  $subject = 'Customer Enquiry';
	 
	  $body = '
		<html>
		<head>
		<style type="text/css">
		body {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 24px;
        font-style: italic;
		}
	  		
		.bold {
		font-weight: bold;
		}
		</style>
		<title>' . $Subject. '</title>
		</head>
				
		<body>
		<font style="font-size:24px;font-style: italic;">Dear Solar Technologies,
		<br><br>
		You have a new Customer Enquiry from ' . $Name. ' .<br><br>
				
		Contact Details :<br>
		Customer Name : ' . $Name. '<br>
        Customer Address : ' . $address. '<br>
		Rooftop Area : ' . $roof_area. 'Sq.Ft<br>
	    Monthly Electricity Bill : Rs' . $Monthly_bill. '<br>
		Contact Number : ' . $telephone. '<br>
		Email Id : ' . $email. '<br><br>
		Customer Message : '.$Message.'<br><br>
		</font>
		<font style="font-size:18px;font-weight: bold;">
		Thanks & Regards<br></font><br>
		<img src="https://solartechnologies.in/images/logo.png" alt="Company Logo" style="width:50%;" /><br>
				
				
		</body>
		</html>
		';
	  
	  // More headers
	  $headers .= 'From: <'.$email.'>' . "\r\n";
	  $headers .= '' . "\r\n";
	  
	  $send_status=mail($to,$Subject,$body,$headers);
	  
	  
	  
	  $receiving_email_address = 'soltechno@outlook.com';
	  
	  $headers = "MIME-Version: 1.0" . "\r\n";
	  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	  $subject_reply='Solar Technologies. Business Inquiry';
	  $body_reply = '
		<html>
		<head> 
		<style type="text/css"> 
		body {
		font-family: Arial, Helvetica, sans-serif; 
		font-size: 24px;
        font-style: italic;
		} 
	  		
		.bold { 
		font-weight: bold;
		}
		</style>
		<title>' . $subject_reply. '</title>
		</head>
				
		<body>
		<font style="font-size:24px;font-style: italic;">Hello ' . $Name. ',
		<br><br>
		Thank you so much for reaching out! Just confirming that we&#39;ve received your request for more information,
        and our executive will get in touch with you soon with a more complete response.<br>
        If you need immediate assistance, feel free to call us at 7620 7620 36.<br><br>
		<font style="font-size:18px;font-weight: bold;">
		Thanks & Regards<br></font><br>
		<img src="https://solartechnologies.in/images/logo.png" alt="Company Logo" style="width:50%;" /><br><font style="font-size:20px;font-weight: bold;">
				
		</body>
		</html>
		';
	  
	  // More headers
	  $headers .= 'From: <'.$receiving_email_address.'>' . "\r\n";
	  $headers .= '' . "\r\n";
	  
	  $send_status_reply=mail($email,$subject_reply,$body_reply,$headers);
	  if($send_status_reply && $send_status)
	  {
	  	//echo "Thank You, Our Team Contact u Soon";
	  	//echo "OK";
	  	header('Location: https://www.solartechnologies.in/contact.html');
	  }else
	  {
	  	echo "Something Went Wrong";
	  }
	  

?>
