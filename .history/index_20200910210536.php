<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The calculator in php</title>
</head>
<body>

<h2>The calculator in php</h2>

<form action="index.php" method ="get">
	<input type="number" name = "num1">
	<input type="number" name = "num2">
    <input type="submit">
</form>

 Answer <?php echo $_GET["num1"] + $_GET["num2"] ?>

</body>
</html>