<h2> Percobaan Variabel </h2>

<?php

$nama="Fauziah";
$semester=4;

var_dump($nama); echo "<br>";
var_dump($semester); echo "<br>";

function printNama(){
	global $nama;
	echo <h3>$nama</h3>;
}

function printMataKuliah(){
	$namaMatKul = "Web Programming";
	echo <p>$namaMatKul</p>;
}
?>
