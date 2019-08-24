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
        <form action="cadastro.php">
            <input type="submit" value="Retornar à tela de Cadastro" onclick="" />
        </form>

        <br><br>

            <form action="registro_moeda.php" method="POST">
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

                <br><br>

                <input type="radio" name="entregue">Entregue
                <input type="radio" name="nao_entregue">Não entregue

                <br><br>
                
                Data da entrega: <input type="date" name="data">

                <br><br><br><br>

                <input type="radio" name="usada">Usada
                <input type="radio" name="nao_usada">Não usada
                
                <!-- <br><br>

                <input type="radio" name="sorteada">Sorteada
                <input type="radio" name="sorteada">Não sorteada -->

                <br><br> 

                <input type="submit" name="atualizar" value="Atualizar">

                <br><br>


                <?php
                    if(isset($_POST['atualizar'])){

                        $moeda = $_POST['moeda'];
                        $usada  = $_POST['usada'];
                        $entregue  = $_POST['entregue'];
                        $data = $_POST['data'];

                        $pdoQuery ="UPDATE moedas SET flg_usada=':usada' WHERE nro_moeda=:moeda";
                        $pdoResult =$pdo ->prepare($pdoQuery);
                        $pdoResult->execute(array(":usada"=>$usada,":nro_moeda"=>$moeda));

                        // $stmt = $pdo->prepare($pdoQuery);

                        // $stmt->execute();
                    }

                ?>

            </form>

        

    </body>
</html>