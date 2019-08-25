<?php
function banding($a,$b){
  if ($a<$b) {
    echo"true";}
  else if($a>$b){
    echo"false";}
  else if ($a==$b){
    echo"-1";}
  else {
    echo"Masukkan angka dengan benar!";
  }
}

banding(2,3);
banding(3,1);
banding(2,2);
?> 