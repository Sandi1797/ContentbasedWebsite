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
  
  echo "<div id='header'>";
  echo "<div id='mySidenav' class='sidenav'>";
  echo "<a href='javascript:void(0)'' class='closebtn' onclick='closeNav()''>&times;</a>";
  echo "<a href='http://localhost/Home.php'>Blogs</a>";
  echo "<a href='#'>#Trending blogs</a>";
  echo "<a href='http://localhost/search_blog1.php'>Search blogs</a>";
  echo "<a href='http://localhost/signin.html'>Log in</a>";
  echo "<a href='http://localhost/signup.html'>Sign up</a>";
  echo "</div>";
?>
<span style="font-size:30px;cursor:pointer; color:white" onclick="openNav()">&#9776;</span>
<span><img src="user.png" title="User">
  
</div>
<?php
 

 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";
$link = mysqli_connect($servername,$username,$password,$dbname);
 
$username1 = mysqli_real_escape_string($link, $_POST['username']); 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
$sql1 = "SELECT username,timest,content FROM BLOG where username='$username1'";
 if($result = mysqli_query($link, $sql1)){
    if(mysqli_num_rows($result) > 0){
        echo "<div id='content'>";
        echo "<table>";     /*donor_id VARCHAR(7)  PRIMARY KEY, gender CHAR(1) NOT NULL,phone_no VARCHAR(10) ,name VARCHAR(20),blood_group VARCHAR(3) NOT NULL,
volunteer_id VARCHAR(3))*/
            while($row = mysqli_fetch_array($result)){
           
                
                echo "<tr>";
                echo "<td style='font-size=30px'><b>" . $row['username'] . "</b></td><br/>";
                echo "<br/>";
                echo "<td style='font-size=14px'>" . $row['timest'] . "</td><br/>";
                 echo "<br/>";
                echo "<td style='font-size=13px'>" . $row['content'] . "</td></tr>";
                
        }

        echo "</table>";
       
      }
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