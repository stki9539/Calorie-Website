<?php
    session_start();

    if(isset($_SESSION['id'])) {
        $username = $_SESSION['username'];
        $userId = $_SESSION['id'];
        echo "Welcome, {$username}!";
    } else {
        header('Location: index.php');
        die();
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
    
        <a href="logout.php">Logout</a>
        
        
<p align="center">
<img border="0" src="https://cloud.githubusercontent.com/assets/13977747/13343914/73fbbd2e-dc0e-11e5-9947-df8d59f70b66.png" width="411" height="242" align="left"> </p>

<p align="center">&nbsp;</p>
<p>&nbsp;</p>

<DIV style="position: absolute; top:80px; left: 422px; width:500px; height:25px"> <p><font size="5" face="Arial" color="#663300"><b>&nbsp;Knowledge with a click of a button</b></font></p> </DIV>


<DIV style="position: absolute; top:130px; left: 429px; width:500px; height:25px">
	
<form name= "form1" method ="post" action ="food.php">

	<input name="search" placeholder= "Search here..." type = "text" size ="40" maxlength="50" />
	<input type ="submit" name="Submit" value="Search" >
</form>&nbsp;


</DIV>


<p><b><font face="Arial" size="5" color="#663300"> 
<DIV style="position: absolute; top:244px; left: 1202px; width:342px; height:4px">
</font></b><font color="#663300">CAL-COUNTER.COM</DIV>

<p>&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5" color="#663300">

<DIV style="position: absolute; top:396px; left:136px; width:214px; height:25px">FOOD</DIV> 

<DIV style="position: absolute; top:394px; left:1658px; width:367px; height:25px">MY TRACKER</DIV> </font></p>

<p>
<font face="Arial" size="5" color="#663300">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
</p>
<p>
<font face="Arial" size="5">
<DIV style="position: absolute; top:475px; left: 136px; width:200px; height:25px">
</font><a href="Proteinpage.html"  STYLE="text-decoration: none"><font face="Arial" color="#663300" size="4">Proteins</font></a></DIV></p>

<p>
<font face="Arial" size="4">
<DIV style="position: absolute; top:550px; left: 136px; width:200px; height:25px"></font><a href="Fruitspage.html"  STYLE="text-decoration: none"><font face="Arial" color="#663300" size="4">Fruits</DIV></font></a></p>

<p><font face="Arial" size="4">
<DIV style="position: absolute; top:625px; left: 136px; width:200px; height:25px"></font><a href="Vegetablespage.html"  STYLE="text-decoration: none"><font face="Arial" color="#663300" size="4">Vegetables</DIV></font></a></p>

<p><font face="Arial" size="5">
<DIV style="position: absolute; top:700px; left: 136px; width:200px; height:25px"> 
</font><font face="Arial" size="4"></font><a href="Grainpage.html"  STYLE="text-decoration: none"><font face="Arial" color="#663300" size="4">Grains</DIV></font></a></p>

<p><font face="Arial" size="4">
<DIV style="position: absolute; top:775px; left: 136px; width:200px; height:25px"</font><a href="Dairies.html"  STYLE="text-decoration: none"><font face="Arial" color="#663300" size="4">Dairies</DIV></font></a></p>

<p><font face="Arial" size="4">
<DIV style="position: absolute; top:850px; left: 136px; width:200px; height:25px"</font><a href="Sweetspage.html"  STYLE="text-decoration: none"><font face="Arial" color="#663300" size="4">Sweets</DIV></font></a></p>

<p><font face="Arial" size="4">
<DIV style="position: absolute; top:925px; left: 136px; width:200px; height:25px"</font><a href="Fatspage.html"  STYLE="text-decoration: none"><font face="Arial" color="#663300" size="4">Fats 
	&amp; Oils</DIV></font></a></p>

<p><font face="Arial" size="5" color="#663300">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</font><font color="#663300" size="2" face="Arial"> 

<DIV style="position: absolute; top:1326px; left:68px; width:686px; height:25px">Copyright 2016 Cal-Counter Tracker Corporation </DIV> 

<DIV style="position: absolute; top:1326px; left:1512px; width:519px; height:25px">PRIVACY POLICY * TERMS OF USE</font></DIV></p>
<p>&nbsp;</p>
<p align="right">
<DIV style="position: absolute; top:433px; left: 641px; width:734px; height:559px"> 
<img border="0" src="https://cloud.githubusercontent.com/assets/13977747/13449531/9d4b87e8-dfe9-11e5-9e84-83b914b8c04a.jpg" width="718" height="487"></DIV></p>

    </body>
</html>
