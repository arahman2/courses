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
					<h3>Rate Trinkle</h3>
					<p>Thanks for rating trinkle </p>
					
					<?php
					include('dbconnect.php');
					$name = $_POST['name'];
					$comments = $_POST['comments'];
					

					$query = "INSERT INTO trinkle (name, comments) VALUES ('$name','$comments');";
					
					$result = mysqli_query($db, $query)
                         or die("Error Querying Database");


					?>
					<a href="reporta.php">Rate trinkle</a>
					
					
					</form>
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