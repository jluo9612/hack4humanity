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
			<h1 id="title">Title:<?php  echo $row[0]; ?></h1>
			<p id="organization">Organization:<?php echo $row[1]; ?></p>
			<p>Program Size:<?php echo $row[7]; ?> </p>
			<p><?php echo $row[3]; ?></p>
			<p>Program Description:<?php echo $row[4]; ?></p>
			<p>Skill reconmended:<?php echo $row[5]; ?></p>
			<p>requirement:<?php echo $row[6]; ?></p>
			<p>	</p>
		</div>
	</div>
</body>
</html>
