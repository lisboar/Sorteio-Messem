<?php
    include ("connection.php");
?>

<html>
    <head>
        <title>
            Sorteio
        </title>
    </head>
    <body>
    <br>
    <center>
    
    <form action="index.php">
        <input type="submit" value="Tela Inicial" onclick=""/>
    </form>
    <br>
    
        <form action="sorteio.php" method="POST">

            <input type="submit" value="Sorteie!"/><br>

            <input type="hidden" name="tipo" value="1"/>
            
            <?php

                $sql = "SELECT nro_moeda FROM moedas WHERE flg_usada=0 and flg_sorteada=0 and data_entrega<>'null'";
                $query = $pdo->query($sql);
                $return = $query->fetchAll(PDO::FETCH_ASSOC);
                        
                $aMoedas = array();
                foreach($return as $row){
                    $aMoedas[$row['nro_moeda']] = $row['nro_moeda'];
                }

                if(isset($_POST['tipo'])){

                    // echo '<pre>';
                    // var_dump($return);
                    // exit();
                                       
                    echo "<br> Numero sorteado: ";
                    echo array_rand($aMoedas)."<br><br><br><br>";

                }

            ?>            
        </form>
    </center
    </body>
</html> 