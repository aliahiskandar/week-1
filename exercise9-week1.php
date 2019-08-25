<?php
function lht(){
  echo"Hallo Function!";
}
lht();


function kali($a,$b){
  $c = $a * $b;
  return $c;
}
$a=2;
$b=4;
echo"\n\nhasil kali $a dan $b adalah ". kali($a,$b);


function gabung($nama,$age,$address,$hobby){
  echo "\nNama :$nama \nUmmur :$age \nAlamat :$address \nHobby :$hoby";
}
$nama="aliah";
$age="20";
$address="jkt";
$hobby="mkn";
gabung($nama,$age,$address,$hobby);
?> 