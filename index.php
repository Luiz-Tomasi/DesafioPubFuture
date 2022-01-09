<?php
	include("conexao.php");
    if(isset($_POST['valorR'])){
		include_once('receita.php');
		insert($_POST);
	};
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!–- Charset e compatibilidade|escala -–>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!–- Links font-awesome e css -–>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Dashbord</title>
</head>
<body>

    <!–- Navigation -–>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <span class="fas fa-chart-pie"></span>
                        <span class="title"> DesafioPubFuture</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-chart-pie"></span>
                        <span class="title"> Cadastro</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-chart-pie"></span>
                        <span class="title"> Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-chart-pie"></span>
                        <span class="title"> Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-chart-pie"></span>
                        <span class="title"> Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-chart-pie"></span>
                        <span class="title"> Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!–- Navigation -–>

    <div class="container_2">
        <form class="index.php" method="post">
            <fieldset>
                <legend>Cadastro receitas</legend>
                
            <br>
            <div class="inputBox">
                <input type="number" name="valorR" id="valorR" class="inputR" required>
                <label for="valorR">Valor</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="date" name="dateRR" id="dateRR" class="inputR" required>
                <label for="dateRR">Data de recebimento</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="date" name="dateRER" id="dateRER" class="inputR" required>
                <label for="dateRER">Data de recebimento esperado</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="number" name="contaR" id="contaR" class="inputR" required>
                <label for="contaR">Conta</label>
            </div>
            <br>
            <h2>Tipo Receita</h2>
            <div class="inputBox">
                <input type="radio" name="tipoR" id="tipoR1" value="salário" class="inputRadioR" required>
                <label for="tipoR">Salário</label>
            </div>
            <div class="inputBox">
                <input type="radio" name="tipoR" id="tipoR2" value="presente" class="inputRadioR" required>
                <label for="tipoR">Presente</label>
            </div>
            <div class="inputBox">
                <input type="radio" name="tipoR" id="tipoR3" value="prêmio" class="inputRadioR" required>
                <label for="tipoR">Prêmio</label>
            </div>
            <div class="inputBox">
                <input type="radio" name="tipoR" id="tipoR4" value="outros" class="inputRadioR" required>
                <label for="tipoR">Outros</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="descricaoR" id="descricaoR" class="inputR" maxlength="250" required>
                <label for="descricaoR">Descrição</label>
            </div>
            <br>
            <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

</body>
</html>