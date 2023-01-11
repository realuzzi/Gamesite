<!DOCTYPE html>
<html>
<head>
<title>My Gaming Products Site</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<?php include('includes/header.inc');?>

	<?php include('includes/nav.inc');?>
	
	

<div id="wrapper">

	<?php include('includes/aside.inc');?>
	
		<section>
	<?php 
		include('includes/dbc.php');
		
		$query ="SELECT * FROM home_page ORDER BY id DESC";
		$result = mysqli_query($con,$query) ; // $con from dbc.php
		if($result == false){
			$error_message = mysqli_error();
			echo "<p>There has been a query error; $error_message</p>";
		}
		if(mysqli_num_rows($result)==0) {
			echo "No content is available at this time. Please check back soon.";
		}
		while($row=mysqli_fetch_assoc($result)){
			echo '<h2>'.$row['title].'</h2>';
			echo '<p>'.$row['message'].'</p>';
		}	
		mysqli_free_result($result);
		mysqli_close($con);
		
	?>	
		include ('includes/dbc_admin.php');?>
	<p>Main content goes here...</p>
	<p>Main content goes here...</p>
	<p>Main content goes here...</p>
	<p>Main content goes here...</p>
	<p>Main content goes here...</p>

	</section>

</div>

<?php include('includes/footer.inc');?>

</body>
</html>
