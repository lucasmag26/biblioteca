<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        include "cabecalho.php";
        include 'conexao.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="div_br"> 
        <form class="form-inline" style= "margin-bottom: -20px; margin-left: 75%">
            <input class="form-control mr-sm-1" type="search" placeholder="Número APAC" id="nr_apac" name="nr_apac" aria-label="Search" >
        </form>
        <button  class="btn my-1 my-sm-0 bg-primary" id="id_teste"><i class="fas fa-search" style="color: white;"></i></button>
    </div>
    <div class="row justify-content-md-center" id="result_user" style="padding: 3px 1em 0 1em; border-radius: 3px !important;">
    </div>



    <!--TESTE CHAMAR DIV JAVASCRIPT-->

    <div id= "novaLINHA" class="row justify-content-md-center" style="padding: 3px 1em 0 1em; border-radius: 3px !important;">

    </div>

    <!--FIM TESTE CHAMA DIV JAVASCRIPT-->

    
</body>
</html>
<?php

    include "rodape.php";

?>

<!--SISTEMA DE REQUISIÇÃO AJAX-->

<script>
    $('#id_teste').click(function(){

        //alert('teste');

        //COLETANDO VALOR DO CAMPO DE PESQUISA
        var valor_nr_apac = document.getElementById('nr_apac').value

        //LIMPANDO DIV novaDIV caso exista
        $('#novaDIV'). remove();        

        //CRIADNO DA DIV
        const para = document.createElement("div");
        para.id = 'novaDIV';


        //PASSANDO VALOR DO CAMPO PESQUISA E EXECUTANDO AJAX
        $.getJSON('call_user_apac.php?search=',{nr_apac: valor_nr_apac, ajax: 'true'}, function(j){

            for (var i = 0; i < j.length; i++) {
                
                //INCLUINDO RESULTADOS ENCONTRADOS
                para.innerHTML += "<br> CÓDIGO: " + j[i].cd_paciente + " | NOME: " + j[i].nm_user;
            }	

        });

        //ADICIONANDO A NOVA DIV DENTRO DA novaLINHA
        document.getElementById("novaLINHA").appendChild(para);

    });
    

</script>