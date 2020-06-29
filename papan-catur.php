<?php

function papan_catur($angka) {
// tulis kode di sini
	for ($i=0; $i < $angka; $i++) { 
		if($i%2 == 0){
			for ($j=0; $j < $angka; $j++) { 
				echo "#&nbsp";
			}
		}
		else{
			for ($j=0; $j < $angka; $j++) { 
				if($j==0){
					echo "&nbsp";
				}
				else{
					echo "#&nbsp";
				}
			}	
		}
		
		echo "<br>";
	}
	return "<br>";
}

// TEST CASES
echo papan_catur(4) ;
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/