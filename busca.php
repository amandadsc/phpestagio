<?php
    $valor = $_POST["valor"];
    
    if($valor != ""){
        include_once 'conexao.php';
        
        $sql = "SELECT * FROM pessoas WHERE (nome LIKE '".$valor."%') OR (tipo_de_pessoa LIKE '".$valor."') OR (nome_fantasia LIKE '".$valor."%') OR (cpf = '".$valor."') OR (cnpj = '".$valor."')";
        //$sql = "SELECT * FROM pessoas WHERE ".$valor." = true";
        
        $result = mysqli_query($con,$sql);
        
        if(mysqli_num_rows($result) > 0) {
            ?>
            <table style="font-size: 10px;">
                <tr>
                    <th>Tipo de Pessoa</th>
                    <th>Nome</th>
                    <th>Nome Fantasia</th>
                    <th>CPF</th>
                    <th>CNPJ</th>
                    <th>Razão Social</th>
                    <th>Endereço</th>
                    <th>Número</th>
                    <th>Complemento</th>
                    <th>CEP</th>
                    <th>Município</th>
                    <th>UF</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Cliente</th>
                    <th>Fornecedor</th>
                    <th>Funcionário</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                        //var_dump($row);
                ?>
                <tr>
                    <td><?php echo $row["tipo_de_pessoa"];?></td>
                    <td><?php echo $row["nome"];?></td>
                    <td><?php echo $row["nome_fantasia"];?></td>
                    <td><?php echo $row["cpf"];?></td>
                    <td><?php echo $row["cnpj"];?></td>
                    <td><?php echo $row["razao_social"];?></td>
                    <td><?php echo $row["endereco"];?></td>
                    <td><?php echo $row["numero"];?></td>
                    <td><?php echo $row["complemento"];?></td>
                    <td><?php echo $row["cep"];?></td>
                    <td><?php echo $row["municipio"];?></td>
                    <td><?php echo $row["uf"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["telefone"];?></td>
                    <td><?php echo $row["celular"];?></td>
                    <td><?php echo $row["cliente"];?></td>
                    <td><?php echo $row["fornecedor"];?></td>
                    <td><?php echo $row["funcionario"];?></td>
                    <td><a href="editar-pessoa.php?cod=<?php echo $row["cod"];?>"><i class="material-icons small">edit</i></a></td>
                    <td><a href="#" onclick="confirmaExclusao('<?php echo $row["cod"];?>')"><i class="material-icons small red-text">delete</i></a></td>
                </tr>
                <?php    } ?>
    
            </table>
<?php
        }else {
            echo "Nenhuma pessoa encontrada!";
        }
    }
?>
