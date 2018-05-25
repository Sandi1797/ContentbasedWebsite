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
 <?php
 session_start();
 $username = $_GET['username'];
 $username1 = $_GET['username1'];
 $id = $_GET['id'];

  echo "<div id='header'>";
  echo "<div id='mySidenav' class='sidenav'>";
  echo "<a href='javascript:void(0)'' class='closebtn' onclick='closeNav()'>&times;</a>";
  echo "<a href='http://localhost/users.php?username=$username'>Users</a>";
  echo "<a href='http://localhost/add_member.html?username=$username'>Add member</a>";
  echo "<a href='http://localhost/review_blog.php?username=$username'>Review contents</a>";
  echo "<a href='http://localhost/add_content1.php?username=$username'>Publish blog </a>";
  echo "<a href='http://localhost/Home.php'>Log out</a>";
  ?>

</div>



<span style="font-size:30px;cursor:pointer; color:white" onclick="openNav()">&#9776;</span>
<span><img src="user.png" title="User">
  
</div>
 <div id="content">
 <?php
 

 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";
$link = mysqli_connect($servername,$username,$password,$dbname);
 $username = $_GET['username'];
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 

 
  
$content = mysqli_real_escape_string($link, $_POST['content']);

$sql1 = "UPDATE BLOG SET content = '$content' WHERE id='$id'";
if(mysqli_query($link, $sql1)){
        
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