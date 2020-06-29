<?php

function palindrome_angka($angka) {
	$angka = $angka + 1;
	$temp = '';
	$convertToString = (string)$angka;
    $lengthAngka = strlen($angka);            
    for ($i=($lengthAngka-1); $i >= 0; $i--) { 
        $temp = $temp . $convertToString[$i];
    } 

    $tampungAngkaReverse = (int)$temp;
    if($angka != $tampungAngkaReverse){
    	return palindrome_angka($angka++);
    }
    else{
    	return $angka . "<br>";
    }


}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>