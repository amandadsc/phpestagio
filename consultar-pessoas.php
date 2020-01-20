<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta de Pessoas</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
    <script>
        function confirmaExclusao(cod){
            if(confirm('Deseja realmente excluir esta pessoa?')){
                location.href="excluir-pessoa.php?cod="+cod;
            }
        }
    </script>
    <body>
        <div style="margin: 0 auto; max-width: 1500px; width: 95%;">
            <h3>Consulta de Pessoas</h3>
            
            <form autocomplete="off">
                <input type="text" id ="busca" placeholder="Digite para pesquisar por tipo de pessoa (fisica ou juridica), nome, cpf ou cnpj">
            </form>
            
            <div id="conteudo">

            </div>
            <br>
            <a href="index.php" class="btn"><i class="material-icons">arrow_back</i></a>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script>
            $(document).ready(function(){

                $("#busca").keyup(function(){
                   var valordigitado = $("#busca").val();
                   //alert(valordigitado);
                   
                   $.post("busca.php",
                        {valor: valordigitado},
                        function(resposta){
                            $("#conteudo").html(resposta);
                    });
                });  
            });
        </script>
    </body>
</html>
