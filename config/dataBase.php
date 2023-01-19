<?php
$conexao = mysqli_connect("localhost","root","", "super-trunfo");

if ($conexao->connect_error) {
  die("Connection failed: " . $conexao->connect_error);
}

 function cadastrar($table, $colunas, $values){
   $sql = "insert into ".$table." (".$colunas.") value (".$values.")";
   $resultado = mysqli_query($conexao, $sql);

   if($resultado > 0) {
     return true;
   }
   return false;
 }