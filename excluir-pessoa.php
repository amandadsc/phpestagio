<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $cod = $_GET["cod"];
            
            include_once 'conexao.php';
            
            $sql = "DELETE FROM pessoas WHERE cod = ".$cod;
            
            if(mysqli_query($con, $sql)){
                $msg = "Pessoa excluída com sucesso!";
            }else {
                $msg = "Erro ao excluir!";
            }
            mysqli_close($con);
        ?>
        
        <script>
            alert('<?php echo $msg; ?>');
            location.href="consultar-pessoas.php";
        </script>
    </body>
</html>
