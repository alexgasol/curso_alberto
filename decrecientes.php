<?php
	//http://localhost/curso_alberto/?val=3
	
	$userVal = $_GET["val"];
	$textComp = "pepe";

	//Decrecientes
	while ($userVal >= 0) 
	{
		echo $userVal." - ";
		$userVal--;
	}


	
?>