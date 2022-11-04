<?php

  include_once('config.php');


  $sql = "SELECT * FROM dados ORDER BY idproduto DESC";
  $result = $conexao->query($sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registros do DB</title>


    <style>

        body{
            text-align: center;
        }
    
    </style>


    <meta charset="utf-8"/>
</head>
<body>

<div>

<table class="table" class="table-bg-blue">
  <thead>
    <tr>
      <th scope="col">id <td> </th>
      <th scope="col">Nome</th>
      <th scope="col">Marca</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Unidade De Medida</th>
      <th scope="col">Categoria</th>
      <th scope="col">Subcategoria</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>

    <?php
    while($user_data = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<tr>";
        echo "<td>".$user_data['idproduto']."</td>" ;
        echo "<td><td>".$user_data['nome']."</td>" ;
        echo "<td>".$user_data['marca']."</td>" ;
        echo "<td>".$user_data['quantidade']."</td>" ;
        echo "<td>".$user_data['umedida']."</td>" ;
        echo "<td>".$user_data['categoria']."</td>" ;
        echo "<td>".$user_data['subcategoria']."</td>" ;
    }
    ?>

  </tbody>
</table>

</div>



</body>
</html>

