<?php
include ("valida.php");
?>
<html>
    <head>
    <title>Principal</title>
    </head>
    <body>
        <div style="width: 800px; margin: 0 auto;display: flex">
            <div style="min-height: 100px; width: 100$; background-color: purple;";>
                <div style="width: 50%; float:left">
                <span style="padding-left: 10px; "> Olá <?=$_SESSION['nome'];?></span>
            </div>
            <div style="width: 50%; float: left; text-align: right;">
                <span style="background-color:blue; margin-right: 10px;"> <a href="sair.php">SAIR</a> </span>
            </div>
            <div id="menu" style="width: 200px; float: left; background-color: black; min-height: 400px;">
                <h2 style="color:purple">Menu</h2>
                <p><a href="cadastro.php">Cadastro de Usúarios</a></p>
                <p><a href="lista.php">lista</a></p>
                <p>Item 3</p>
        </div>
       
        <div style=" float: left; background-color> #ddd; min-hieght: 400px; width: 600px;">
            <h2>Conteúdo</h2>
            <p>Aqui vai o conteúdo principal</p>
            <form method="post" action="cadastro.php" >
                NOME: <input type="text" name="nome" id="nome"><br>        
                CPF: <input type="text" name="cpf" id="cpf"><br>
                SENHA: <input type="password" name="senha" id="senha">
            <input type="submit" value="salvar">
        </form>

        <?php
            include ("conexao.php");        
            $sql = "select nome from usuarios";
            $resultado = $conn->query($sql);
            while ($row = $resultado->fetch_assoc()){           
}
       
        ?>
        

        
        </div>
    </div>
    </body>
    
</html>
