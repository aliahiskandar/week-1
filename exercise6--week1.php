<?php
echo"======Perulangan menggunakan WHILE======\n\n";
echo "LOOPING PERTAMA\n";
$a=1;
while($a<=10){
  echo "\nNomor ". $a;
  $a++;
}
echo "\n\nLOOPING KEDUA\n";
$b=10;
while($b>=1){ 
  echo "\nNomor ". $b;
  $b--;
}

echo"\n\n======Perulangan menggunakan FOR======\n\n";
echo "LOOPING PERTAMA\n";
for($c=1;$c<=10;$c++){
  echo "\nNomor ". $c;
}
echo "\n\nLOOPING KEDUA\n";
for($d=10;$d>=1;$d--){
  echo "\nNomor ". $d;
}

echo"\n\n======Menentukan Ganjil Genap  1-100======\n\n";
for($i=1;$i<=100;$i++){
  if ($i%2==0){
    echo"$i adalah bilangan genap\n" ;
  }
  else
  {
    echo"$i adalah bilangan ganjil\n" ;
  }
}
echo"\n\n======1-100 Pertambahan Counter 2======\n\n";
  for($e=1;$e<=100;$e+=2){
    if($e%3==0){
    echo"\n$e Kelipapatan 3" ;
    }
    else{
    echo"\n$e ";
    }
	}
echo"\n\n======1-100 Pertambahan Counter 5======\n\n";
   for($f=1;$f<=100;$f+=5){
		if($f%6==0){
    echo"\n$f Kelipapatan 6" ;
    }
    else{
    echo"\n$f ";
    }
  }
echo"\n\n======1-100 Pertambahan Counter 5======\n\n";
   for($g=1;$g<=100;$g+=9){
	  if($g%10==0){
    echo"\n$g Kelipapatan 10" ;
    }
    else{
    echo"\n$g ";
    }
  }

?> 