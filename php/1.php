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
// $title= "select title from $tbl_name limit 0,1";
// $when= "select when from $tbl_name limit 0,1";
// $org= "select org from $tbl_name limit 0,1";

// $address= "select address from $tbl_name limit 0,1";
// $about= "select about from $tbl_name limit 0,1";
// $skills= "select skills from $tbl_name limit 0,1";
// $requirement= "select requirement from $tbl_name limit 0,1";

// $a=mysql_query($title);
// $b=mysql_query($when);
// $c=mysql_query($org);
// $d=mysql_query($address);
// $e=mysql_query($about);
// $f=mysql_query($skills);
// $g=mysql_query($requirement);
	
$url = '1.php';
$size = 'big';
$result = mysql_query("SELECT * FROM $tbl_name limit 0,1");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);


// $sql= "select * from $tbl_name limit 0,1";

// if(mysql_query($sql)==true){
//   echo mysql_query($sql) . 'New record is added successfully';
// }
// else{
//   echo "Error:" . $sql . "<br>" . mysql_error();
// }
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
