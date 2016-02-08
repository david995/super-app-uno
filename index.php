<?php
header("Arr-Disable-Session-Affinity",true);
$instancia=$_SERVER["WEBSITE_INSTANCE_ID"];

echo $instancia;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head> 
<body>

<h1>Icono del día</h1>

<img src="randomicon.php"/>

</body>
</html>



