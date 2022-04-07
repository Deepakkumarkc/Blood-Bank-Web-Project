<?php 

$con=new mysqli("mysql.selfmade.ninja","BloodBank","BloodBank","BloodBank_blood_bank");
//Default connection: $con=new mysqli("localhost","root","","blood_bank");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>