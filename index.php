<?php
	// TODO: reorganize the repo, as this sits outside the repo's root directory
	// TODO: either use .htaccess to redirect, or transplant intro.php here
	$host = $_SERVER['HTTP_HOST'];
	header('Location: http://' . $host . '/rei-hello/html/intro.php');
