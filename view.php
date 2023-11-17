<!DOCTYPE html>
<html lang="en">
<head>
    <title>view</title>
</head>
<body>
  <a href="register.php">register new record</a><br><br>
  <table border=1>
    <?php
     include_once("connect.php");
     echo"<tr><td>";
     echo"Username";
     echo"</td><td>";
     echo"Password";
     echo"</td><td>";
     echo"Email";
     echo"</td></tr>";
     $sql="SELECT * FROM user_details ORDER BY name desc";
     $result=$db->query($sql);
     if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        echo"<tr><td>";
        echo $row["username"];
        echo"</td><td>";
        echo $row["password"];
        echo"</td><td>";
        echo $row["email"];
        echo"</td></tr>";
        }   
      }
        ?>
 </table>
</body>
</html>