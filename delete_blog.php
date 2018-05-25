<!DOCTYPE html>
<html>
<head>
    <title>ABC Pvt. Ltd.</title>
<link rel="stylesheet" type="text/css" href="signin.css">
</head>
<body>
<span>
        
    </span>

<body>
  <div id="header">
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost/users.php">Users</a>
  <a href="http://localhost/add_member.html">Add member</a>
  <a href="#">Review contents</a>
  <a href="http://localhost/add_content1.php">Publish blog </a>
  <a href='http://localhost/Home.php'>Log out</a>;

</div>



<span style="font-size:30px;cursor:pointer; color:white" onclick="openNav()">&#9776;</span>
<span><img src="user.png" title="User">
  <?php 
  session_start();
 $username = $_GET['username'];
 if($username != NULL)
  echo "<span><p>".$username."</p></span>";
?>
</div>
 <div id="content">
 <?php
 

 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";
$link = mysqli_connect($servername,$username,$password,$dbname);
 
 $id = $_GET['id'];
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
$username = $_GET['username'];
$sql = "DELETE FROM BLOG WHERE id='$id'";
if(mysqli_query($link, $sql)){
  
     header('Location:http://localhost/review_blog.php?username='.urlencode($username));
} 
else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
}
        ?>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     
</body>
</html> 