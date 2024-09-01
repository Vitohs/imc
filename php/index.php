<?php
// echo("oiiiiiiiiii");
$peso = $_GET["peso"];
$altura = $_GET["altura"];
$imc = $peso / ($altura * $altura);
$imc_formatado = number_format($imc, 2);

// print_r($imc);
if ($imc >= 30) {
    $resposta = "Obesidade";
} elseif ($imc >= 25) {
    $resposta = "Sobrepeso";
} elseif ($imc >= 18.5) {
    $resposta = "Peso normal";
} else {
    $resposta = "Abaixo do peso";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <?php include 'estilo.php'; ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Helvetica">
</head>
<body>
    <img class="theme" id="tema" src="pic/black.png" onclick="teste()">
    <div class="saida">
        <!-- ae ninjadosani para tu nao esquecer,aqui vai ser um bloquinhos, exibo o imc em verde se for bom, amarelo e vermelho
        acho daora colocar o peso e altura junto, talvez -->
        <!-- ninja: kk -->
        <legend class="cabeca">
            <h1 class="aii">
                Veja o relatorio 
            </h1>
        </legend>
        <p class="luciano" >
        <?php
            echo("oii, venha conferir o relatorio do seu imc, o estado do seu corpo é: " . $resposta);
        ?>
        </p>
        <div class="roda">
           <p id="imczada">
                <?php
                    echo($imc_formatado)
                ?>
           </p>
        </div>
    </div>
</body>
</html>