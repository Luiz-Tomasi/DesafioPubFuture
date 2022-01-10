<?php
include("conexao.php");
$sql = "select * from despesa order by id;";
$result = $mysqli-> query($sql);


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
                    <a href="lista.php">
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
    <table class="ListarDespesa">
        <tr>
            <th>Id</th>
            <th>Valor</th>
            <th>DataPagamento</th>
            <th>DataPagamentoEsperado</th>
            <th>TipoDespesa</th>
            <th>conta</th>
            <th>Ações</th>
        </tr>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['valor']."</td>";
                    echo "<td>".$user_data['dataPagamento']."</td>";
                    echo "<td>".$user_data['dataPagamentoEsperado']."</td>";
                    echo "<td>".$user_data['tipoDespesa']."</td>";
                    echo "<td>".$user_data['conta']."</td>";
                    echo "<td> <a href='editDespesa.php?id=$user_data[id]'> <i class='far fa-edit'></i> </a>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>