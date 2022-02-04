<?php header('Content-Type: text/html; iso-8859-1');?>
<?php

//fim da conexão com o banco de dados
$palavra = $_POST['palavra'];

?>
<section class="panel col-lg-9">
    <header class="panel-heading">
        Dados da busca:
    </header>
    <?php
    if($qtd>0){
    ?>
    <table class="table table-striped table-advance table-hover">
        <tbody>
            <tr>
                <th><i class="icon_profile"></i> Id</th>
                <th><i class="icon_profile"></i> Nome</th>
                <th><i class="icon_mail_alt"></i> E-mail</th>
            </tr>
            <?php 
            while($linha = mysql_fetch_assoc($query)){
            ?>
            <tr>
                <td><?=$linha['id'];?></td>
                <td><?=$linha['nome'];?></td>
                <td><?=$linha['email'];?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php }else{?>
    <?php }?>
</section>