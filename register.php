<?php
   if (isset($_POST['submit'])) {
        include("connection.php"); //connection.php
        $username = strip_tags($_POST['name']);
        $password = strip_tags($_POST['password']);
       //shoudl do validation on passwords before submitting form
    $sql = "INSERT INTO members (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($dbCon, $sql)) {
        echo "<p align=center>(New record created successfully)</p>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbCon);
    }

       mysqli_close($dbCon);
   }
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register for Membership</title>
        
        <style>
         body {
            padding-top: 40px;
            padding-bottom: 300px;
            background: url('https://cloud.githubusercontent.com/assets/13977747/13406321/08f5d346-dee0-11e5-967e-bdc59e4185c7.jpg') no-repeat center center;
				
         }
         
        
         
       
         
         h2{
            text-align: center;
            color: #000000;
         }
      </style>
    </head>
    <body>
       <center><h1>Register for Membership</h1></center> 
        <center><form method="post" action="register.php">
            <input type="text" name="name" placeholder="Name" /><br />
            <input type="text" name="password" placeholder="Password" /><br />
            <input type="submit" name="submit" value="Join Member" />
            <input type="button" name="cancel" value="Cancel" onclick="location.href='Cal-Counter2.php'"/>
        
        </form>
    </center>
    </body>

</html>
