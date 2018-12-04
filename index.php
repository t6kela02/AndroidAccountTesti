<!DOCTYPE html>
<html>
<?php
	include ('DatabaseConnection.php');
?>
<head>
	<title>Test</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="main">
		<?php
			$get_data = "SELECT * FROM data";
			$query_data = mysqli_query($conn, $get_data);
			
			while($row_data = mysqli_fetch_array($query_data)){
				$beacon_name = $row_data['beacon_name'];
				$seconds = $row_data['seconds'];
				
				echo $beacon_name . "<br>";
			}
		?>
	</div>
</body>
</html>
