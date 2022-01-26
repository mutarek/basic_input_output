<!DOCTYPE html>
<html>
<head>
	<title>Basic OutPut And Input</title>
</head>
<body>

<h1>Impress You Partner With Love Calculator</h1>

<form action="<?php echo$_SERVER['PHP_SELF'] ?>" method="post">
	
	Type Something: <input type="text" name="uservalue">

	<br></br>

	Type Number: <input type="number" name="countable">
	<br></br>
	<input type="submit" name="action" value="Generate">

</form>

<?php
if (isset($_POST['action'])) {
	$message = $_POST['uservalue'];
	$condition = $_POST['countable'];
	if (!empty($message || !empty($condition))) {	
		for ($i=0; $i <$condition ; $i++) { 
			echo strtoupper($message)."<br>";
		}
	}
}



/*if (isset($_POST['action'])) {
	$name = $_POST['uservalue'];

	if (!empty($name)) {
		echo "<h1 style='color:green'> Your Value Is: $name </h1>";
	}
	else
	{
		echo "<h1 style='color:red'>Field Must be valid </h1>";
	}
}*/

?>

</body>
</html>