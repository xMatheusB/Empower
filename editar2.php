           
           <?php

            header("Location: editar.php");

            if(isset($_POST["nome2"])){
                $nome2 = $_POST["nome2"];
            }
                else{
                    $nome2 = null;
                }

            if(isset($_POST["descr2"])){
                    $descr2 = $_POST["descr2"];
                }
                    else{
                        $descr2 = null;
                }

            if(isset($_POST["dat1Z"])){
                $dat1Z = $_POST["dat1Z"];
            }
                else{
                    $dat1Z = null;
            }    


            if(isset($_POST["dat2Z"])){
                $dat2Z = $_POST["dat2Z"];
            }
                else{
                    $dat2Z = null;
            }

            
            if(isset($_POST["qtd2"])){
                $qtd2 = $_POST["qtd2"];
            }
                else{
                    $qtd2 = null;
            }

            if(isset($_POST["udm2"])){
                $udm2 = $_POST["udm2"];
            }
                else{
                    $udm2 = null;
            }

            
            if(isset($_POST["id2"])){
                $id2 = $_POST["id2"];
            }
                else{
                    $id2 = null;
            }

            
            if(isset($_POST["cat2"])){
                $cat2 = $_POST["cat2"];
            }
                else{
                    $cat2 = null;
            }

        
                    include("conecta.php");

                    $sql = "UPDATE estoq SET nome='$nome2', descr='$descr2', dat1='$dat1Z', dat2='$dat2Z', qtd='$qtd2', udm='$udm2', cat='$cat2' WHERE id='$id2'";

                    if ($conn->query($sql) === TRUE) {
                    echo "Atualizado com sucesso!!!";
                    } else {
                    echo "Erro na atualização " . $conn->error;
                    }
                    

                        
        ?>

    </main>
    <footer>

    </footer>
    
</body>
</html>