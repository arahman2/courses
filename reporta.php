<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>UMW Course Ratings</title>
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
					<h3>Rate Trinkle Hall</h3>
					<p>Welcome to the Trinkle Hall ratings Website for UMW</p>
					<form method = "post" action = "report2a.php">
					<table>
					<tr><td>Name</td><td><input type="text" id="name" name="name" /></td></tr>
										
					
					<tr><td>Comments: </td><td><textarea rows="5" cols="25" name="comments" id="comments"></textarea></td></tr>
					<tr><td>&nbsp;</td><td><input type="submit" value="Post Rating" /></td></tr>
					</table>
					
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
