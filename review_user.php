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
  echo "<a href='javascript:void(0)'' class='closebtn' onclick='closeNav()'>&times;</a>";
  echo "<a href='http://localhost/users.php?username=$username'>Users</a>";
  echo "<a href='http://localhost/add_member.html?username=$username'>Add member</a>";
  echo "<a href='http://localhost/review_member.php?username=$username'>Review member</a>";
  echo "<a href='http://localhost/review_blog.php?username=$username'>Review contents</a>";
  echo "<a href='http://localhost/add_content1.php?username=$username'>Publish blog </a>";
  echo "<a href='http://localhost/Home.php'>Log out</a>";
  ?>

</div>



<span style="font-size:30px;cursor:pointer; color:white" onclick="openNav()">&#9776;</span>
<span><img src="user.png" title="User">
  
</div>
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
$username1 = $_GET['username1'];
$sql1 = "SELECT name,username,emailid,hierarchy FROM user where username='$username1";
 if($result = mysqli_query($link, $sql1)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";     /*donor_id VARCHAR(7)  PRIMARY KEY, gender CHAR(1) NOT NULL,phone_no VARCHAR(10) ,name VARCHAR(20),blood_group VARCHAR(3) NOT NULL,
volunteer_id VARCHAR(3))*/

            while($row = mysqli_fetch_array($result)){
           
                echo "<tr>";
                echo "<td style='font-size=30px'>" . $row['name'] . "</td><br/>";
                echo "<br/>";
                $username1=$row['username'];
                echo "<td style='font-size=14px'>" . $username1 . "</td><br/>";
                echo "<br/>";
                echo "<td style='font-size=13px'>" . $row['emailid'] . "</td>";
                echo "<br/>";
                echo "<td style='font-size=13px'>" . $row['hierarchy'] . "</td>";
                }
                echo "</table>";
              }
            }

$username = $_GET['username'];
$username1 = $_GET['username1'];
 echo "<div id='content'>";
echo "<center>";
                echo "<div id='form'>";
                echo "<form action='http://localhost/review_user1.php?username=$username&username1=$username1' method='post'>";
                echo "<p>";
                    echo "<label for='hierarchy'>Select access right(1 for admin, 2 for publisher and 3 for user):<br/></label>";
                    echo '<input type="radio" name="hierarchy" value="1"> 1<br>';
                    echo '<input type="radio" name="hierarchy" value="2"> 2<br>';
                    echo '<input type="radio" name="hierarchy" value="3"> 3<br>';
                echo '<input type="submit" value="Change">';
                echo '</form>';
            echo '</div>';
            echo '</center>';
            ?>
          </body>
          </html>