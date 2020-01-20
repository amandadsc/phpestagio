<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $tipo_pessoa = $_POST["tipo_pessoa"];
            $nome = $_POST["nome"];
            $nome_fantasia = $_POST["nome_fantasia"];
            $cpf = $_POST["cpf"];
            $cnpj = $_POST["cnpj"];
            $razao_social = $_POST["razao_social"];
            $endereco = $_POST["endereco"];
            $numero = $_POST["numero"];
            $complemento = $_POST["complemento"];
            $cep = $_POST["cep"];
            $municipio = $_POST["municipio"];
            $uf = $_POST["uf"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $celular = $_POST["celular"];
            $cliente = $_POST["cliente"] = (isset($_POST["cliente"])) ? 1 : 0;
            $fornecedor = $_POST["fornecedor"] = (isset($_POST["fornecedor"])) ? 1 : 0;
            $funcionario = $_POST["funcionario"] = (isset($_POST["funcionario"])) ? 1 : 0;
            
            include_once 'conexao.php';
            
            $sql = "INSERT INTO pessoas VALUES(null, '".$tipo_pessoa."', '".$nome."', '".$nome_fantasia."', '".$cpf."', '".$cnpj."', '".$razao_social."', '".$endereco."', '".$numero."', '".$complemento."', '".$cep."', '".$municipio."', '".$uf."', '".$email."', '".$telefone."', '".$celular."', ".$cliente.", ".$fornecedor.", ".$funcionario.")";
            
            //echo $sql;
            
            if(mysqli_query($con, $sql)){
                $msg = "Gravado com sucesso!";
            } else {
                $msg = "Erro ao gravar!";
            }
            
            mysqli_close($con);
        ?>
        
        <script>
            alert('<?php echo $msg; ?>');
            //location.href="index.php";
        </script>
    </body>
</html>
