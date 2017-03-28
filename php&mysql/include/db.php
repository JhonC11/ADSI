<?php

	$conx = mysqli_connect('localhost','root','','adsi1132816');

	if (!$conx) {
		echo "No se conecto con la base de datos";
	}

