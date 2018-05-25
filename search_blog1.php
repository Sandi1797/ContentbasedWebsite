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
   <center>
                <div id='form'>
                <form action='http://localhost/search_blog.php' method='post'>
                <p>
                
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" value="Enter the username...">
                </p>
                 <input type="submit" value="Publish">
            </form>
        </div>
    </center>
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