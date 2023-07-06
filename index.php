<?php
require 'config.php';
$lista = [];
$sql = $pdo -> query("SELECT * FROM crudphp");
if ($sql -> rowCount() >0){
  $lista = $sql -> fetchAll(PDO::FETCH_ASSOC); 
}
?>
<h1>Listagem de Usuários</h1>
<table border="1">
  <tr>
<th>ID</th>
<th>Nome</th>
<th>Email</th>
<th>Ações</th>
  </tr>
<?php foreach ($lista as $crudphp): ?>
  <tr>
    <td><?= $crudphp['id'];?></td>
    <td><?= $crudphp['nome'];?></td>
    <td><?= $crudphp['email'];?></td>
    <td>
      <a href="editar.php?id=<?= $crudphp['id'];?>">[Editar]</a>
      <a href="excluir.php?id=<?= $crudphp['id'];?>">[Excluir]</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
<a href="cadastrar.php">Cadastrar Usuários</a>