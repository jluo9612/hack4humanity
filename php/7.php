<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Description</title>
	<link rel="stylesheet" href="bootstrap.css">

<link rel="stylesheet" href="description.css">
</head>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="humanity"; // Database name 
$tbl_name="post"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$url = '7.php';
$size = 'big';
$result = mysql_query("SELECT * FROM $tbl_name limit 6,1");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);

	?>
<body>
	<div class="container">
		<div class="row">
			<h1 id="title">Title:<?php  echo $row[0]; ?></h1>
			<p id="organization">Organization:<?php echo $row[1]; ?></p>
			<p>Program Size:<?php echo $row[2]; ?> </p>
			<p><?php echo $row[3]; ?></p>
			<p>Program Description:<?php echo $row[4]; ?></p>
			<p>Skill reconmended:<?php echo $row[5]; ?></p>
			<p>requirement:<?php echo $row[6]; ?></p>

		</div>
	</div>
</body>
</html>
