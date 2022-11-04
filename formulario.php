<?php

if(isset($_POST['submit']))
{



    include_once('config.php');

 $nome = $_POST['nome'];
 $marca = $_POST['marca'];
 $quantidade = $_POST['quantidade'];
 $umedida = $_POST['uMedida'];
 $categoria = $_POST['categoria'];
 $subcategoria = $_POST['subcategoria'];

  
 $result = mysqli_query($conexao, "INSERT INTO dados (nome, marca, quantidade, 
 umedida, categoria, subcategoria) VALUES ('$nome', '$marca', '$quantidade', 
 '$umedida', '$categoria', '$subcategoria') ");


}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix | DB</title>

    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(176,196,222), rgb(70,130,180));
        }

        .box{
            position: absolute;
            top:45%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color:rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 25%;
            color: white;
        }

        fieldset{
            border: 3px solid LightSteelBlue;
        }

        legend{
            border: 1px solid LightSteelBlue;
            padding: 10px;
            text-align: center;
            background-color: LightSteelBlue;
            border-radius: 5px;

        }

        .inputBox{
            position: relative;
        }

        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            color: white;
        }

        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: 5px;
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -17px;
            font-size: 12px;
            color: DarkGray;
        }

        #submit{
            background-image: linear-gradient(to right, rgb(176,196,222), rgb(70,130,180));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(130,160,180), rgb(40,100,150));
        }



    </style>

</head>

<body>

    <div class="box"> 
        <form action="formulario.php" method= "POST">
            
            <fieldset> <legend> <b>Cadastro De Produtos</b> </legend>
            <br>

            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="marca" id="marca" class="inputUser" required>
                <label for="marca" class="labelInput">Marca</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="number" name="quantidade" id="quantidade" class="inputUser" required>
                <label for="quantidade" class="labelInput">Quantidade</label>
            </div>
            <br>

            <p>Unidade de medida:</p>

            <input type="radio" name="uMedida" id="mililitro" value="mililitro" required>
            <label for="ml">Mililitro</label> 

            <input type="radio" name="uMedida" id="litro" value="litro" required>
            <label for="l">Litro</label> 

            <input type="radio" name="uMedida" id="grama" value="grama" required>
            <label for="g">Grama</label> 

            <input type="radio" name="uMedida" id="quilograma" value="quilograma" required>
            <label for="kg">Quilograma</label> 
            <br><br><br>

            <div class="inputBox">
                <input type="text" name="categoria" id="categoria" class="inputUser" required>
                <label for="categoria" class="labelInput">Categoria</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="subcategoria" id="subcategoria" class="inputUser" required>
                <label for="subcategoria" class="labelInput">Subcategoria</label>
            </div>
            <br><br>

            <input type="submit" name="submit" id="submit"> 



        </fieldset>
        </form>
    </div>


    


    
    
</body>
</html>