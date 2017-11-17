<?php
$archivo = "conta.txt"; // n visitatori
if(file_exists($archivo)){
  $conta = file_get_contents($archivo);
  $cook= $_COOKIE[‘cook’]; // leggo cookie
    if (!$cook)
       $conta ++; // // se non esiste incremento le visite
}
else{
// creo l'archivio (SOLO LA PRIMA VOLTA)  
  touch($archivo);
  chmod($archivo,0755);
  $conta = 1;
}
setcookie("cook",0, time() + 3600);
file_put_contents($archivo, $conta);
echo $conta;
?>
