<?php
    function insertDespesa(){
        include('conexao.php');
        include_once('index.php');
        $valorD = $_POST['valorD'];
        $dateRD = $_POST['dateRD'];
        $dateRED = $_POST['dateRED'];
        $contaD = $_POST['contaD'];
        $tipoD = $_POST['tipoD'];
        
        mysqli_query($mysqli, "INSERT INTO despesa(valor, dataPagamento, dataPagamentoEsperado, tipoDespesa, conta)
        VALUES ('$valorD', '$dateRD', '$dateRED', '$tipoD', '$contaD')");
    }
?>