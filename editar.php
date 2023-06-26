<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

.lado{
    float: left;
    width: 50%;
    border-radius: 25px;
    text-align: center;
    color: white;
    background-color: #212d40;
    border-style:solid;
    border-color: #364156;
    border-width: 2px;
    margin: 0;
    max-height: 80%;
    overflow-y: scroll;
}

 


</style>


    <title> 🛠 CONTROLE EMPOWER 🛠 </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1> EDITAR ITENS DO ESTOQUE </h1>
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

                    <H5 style="text-align:center;" class="infoUser">PREENCHA TODOS OS CAMPOS PARA LOCALIZAR E ALTERAR O ITEM</H5>
                
                    <div class="formulario">

                        <form action="editar.php" method="POST">
                        
                        <div class="formulario">
                                <label class="nameInput">ID</label>
                                <input type="number" name="id" placeholder="ID do produto" class="styleInput">
                            </div> 

                            <div class="formulario">
                                <label class="nameInput">Nome</label>
                                <input type="text" name="nome" placeholder="Nome do produto" class="styleInput">
                            </div>

                            <br>

                            <div class="formulario">
                                <label class="NameInput"></label>
                                <input type="submit" class="submit" value="Pesquisar">
                            </div>
                        
                        </form>

                        

                    </div>

                </div>


        <?php
            if(isset($_POST["id"])){
                $id = $_POST["id"];
            }
                else{
                    $id = null;
                }

                if(isset($_POST["nome"])){
                    $nome = $_POST["nome"];
                }
                    else{
                        $nome = null;
                    }

       if($id != null || $nome != null){

                    include("conecta.php");
                
                    $sql = "SELECT id, nome, descr, dat1, dat2, qtd, udm, cat
                    FROM estoq WHERE id = '$id' && nome = '$nome'";
                    $resultado = mysqli_query($conn, $sql);
                    
                    if ($resultado->num_rows > 0) {
                        while($row = $resultado->fetch_assoc()) {

                        $id2 = $row["id"];
                        $nome2 = $row["nome"];
                        $descr2 = $row["descr"];
                        $dat1Z = $row["dat1"];
                        $dat2Z = $row["dat2"];
                        $qtd2 = $row["qtd"];
                        $udm2 = $row["udm"];
                        $cat2 = $row["cat"];
                       


        echo"

        <div class='column'>
        
        <h2 style='color:green'> Corrija os dados para atualizar</h2>
           
        <form action='editar2.php' method='POST'>
        <table>
        <tr><td>ID:</td><td><input type='hidden' name='id2' value='$id2' class='styleInput'> $id2</td></tr>
        <tr><td>Nome: </td><td><input type='text' name='nome2' value='$nome2' class='styleInput'></td></tr>
        <tr><td>Descrição: </td><td><input type='text' name='descr2' value='$descr2' class='styleInput'></td></tr>
        <tr><td>Data da Compra: </td> <td> <input type='date'  name='dat1Z' value='$dat1Z' class='styleInput'></td></tr> 
        <tr><td>Validade: </td><td> <input type='date' name='dat2Z'  value='$dat2Z' class='styleInput'></td></tr>
        <tr><td>Quantidade Base:  </td><td><input type='number' name='qtd2' value='$qtd2' class='styleInput'></td></tr>
        <tr><td>Unidade de medida:  </td><td><input type='text'  name='udm2' value='$udm2' class='styleInput'></td></tr>
        <tr><td>Categoria:  </td><td><input type='text'  name='cat2' value='$cat2' class='styleInput'></td></tr>

        <tr><td></td><td></td></tr>
        <tr><td><input type='submit' value='Atualizar' class='styleInput' style='right: 50%;'></td></tr>

        </table>
        </form> </div></div>
                            ";
        }
        
    } else {
        echo "
        <div class='column'>
        <p style='color:white'>Preencha todos os campos!
        </div>
        </div>";
    }       
}

?>

    </main>

    <footer><h3><a href="contato.php">Contato</a></footer>

    
</body>
</html>