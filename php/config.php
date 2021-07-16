<?php

	$conn = mysqli_connect("localhost", "kha012", "01214373103kha", "chat");

	if(!$conn){
		echo "Database not connected" . mysqli_connect_error();
	}

?> 