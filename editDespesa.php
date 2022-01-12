<?php
    if(!empty($_GET['id'])){
        include('conexao.php');

        $id = $_GET['id'];
        $sqlSelect ="SELECT * FROM despesa where id=$id";
        $result = $mysqli->query($sqlSelect);
        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
            $valorD = $user_data['valor'];
            $dateRD = $user_data['dataPagamento'];
            $dateRED = $user_data['dataPagamentoEsperado'];
            $contaD = $user_data['conta'];
            $tipoDE = $user_data['tipoDespesa'];
            }
        }
    }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!–- Links font-awesome e css -–>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Lista</title>
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
                    <a href="index.php">
                        <span class="fas fa-chart-pie"></span>
                        <span class="title"> Cadastro</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-chart-pie"></span>
                        <span class="title"> Lista</span>
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
<div class="cadastroDespesa">
        <form class="index.php" method="post">
            <fieldset>
                <legend>Cadastro despesas</legend>
            <br>
            <div class="inputBox">
                <input type="number" name="valorD" id="valorD" class="inputD" placeholder="Valor"
                value="<?php echo $valorD ?>" required>
            </div>
            <br>
            <div class="inputBox">
                <input type="date" name="dateRD" id="dateRD" class="inputD" value="<?php echo $dateRD ?>" required>
                <label for="dateRD">Data de recebimento</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="date" name="dateRED" id="dateRED" class="inputD" value="<?php echo $dateRED ?>" required>
                <label for="dateRED">Data de recebimento esperado</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="number" name="contaD" id="contaD" class="inputD" placeholder="Conta" value="<?php echo $contaD ?>" required>
            </div>
            <br>
            <h2>Tipo Despesa</h2>
            <div class="inputBox">
                <input type="radio" name="tipoD" id="tipoD1" value="alimentação" class="inputRadioD" <?php echo ($tipoDE == 'tipoD1') ? 'checked' : "" ?> required>
                <label for="tipoD">Alimentação</label>
            </div>
            <div class="inputBox">
                <input type="radio" name="tipoD" id="tipoD2" value="educação" class="inputRadioD" <?php echo ($tipoDE == 'tipoD2') ? 'checked' : '' ?> required>
                <label for="tipoD">Educação</label>
            </div>
            <div class="inputBox">
                <input type="radio" name="tipoD" id="tipoD3" value="lazer" class="inputRadioD" <?php echo ($tipoDE == 'tipoD3') ? 'checked' : '' ?> required>
                <label for="tipoD">Lazer</label>
            </div>
			<div class="inputBox">
                <input type="radio" name="tipoD" id="tipoD4" value="moradia" class="inputRadioD" <?php echo ($tipoDE == 'tipoD4') ? 'checked' : '' ?> required>
                <label for="tipoD">Moradia</label>
            </div>
			<div class="inputBox">
                <input type="radio" name="tipoD" id="tipoD5" value="roupa" class="inputRadioD" <?php echo ($tipoDE == 'tipoD5') ? 'checked' : '' ?> required>
                <label for="tipoD">Roupa</label>
            </div>
			<div class="inputBox">
                <input type="radio" name="tipoD" id="tipoD6" value="saúde" class="inputRadioD" <?php echo ($tipoDE == 'tipoD6') ? 'checked' : '' ?> required>
                <label for="tipoD">Saúde</label>
            </div>
			<div class="inputBox">
                <input type="radio" name="tipoD" id="tipoD7" value="transporte" class="inputRadioD" <?php echo ($tipoDE == 'tipoD7') ? 'checked' : '' ?> required>
                <label for="tipoD">Transporte</label>
            </div>
            <div class="inputBox">
                <input type="radio" name="tipoD" id="tipoD8" value="outros" class="inputRadioD" <?php echo ($tipoDE == 'tipoD8') ? 'checked' : '' ?> required>
                <label for="tipoD">Outros</label>
            </div>
            <br>
            <input type="submit" name="submit" id="submit" class="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>