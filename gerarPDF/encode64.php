<?php

    session_start();

    //CONEXAO
    include 'conexao.php';

    ///////////////
    //PDF DOWLOAD//
    ///////////////
    $cons_dowload="SELECT *
    FROM sua_table";

    $result_dowload = oci_parse($conn_ora, $cons_dowload);
    @oci_execute($result_dowload);
    $result= oci_fetch_array($result_dowload);
    $image =$result['CAMPO_BLOB']->load();
?>

<object data="data:application/pdf;base64,<?php echo base64_encode($image) ?>" type="application/pdf" style="height:100%;width:100%"></object>

