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
  echo "<a href='http://localhost/add_content.html?username=$username'>Publish a blog</a>";
  echo "<a href='http://localhost/my_blogs.html?username=$username'>My blogs</a>";
  echo "<a href='http://localhost/review_my_blogs.html?username=$username'>Review my blogs</a>";
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
 
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
$content = mysqli_real_escape_string($link, $_POST['content']);
$timestamp = date("Y-m-d H:i:s");
$username = $_GET['username'];
/*$words = file('word.txt');
$accessData = array();
$c = 0;
foreach($content as $word1)
{
  $array1 = (explode(" ".$word1));
}
foreach ($words as $word)
{
  $array2 = (explode(",", $word));  
}
for($i = 0;$i < sizeof($array2);$i++)
{
  for($j = 0;$j < sizeof($array1);$j++)
  {
    if($array2[$i] == $array1[$j])
      $c++;
  }
}*/
$c = 0;
$goodness = $c/(sizeof($content));
if($goodness < 30.00){
$sql = "INSERT INTO blog (username,content,timest,goodness) VALUES ('$username','$content','$timestamp','$goodness')";
if(mysqli_query($link, $sql)){
    echo "<script>";
    echo "window.alert('Content published successfully!')";
    echo "</script>";
    header('Location:http://localhost/home_publisher.php?username='.urlencode($username));
} 
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}