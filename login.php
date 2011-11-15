<?php
	if($_POST["email"] == "jlogin@devstring.com" && $_POST["password"] == "jlogin") {
		echo "valid";
	} else {
		echo "invalid";
	}
?>