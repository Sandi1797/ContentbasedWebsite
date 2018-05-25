<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";
$link = mysqli_connect($servername,$username,$password,$dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$emailid = mysqli_real_escape_string($link, $_POST['emailid']);
$hierarchy = 2;

 
// attempt insert query execution
$sql = "INSERT INTO USER (name,username,password,emailid,hierarchy) VALUES ('$name','$username','$password','$emailid','$hierarchy')";
if(mysqli_query($link, $sql)){
	$_SESSION['username'] = $username;
    header('Location:http://localhost/home_publisher.php?username='.urlencode($username));
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>