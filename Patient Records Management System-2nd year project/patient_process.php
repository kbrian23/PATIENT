<?php

include_once 'dbconnect.php';

if(isset($_POST['btn-Create']))
{
	$patient_id = mysql_real_escape_string($_POST['patient_id']);
	$pname = mysql_real_escape_string($_POST['pname']);
	$regno = mysql_real_escape_string($_POST['regno']);
	$email = mysql_real_escape_string($_POST['email']);
	$test = mysql_real_escape_string($_POST['test']);
	$address = mysql_real_escape_string($_POST['address']);
	$date = mysql_real_escape_string($_POST['date']);
	$name = mysql_real_escape_string($_POST['name']);
	$city = mysql_real_escape_string($_POST['city']);
	$dob = mysql_real_escape_string($_POST['dob']);
	
	if(mysql_query("INSERT INTO patient_tb(patient_id,pname,regno,email,test,address,date,name,city,dob) VALUES('$patient_id','$pname','$regno','$email','$mname','$address','$date','$name','$city','$dob')"))
	{
		?> 
         <script>alert('successfully added to the database.');</script>
		<?php
    }
	else {
		?> 
         <script>alert('Sorry !!! Check Well your details information well .');</script>
		<?php 
		}
}	
?>
