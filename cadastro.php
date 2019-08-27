<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
    </head>
    <body>
    
    <h2>Cadastrar Moedas</h2>

    <form action="index.php">
        <input type="submit" value="Tela Inicial" onclick=""/>
    </form>

    <br><br>

        <form action="cadastro_motor.php" method="POST">
            Filial:
            <select name="filial">
                <option value="POA">POA</option>
                <option value="SP">SP</option>
                <option value="Caxias">Caxias</option>
            </select>
            
            <br><br>
            
            Moedas de: <input type="number" name="nro_inicial" maxlength="4" min="0" max="9999" size="3px" required placeholder="0000">
            Até: <input type="number" name="nro_final" maxlength="4" min="0" max="9999" size="4px" required placeholder="0000">
            
            <br><br>
            
            <input type="submit" style="width:11%;" name="Cadastrar">
            
        </form>
    </body>
</html>