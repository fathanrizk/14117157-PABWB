<?php
$nilai1=99;
$nilai2=66;

echo "nilai sebelum di swap";
echo "</br>Nilai 1 = $nilai1";
echo "</br>Nilai 2 = $nilai2";

function swap(&$value1,&$value2){
  $temp=0;
  $temp=$value1;
    $value1=$value2;
    $value2=$temp;
}

echo "</br></br>nilai setelah di swap";
swap($nilai1,$nilai2);
echo "</br>Nilai 1 = $nilai1";
echo "</br>Nilai 2 = $nilai2";

?>
