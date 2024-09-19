<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $media = $_POST['media'];
    $recuperacao = $_POST['recuperacao'];

    // Calcula a nova média
    $nova_media = ($media + $recuperacao) / 2;

    // Mensagem final
    if ($nova_media >= 7) {
        $resultado = "Aprovado";
    } else {
        $resultado = "Reprovado";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Resultado da Recuperação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Resultado da Recuperação</h1>
        <p><strong>Nova Média:</strong> <?php echo number_format($nova_media, 2); ?></p>
        <p><strong>Resultado:</strong> <?php echo $resultado; ?></p>
        <a href="formulario.php" class="btn btn-primary">Voltar</a>
    </div>
</body>
</html>
