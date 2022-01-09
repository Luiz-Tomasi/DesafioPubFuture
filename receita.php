<?php
    function insertReceita(){
        include('conexao.php');
        include_once('index.php');
        $valorR = $_POST['valorR'];
        $dateRR = $_POST['dateRR'];
        $dateRE = $_POST['dateRER'];
        $contaR = $_POST['contaR'];
        $tipoR = $_POST['tipoR'];
        $descricaoR = $_POST['descricaoR'];
        mysqli_query($mysqli, "INSERT INTO receita(valor, dataRecebimento , dataRecebimentoEsperado, descrição, tipoReceita, conta)
        VALUES ('$valorR', '$dateRR', '$dateRE', '$descricaoR', '$tipoR', '$contaR')");
    }
?>