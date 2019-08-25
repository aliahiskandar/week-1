<?php
function waktu($menit){
  $jam = $menit/60;
  $sisa =$menit%60;
  echo round($jam).":$sisa";
}
waktu(130);
?>