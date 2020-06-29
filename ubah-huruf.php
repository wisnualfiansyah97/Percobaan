<?php
function ubah_huruf($string){
	#kode di sini
	$length = strlen($string);
	$tempArr = [];
	$tempString='';
	for ($i=0; $i < $length; $i++) { 
		$tempArr[$i] = chr(ord(substr($string, $i, 1))+1);
		$tempString .= $tempArr[$i];
	}	
	// echo $tempString;
	return $tempString . "<br>";
	
}

// TEST CASES
	echo ubah_huruf('wow'); // xpx
	echo ubah_huruf('developer'); // efwfmpqfs
	echo ubah_huruf('laravel'); // mbsbwfm
	echo ubah_huruf('keren'); // lfsfo
	echo ubah_huruf('semangat'); // tfnbohbu

?>