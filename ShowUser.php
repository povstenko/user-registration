<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$fileString=file_get_contents("user.txt");
		echo $fileString;
	?>
</body>
</html>