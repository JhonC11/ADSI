<?php 

	require_once "electric/pokemon.php";
	require_once "fire/pokemon.php";
	require_once "water/pokemon.php";

	use \electric\Pokemon as pke;
	use \fire\Pokemon as pkf;
	use \water\Pokemon as pkw;

	$pk1 = new pke();
	$pk2 = new pkf();
	$pk3 = new pkw();

	echo $pk1->Tipo();
	echo "<hr>";
	echo $pk2->Tipo();
	echo "<hr>";
	echo $pk3->Tipo();
	echo "<hr>";
?>