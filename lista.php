<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Trinkle Hall Ratings</title>
<link rel="stylesheet" href="styles.css" type="text/css" />


</head>
<body>
<?php
   include('header.html');
?>


<div id="wrap">
	<div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
				<div class="content">
				
					<!-- CONTENT -->
					<h3>Current Trinkle Hall Ratings</h3>
					
<table>		
<tr><th>Name</th><th>Comments</th></tr>
<?php
	include('dbconnect.php');
	$query = "SELECT name, comments FROM trinkle ORDER BY name";
    $result = mysqli_query($db, $query)
                         or die("Error Querying Database");
    while($row = mysqli_fetch_array($result)) {
  		$name = $row['name'];
  		$comments = $row['comments'];
  	echo "<tr><td>$name</td><td>$comments</td></tr>\n";
  }                 
                         
                         
                         
    mysqli_close($db);

?>
</table>
					<!-- END CONTENT -->
					
				</div>
				
				<?php
				    include('SIDEnFOOTER.html');
				?>
				   


			</div>
		</div>
	</div>
</div>
</body>
</html>