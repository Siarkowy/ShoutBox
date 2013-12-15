<?php

if ($_POST['dopisz']<>"")
{
 $plik = fopen("gg.txt",a);
 fputs($plik, "{$_POST['dopisz']}\n");
 fclose($plik);
}

if ($_POST['czysc']=='czysc')
{
 $plik = fopen("gg.txt",w); 
 fclose($plik);
}


header("Location: index.php");

?>
