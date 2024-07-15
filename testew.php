<!DOCTYPE html> 
  <html> 
    <head> 
      <meta charset="UTF-8"> 
      <title>Tutorial</title> 
    </head> 
    <body> 
<?php 
include("conexao.php"); // caminho do seu arquivo de conexão ao banco de dados 
$consulta = "SELECT * FROM usuario"; 

?> 
      <table border="1"> 
        <tr> 
          <td>id</td> 
          <td>Nome</td> 
          <td>E-mail</td> 
          <td>cidade</td> 
          <td>UF</td> 
        </tr> 
        <?php while($dado = $con->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado['id']; ?></td>
          <td><?php echo $dado['nome']; ?></td> 
          <td><?php echo $dado['email']; ?></td> 
          <td><?php echo date('uf', strtotime($dado['usu_datadecadastro'])); ?></td> 
          <td> 
            <a href="usu_editar.php?codigo=<?php echo $dado['usu_codigo']; ?>">Editar</a> 
            <a href="usu_excluir.php?codigo=<?php echo $dado['usu_codigo']; ?>">Excluir</a> 
          </td> 
        </tr> 
        <?php } ?> 
      </table> 
    </body> 
</html>