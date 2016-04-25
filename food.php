<?php
	include("foodconnection.php");

if(!isset($_POST['search'])){
	header("Location:Cal-Counter2.php");
}

$search_sql = "SELECT * FROM store WHERE name LIKE '%apple%';";

$search_query= mysql_query($search_sql);
if(mysql_num_rows($search_query)!=0){
	
$search_rs=mysql_fetch_assoc($search_query);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search Results</title>
        
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
     
    <p> Search results</p>
    <?php if(mysql_num_rows($search_query)!=0) {
		do {?>
		<p><?php echo $search_rs['name']; ?></p>
			
	<?php	}
	while ($search_rs = mysql_fetch_assoc($search_query));
	
	}
	else {
		echo "No results found.";
	}
	?>
		
    </body>

</html>
