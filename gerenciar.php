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
        <h1> GERENCIAR ESTOQUE </h1>
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

                    <H5 style="text-align:center;" class="infoUser">PREENCHA O ID DO PRODUTO PARA LOCALIZAR E EXLUIR O ITEM</H5>
                
                    <div class="formulario">

                        <form action="gerenciar.php" method="POST">
                        
                        <div class="formulario">
                                <label class="nameInput">ID</label>
                                <input type="number" name="id" placeholder="ID do produto" class="styleInput">
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

            if (isset($_POST["id"])) {
                $id = $_POST["id"];
            } else {
                $id = null;
            }

            if ($id != null) {

                include("conecta.php");

                $sql = "SELECT id, nome, descr, dat1, dat2, qtd, udm, cat FROM estoq WHERE id = '$id'";
                $result = $conn->query($sql);


                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        echo "

                            <div class= 'column'>
                            
                            <tr>

                            <td>Nome: $row[nome] <br></td>
                            <td>Descrição: $row[descr] <br></td>
                            <td>Data da Compra: $row[dat1] <br></td>
                            <td>Validade: $row[dat2] <br></td>
                            <td>Quantidade: $row[qtd] <br></td>
                            <td>Unidade de Medida: $row[udm] <br></td>
                            <td>Categoria: $row[cat] <br></td>

                            </tr>

                                <form>
                                <a href='deleta.php?id=" . $row['id'] . "'>Apagar </a><br><hr>  
                                </ul>
                                
                                </form> </div></div>";

                    }
                }
            }


            ?>                     


        </main>    
        <footer><h3><a href="contato.php">Contato</a></footer>

</body>
</html>







