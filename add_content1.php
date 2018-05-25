<!DOCTYPE html>
<html>
<head>
    <title>ABC Pvt. Ltd.</title>
<link rel="stylesheet" type="text/css" href="signin.css">
</head>
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
  echo '</div>';
    echo "<center>";
                echo "<div id='form'>";
                echo "<form action='http://localhost/add_content.php?username=$username' method='post'>";
                echo "<p>";
                ?>
                    <label for="content">Content:</label>
                    <input type="text" name="content" id="content" class="content" height="700px" width="350px">
                </p>
                 <input type="submit" value="Publish">
            </form>
        </div>
    </center>
</body>
</html>
