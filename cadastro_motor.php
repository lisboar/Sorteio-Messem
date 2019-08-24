<?php

if (isset($_POST['Cadastrar'])){

    try{
    $pdo = new pdo("mysql:host=localhost;dbname=Sorteio","root","2473");
    }catch(PODExceptio $e){
        echo $e->getMessage();
        exit();
    }

    $nro_inicial  = $_POST['nro_inicial'];
    $nro_final  = $_POST['nro_final'];
    $filial = $_POST['filial'];

    for($i=$nro_inicial;$i<=$nro_final;$i++){
        $pdoQuery ='INSERT INTO moedas (nro_moeda,filial) VALUES (:nro_moeda,:filial)';
        $pdoResult =$pdo ->prepare($pdoQuery);
        $pdoExec = $pdoResult->execute(array(":nro_moeda"=>$i,":filial"=>$filial));
    }


    if ($pdoExec){
        echo "<br>";
        echo "Moedas de número ". $_POST['nro_inicial']." até número ".$_POST['nro_final']." foram cadastradas com sucesso na filial ".$_POST['filial']."!"; 
    }else{
        echo "Dados não foram cadastrados!";
    }

}else{
    echo "No POST!";
}

echo "<br><br>";

?>

<form action="registro_moeda.php">
            <input type="submit" value="Editar moeda" onclick="" />
</form>
