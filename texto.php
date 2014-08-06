<?php
	//http://localhost/curso_alberto/?val=3
	
	$userVal = $_GET["val"];
	$textComp = "pepe";


	// Texto
	if ($userVal == $textComp)
	{
		echo "Vale, te elegimos, aunque tu nombre sea un poco soso.";
	}
	else 
	{
		echo "You're not the chosen one $userVal, try in another movie, Harry Potter, Hunger Games whatever";
	}


?>