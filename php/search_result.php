<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Search Result</title>
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="search_result1.css">
<script src="../js/show_results.js"></script>
</head>

<body>
	<div class="containter">
		<div class="panel">
			<div class="panel-heading text-center">
				<h1>Search results</h1>
			</div>

			<div class="panel-body">
				<div class="col-md-12 results" id="result_list">
					<?php 
					  $host="localhost"; // Host name 
						$username="root"; // Mysql username 
						$password=""; // Mysql password 
						$db_name="humanity"; // Database name 
						$tbl_name="post"; // Table name 

						// Connect to server and select databse.
						mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
						mysql_select_db("$db_name")or die("cannot select DB");
					  $size = $_POST['size'];
						$address = $_POST['address'];
						$size = stripslashes($size);
						$size = mysql_real_escape_string($size);
						$address = stripslashes($address);
						$address = mysql_real_escape_string($address);
						$sql = "select * from $tbl_name where address like '%$address%' and size= '$size' ";

					  $result = mysql_query($sql);
					  if (!$result) {
							echo 'Could not run query: ' . mysql_error();
							exit;
						}
					  



					  $fetchnum = count($result);
						while ($row = mysql_fetch_array($result)){
							for($i=0;$i<$fetchnum;$i++){
    						echo "<h1><a href='".$row['url']."'>".$row['title']."</a></h1><br>"; // Each column in each row
								echo "<p>".$row['org']."</p><br>";
								echo "<hr>";
								
							}
						}
							


					?>
				</div>
			</div>


		</div>
	</div>

	<p><a class="btn-default" onclick="show_result()">Press!!</a></p>

</body>
</html>
