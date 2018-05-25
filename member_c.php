<!DOCTYPE html>
<html>
<head>
    <title>ABC Pvt. Ltd.</title>
<link rel="stylesheet" type="text/css" href="signin.css">
</head>

<?php
 

 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";
$link = mysqli_connect($servername,$username,$password,$dbname);
 
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
$sql1 = "SELECT * FROM USER WHERE username='$username' and password='$password'";
if($result = mysqli_query($link, $sql1))
{
    if(mysqli_num_rows($result) > 0)
    {
    	while($row = mysqli_fetch_array($result))
    	{
    	if($row['hierarchy'] == '1')
    	{
    	 		header('Location:http://localhost/home_admin.php?username='.urldecode($username));
	 	}
    	elseif($row['hierarchy'] == '2') 
    	{
    		header('Location:http://localhost/home_publisher.php?username='.urldecode($username));
    	}
    	
    	elseif($row['hierarchy'] == '3') 
    	{
    		header('Location:http://localhost/home_viewer.php?username='.urldecode($username));
    	}}
    	
	}
	else
	{
    		header('Location:http://localhost/signin_c.html');
	}
}
    else
    {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
 </html>