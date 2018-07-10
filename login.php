<?php
session_start();
if(is_null($_SESSION["login_visit"])){
	$_SESSION["login_visit"] = "visited";
}
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>