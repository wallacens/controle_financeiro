<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['email']);

echo "Esperamos que volte em breve!!";
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aguarde um instante</title>
</head>
<body>
<script type="text/javascript">
	window.location.href='home.php';
</script>
</body>
</html>

