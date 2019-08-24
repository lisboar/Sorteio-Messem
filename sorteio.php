<html>
    <head>
        <title>
            Sorteio
        </title>
    </head>
    <body>
        <form action="sorteio.php" method="POST">

            <input type="submit" value="Sorteie!"/><br>

            <input type="hidden" name="tipo" value="1"/>
            
            <?php

                if(isset($_POST['tipo'])){
                    

                     for($i=0;$i<200;$i++){
                         $array[$i] = $i+1;
                     }
                    
                     $rand = array_rand($array);
                
                      echo "<br> Numero sorteado: ";
                      echo $array[$rand]."<br>";


                }

            ?>
            
        </form>
    </body>
</html> 