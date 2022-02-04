<?php
//Consulta no banco para trazer informações dos pacientes

    //CONEXAO
    include 'conexao.php';

    $nr_apac = $_REQUEST['nr_apac'];
    
$consulta_paci = "CONSULTA";

$result_paci  = oci_parse($conn_ora, $consulta_paci);

@oci_execute($result_paci); 

while($row_paci = oci_fetch_array($result_paci)){
        
    $user[] = array(
        'nome'	=> $row_paci['NOME'],
        'cpf' => $row_paci['CPF']
    );
}


echo(json_encode($user));

?>