<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $cod = $_POST["cod"];
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
            
            $sql = "UPDATE pessoas SET tipo_de_pessoa = '".$tipo_pessoa."', nome = '".$nome."', nome_fantasia = '".$nome_fantasia."', cpf = '".$cpf."', cnpj = '".$cnpj."', razao_social = '".$razao_social."', endereco = '".$endereco."', numero =  '".$numero."', complemento = '".$complemento."', cep = '".$cep."', municipio = '".$municipio."', uf = '".$uf."', email = '".$email."', telefone = '".$telefone."', celular = '".$celular."', cliente = ".$cliente.", fornecedor = ".$fornecedor.", funcionario = ".$funcionario." WHERE cod = ".$cod;
            
            //echo $sql;
            
            if(mysqli_query($con, $sql)){
                $msg = "Dados atualizados com sucesso!";
            } else {
                $msg = "Erro ao atualizar!";
            }
            
            mysqli_close($con);
        ?>
        
        <script>
            alert('<?php echo $msg;?>');
            location.href="index.php";
        </script>
    </body>
</html>
