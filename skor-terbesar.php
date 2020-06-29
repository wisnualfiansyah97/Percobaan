<?php
function skor_terbesar($arr){
  //kode di sini
  $length = count($arr);
  $arrAssoc = [];
  $maxLaravel = 0;
  $maxReactNative = 0;
  $maxReactJS = 0;
  foreach ($arr as $array) {
      if($array["kelas"]=="Laravel" && $maxLaravel<$array['nilai']){
        $maxLaravel= $array['nilai'];
        $arrAssoc["Laravel"] = ['nama' => $array['nama'], 'kelas'=> $array['kelas'], 'nilai'=>$array['nilai']];
      }
      elseif($array["kelas"]=="React Native" && $maxReactNative<$array['nilai']){
        $maxReactNative= $array['nilai'];
        $arrAssoc["React Native"] = ['nama' => $array['nama'], 'kelas'=> $array['kelas'], 'nilai'=>$array['nilai']];

      }
      elseif($array["kelas"]=="React JS" && $maxReactJS<$array['nilai']){
        $maxReactJS= $array['nilai'];
        $arrAssoc["React JS"] = ['nama' => $array['nama'], 'kelas'=> $array['kelas'], 'nilai'=>$array['nilai']];
      }
  }
  return $arrAssoc;

}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

echo "<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>