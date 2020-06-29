<?php
function tukar_besar_kecil($string){
//kode di sini
	$length = strlen($string);
	$tempArr = [];
	$tempString='';
	for ($i=0; $i < $length; $i++) {
		if (ord(substr($string, $i, 1))>=97 && ord(substr($string, $i, 1))<=122) {
		 	$tempArr[$i] = chr(ord(substr($string, $i, 1))-32);
			$tempString .= $tempArr[$i];
		 } 
		 elseif (ord(substr($string, $i, 1))>=65 && ord(substr($string, $i, 1))<=90) {
		 	$tempArr[$i] = chr(ord(substr($string, $i, 1))+32);
			$tempString .= $tempArr[$i];
		 }
		 else {
		 	$tempArr[$i] = substr($string, $i, 1);
		 	$tempString .= $tempArr[$i];
		 }
	}	
	// echo $tempString;
	return $tempString . "<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>