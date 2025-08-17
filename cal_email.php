<?php
 

// Mail to copmany
$receiving_email_address = 'soltechno@outlook.com';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$to = 'soltechno@outlook.com';
$subject = 'Customer Enquiry';
//$message= $_POST['message'];
$firstName= $_POST['name']; 
$company_name=$_POST['company_name']; 
if($company_name==''){
	$company_name='Not Available';
}
$from = $_POST['email'];
$contact_number = $_POST['phone'];
$address = $_POST['address'];
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
		<title>' . $subject . '</title>
		</head>
				
		<body>
		<font style="font-size:24px;font-style: italic;">Dear Solar Technologies, 
		<br><br>
		You have a new Customer Enquiry from ' . $firstName . ' .<br><br>
		
		Contact Details :<br>
		Customer Name : ' . $firstName. '<br>
        Company Name : ' . $company_name. '<br>
		Customer Address : ' . $address. '<br>
		Contact Number : ' . $contact_number. '<br>
		Email Id : ' . $from. '<br><br>
		</font>
		<font style="font-size:18px;font-weight: bold;">
		Thanks & Regards<br></font><br>
		<img src="http://web2droid.com/SolarTech/images/logo.png" alt="Company Logo" style="width:50%;" /><br>
		
        
		</body>
		</html>
		';

// More headers
$headers .= 'From: <'.$from.'>' . "\r\n";
$headers .= '' . "\r\n";

$send_status=mail($to,$subject,$body,$headers);
/* if($send_status)
{
    //echo "Thank You, Our Team Contact u Soon";
    echo "OK";
}else
{
    echo "Something Is Wrong";
}
 */
//Mail reply to Customer


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
		<font style="font-size:24px;font-style: italic;">Hello ' . $firstName . ' ' . $lastName. ',
		<br><br>
		Thank you so much for reaching out! Just confirming that we&#39;ve received your request for more information, 
        and our executive will get in touch with you soon with a more complete response.<br>
        If you need immediate assistance, feel free to call us at 98222 56745.<br><br>
		<font style="font-size:18px;font-weight: bold;">
		Thanks & Regards<br></font><br>
		<img src="http://web2droid.com/SolarTech/images/logo.png" alt="Company Logo" style="width:50%;" /><br><font style="font-size:20px;font-weight: bold;">
		
		</body>
		</html>
		';

// More headers
$headers .= 'From: <'.$receiving_email_address.'>' . "\r\n";
$headers .= '' . "\r\n";

$send_status_reply=mail($from,$subject_reply,$body_reply,$headers);
if($send_status_reply && $send_status)
{
	//echo "Thank You, Our Team Contact u Soon";
	//echo "OK";
	header('Location: http://web2droid.com/SolarTech/');
}else
{
	echo "Something Went Wrong";
}


?>
