<?php
    include ("connection.php");
?>

<html>
<head>
    <meta charset="utf8">
    <title>Registrar ações da moeda</title>
</head>
    <body>
        <h2>Registrar informações das moedas cadastradas</h2> 
        <table>  
            <form action="cadastro.php">
                <input type="submit" value="Retornar à tela de Cadastro" onclick="">
            </form>
            &nbsp;
            <form action="index.php">
                <input type="submit" value="Tela Inicial" onclick=""/>
            </form>
        </table>

        <br><br>

            <form action="registro_moeda.php" method="POST">
                <fieldset>
                Selecione a moeda desejada: 
                <select name="moeda">
                    <option>Selecione</option>
                    <?php
                    $result = $pdo->prepare("SELECT * FROM moedas");
                    $result->execute();
                    
                    while($moedas_cadastradas = $result->fetch(PDO::FETCH_ASSOC)){
                        echo '<option value="'.$moedas_cadastradas['nro_moeda'].'">'.$moedas_cadastradas['nro_moeda'].'</option>';
                    }
                    ?>
                </select>

                <br><br><br><br>

                <input type="radio" name="entregue" value=1>Entregue
                <input type="radio" name="entregue" value=0>Não entregue

                <br><br>

                
                Data da entrega: <input type="date" name="data">

                <br><br><br><br>

                <input type="radio" name="usada" value=1>Usada
                <input type="radio" name="usada" value=0>Não usada

                <br><br><br><br>

                <input type="submit" name="atualizar" value="Atualizar">

                <br><br>
                </fieldset>


                <?php
                    if(isset($_POST['atualizar'])){

                        if(isset($_POST['moeda'])){
                            $moeda = $_POST['moeda'];
                        }
                        
                        if(isset($_POST['usada'])){
                            $usada = $_POST['usada'];
                        }

                        if(isset($_POST['entregue'])){
                            $entregue = $_POST['data'];
                        }

                        if(isset($_POST['data'])){
                            $data = $_POST['data'];
                        }


                        $pdoQuery ="UPDATE moedas SET flg_usada='$usada', data_entrega='$entregue'  WHERE nro_moeda=$moeda";
                        $pdoResult =$pdo ->prepare($pdoQuery);
                        $pdoResult->execute(array("$usada"=>$usada,"$moeda"=>$moeda,"$entregue"=>$entregue));

                        echo "Moeda numero ".$moeda." alterada com sucesso!";

                    }

                ?>

            </form>

        

    </body>
</html>