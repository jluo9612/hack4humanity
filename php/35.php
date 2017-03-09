<html>
<head>
<meta charset="UTF-8">
<title>Description</title>
	<link rel="stylesheet" href="bootstrap.css">

<link rel="stylesheet" href="description.css">
</head>
<body>
	<div class="container">
		<div class="row">
		  <?php session_start();?>
			<h1 id="title">Title:<?php  echo $_SESSION['mytitle']; ?></h1>
			<p id="organization">Organization:<?php echo $_SESSION['myorg']; ?></p>
			<p>Program Size:<?php echo $_SESSION['mysize']; ?> </p>
			<p><?php echo $_SESSION['myaddress']; ?></p>
			<p>Program Description:<?php echo $_SESSION['myabout']; ?></p>
			<p>Skill reconmended:<?php echo $_SESSION['myskills']; ?></p>
			<p>requirement:<?php echo $_SESSION['myrequirement']; ?></p>
			<p>	</p>
		</div>
	</div>
</body>
</html>
