<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🛠 CONTROLE EMPOWER 🛠</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <h1> CADASTRAR ITEM NO ESTOQUE </h1>
        <nav>
        <table class="table1" >
                <tr>
                    <td class="td1">
                        <a href="cadastrar.php" style="color:white;">CADASTRAR PRODUTO</a>
                    </td >

                    <td class="td1">
                        <a href="gerenciar.php" style="color:white;">EXCLUIR PRODUTO</a>
                    </td>

                    <td class="td1">
                        <a href="editar.php" style="color:white;">EDITAR PRODUTO</a>
                    </td>

                </tr>

            </table>
        </nav>
    </header>
    <main>

        <br>
    
            <div class="row">

                <div class="column">

                <H5 style="text-align:center;" class="infoUser">INSIRA TODAS AS INFORMAÇÕES DO PRODUTO A SER ADICIONADO</H5> 

                    <div class="formulario"> 

                        <form method="POST" action="cadastrar.php">

                        <div class="formulario">
                                <label class="nameInput">Nome</label>
                                <input type="text" name="nome" placeholder="Nome do item" class="styleInput">
                            </div>

                            <div class="formulario">
                                <label class="nameInput">Descrição</label>
                                <input type="text" name="descr" class="styleInput" placeholder="Informações adicionais do item">
                            </div>

                            <div class="formulario">
                                <label class="nameInput">Data da Compra</label>
                                <input type="date" name="dat1" class="styleInput">
                            </div>

                            <div class="formulario">
                                <label class="nameInput">Validade</label>
                                <input type="date" name="dat2" class="styleInput">
                            </div>


                            <div class="formulario">
                                <label class="nameInput">Unidade de medida</label>
                                <input type="text" name="udm" placeholder="Ex. cm, ml, kg" class="styleInput">
                            </div>
                            
                            <div class="formulario">
                                <label class="nameInput">Categoria</label>
                                <input type="text" name="cat" placeholder="Ex. Ferramentas" class="styleInput">
                            </div>

                            
                            
                            <br>

                            <div class="formulario">
                                <label class="NameInput"></label>
                                <input type="submit" class="submit" value="Cadastrar">
                            </div>
                        </form>
                        
                    </div>

                </div>



            
            
          
        

<?php

    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
    }
    else{
        $nome = null;
    }
    if(isset($_POST["descr"])){
        $descr = $_POST["descr"];
    }
    else{
        $descr = null;
    }

    if(isset($_POST["dat1"])){
        $dat1 = $_POST["dat1"];
    }
    else{
        $dat1 = null;
    }

    if(isset($_POST["dat2"])){
        $dat2 = $_POST["dat2"];
    }
    else{
        $dat2 = "Indeterminado";
    }

    if(isset($_POST["udm"])){
        $udm = $_POST["udm"];
    }
    else{
        $udm = null;
    }

    if(isset($_POST["cat"])){
        $cat = $_POST["cat"];
    }
    else{
        $cat = null;
    }

    if (isset($_POST["id"])) {
        $id = $_POST["id"];
    } else {
        $id = null;
    }

    if ($nome != null and $descr != null and $dat1 != null and $udm != null and $cat != null and $id == null) {

        include("conecta.php");

// CADASTRA O PRODUTO NO BANCO DE DADOS

        $sql = "INSERT INTO estoq (nome, descr, dat1, dat2, udm, cat)
                VALUES ('$nome' , '$descr' , '$dat1' , '$dat2' , '$udm' , '$cat')";
    
    if($conn->query($sql) === TRUE){
        
        $id = $conn->insert_id; // Obtém o ID gerado durante a inserção

        echo "
        <div class= 'column'>
        <p style='color:white'> O produto $nome foi cadastrado com sucesso! ID: $id </p>
        </div>
        </div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;

    }

    
     
 }
    
?>
</main>
<footer><h3><a href="contato.php">Contato</a></footer>

</body>
</html>
