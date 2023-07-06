<?php
require 'config.php';
$id = filter_input(INPUT_GET, 'id');
if($id){
  $sql = $pdo -> prepare("DELETE FROM crudphp where id = :id");
  $sql -> bindValue(':id',$id);
  $sql -> execute();
}

header("Location: index.php");

?>