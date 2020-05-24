<!DOCTYPE html>
<html>
<head>
	<title>Your Info</title>
</head>
<style type="text/css">
body{
	background: #2BC0E4;

	font-family: Roboto;
}
</style>
<body>


<?php 
echo("<h1>Your information is successfully submitted</h1><br>");
echo("<h1>Review it");
echo("<h1>Name=".$_POST["Firstname"]." ".$_POST["lastname"]."</h1><br>");
echo("<h1>FAther's Name=".$_POST["fname"]."</h1><br>");
echo("<h1>Mother's Name=".$_POST["mname"]."</h1><br>");
echo("<h1>Gender=".$_POST["gender"]."</h1><br>");
echo("<h1>state=".$_POST["state"]."</h1><br>");
echo("<h1>City=".$_POST["city"]."</h1><br>");
echo("<h1>E-mail Id=".$_POST["E-mail"]."</h1><br>");
	
?>
</body>
</html>