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
 if($username != NULL)
  echo "<span><p>".$username."</p></span>";

  echo "<div id='header'>";
  echo "<div id='mySidenav' class='sidenav'>";
  echo "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>";
  echo "<a href='http://localhost/add_content1.php?username=$username'>Publish a blog</a>";
  echo "<a href='http://localhost/myblogs.php?username=$username'>My blogs</a>";
  echo "<a href='http://localhost/review_my_blogs.html?username=$username'>Review my blogs</a>";
  echo "<a href='http://localhost/Home.php'>Log out</a>";
  echo "</div>";
  ?>
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
 
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
$username = $_GET['username'];
$id = $_GET['id'];
$sql1 = "SELECT content FROM BLOG WHERE id='$id'";
if($result = mysqli_query($link, $sql1)){
    if(mysqli_num_rows($result) > 0){
                   while($row = mysqli_fetch_array($result)){
$cont = $row['content'] ;
}
}
}

              echo "<div id='form'>";
              echo "<form action='http://localhost/review_my_blogs2.php?username=$username&id=$id' method='post'>";
              echo "<p>";
              echo "<label for='content'>Content:</label>";
              echo "<input type='text' name='content' id='content' class = 'content' value= '$cont'>"; 
              echo "</p>";
              echo "<input type='submit' value='Edit'>";
              echo "</form>";
              echo "</div>";
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