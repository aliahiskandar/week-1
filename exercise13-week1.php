<?php
function banding($str){
  $x=0;
  $o=0;
  $length=strlen($str);
for($i=0;$i<$length;$i++){
  if($str[$i]==="o"){
    $o++;
    }
  else {
    $x++;
  }
}

if ($x===$o){
  echo "True";
}
  else{
    echo"False";
  }
}


banding("xoooxx");
?>