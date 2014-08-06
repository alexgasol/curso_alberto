<?php
	//http://localhost/curso_alberto/?val=3
	
	$userVal = $_GET["val"];
	$textComp = "pepe";

	//Ascendientes
	while ($userVal <= 20) 
	{
		echo $userVal." - ";
		$userVal++;
	}
	
?>