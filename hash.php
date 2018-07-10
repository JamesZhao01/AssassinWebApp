<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	echo password_hash(htmlspecialchars("test"), PASSWORD_DEFAULT);
	?>
</body>
</html>