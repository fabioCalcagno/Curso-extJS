<?php  

$mysql = new mysqli('localhost', 'root' , '', 'tabela_teste' );
$mysql->set_charset('utf8');


if($mysql == FALSE){
   echo "erro na conexão";}


?>