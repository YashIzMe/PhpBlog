<?php

/* Connection to database */
	$conn =mysqli_connect("mysql","rootUser","toor","blog",3306);

	/* Check connection */
	if(mysqli_connect_error()) {
		echo "Connection failed";
		printf("Error : %s",mysqli_connect_error());
	}

?>
