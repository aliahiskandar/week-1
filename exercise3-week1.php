<?php
$nama="Mikael";
$peran="ksatria";


if ($nama ===''&& $peran==='')
{
  echo "Nama dan Peran Harus diisi! ";
}
else if ($nama !=""&& $peran==='')
{
  echo "Peran Harus diisi! ";
}
else if ($nama !="" && $peran !="")
{
  echo "Nama $nama, Peran $peran";
}
?>