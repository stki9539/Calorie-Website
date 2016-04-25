
<?php
    session_start();

    if (isset($_POST['submit'])) {
        include("connection.php"); //connection.php
        $username = strip_tags($_POST['name']);
        $password = strip_tags($_POST['password']);
        
        $sql = "SELECT id, username, password FROM members WHERE username = '$username' AND activated = '1' LIMIT 1";
        
        $query = mysqli_query($dbCon, $sql); 
         if ($query) {
            $row = mysqli_fetch_row($query); 
            $userId = $row[0];
            $dbUsername = $row[1];
            $dbPassword = $row[2];
           
         }
        if ($username == $dbUsername && $password == $dbPassword) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $userId;
            header('Location: user.php');
        } else {
            echo "<p align=center>(Incorrect Username or Password) </p> ";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cal-Counter Login</title>
        
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
	
    </head>
    <body>
        <center><h1>Cal-Counter Login Page</h1></center>
    <center><form method="post" action="Login.php">
            <input type="text" name="name" placeholder="Name" /><br />
            <input type="text" name="password" placeholder="Password" /><br />
            <input type="submit" name="submit" value="Login" />
			<input type= "button" name="register" value="Register" onclick="location.href='register.php'" />
        </form>
        </center>
    
    </body>

</html>
