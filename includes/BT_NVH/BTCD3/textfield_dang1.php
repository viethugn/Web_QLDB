<html> 

<head>

	<title>Input/Ouput data</title></head>

<body>

<form action="textfield_dang1.php" name="myform" method="post">

	Your Name: <input type="test" name="Name" size=20 value="<?php if(isset($_POST['Name'])) echo htmlentities($_POST['Name']);?>" />

	<br>

	<input type="submit" value="Submit">

</form>

<?php

	if (isset($_POST["Name"]))

		print "Hello " . $_POST["Name"];

?>
<?php
	include('../../backindex.html');
?>
</body>

</html>
