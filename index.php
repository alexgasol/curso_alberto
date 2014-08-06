<?php
	//http://localhost/curso_alberto/?val=3
	
	$userVal = $_GET["val"];
	$textComp = "pepe";

	// //Decrecientes
	// while ($userVal >= 0) 
	// {
	// 	echo $userVal." - ";
	// 	$userVal--;
	// }


	// //Ascendientes
	// while ($userVal <= 20) 
	// {
	// 	echo $userVal." - ";
	// 	$userVal++;
	// }
	//Texto
	if ($userVal == $textComp)
	{
		echo "Has introducido tus datos correctamente, aunque tu nombre sea soso.";
	}
	else 
	{
		echo "You're not the chosen one $userVal";
	}


	// $testBool = true;
	// $testInt = 0;

	// $testBool2 = !$testBool;
	// $testInt2 = 1;

	// if ((($testInt > 10) && $testBool2) || ($testInt2 != 54))
	// {
	// 	echo "Hola Mundo";
	// }
	// else if ()
	// {
	// 	echo "Adios Mundo";
	// }
	// else
	// {

	// }

	// while ($testBool)
	// {
	// 	echo $testInt." - ";
	// 	// $testInt = $testInt + 1;
	// 	$testInt++;

	// 	$testBool = $testInt <= 10;
	// }
?>