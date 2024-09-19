<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bimestre1 = $_POST['bimestre1'];
    $bimestre2 = $_POST['bimestre2'];
    $bimestre3 = $_POST['bimestre3'];
    $bimestre4 = $_POST['bimestre4'];

    // Calcula a média
    $media = ($bimestre1 + $bimestre2 + $bimestre3 + $bimestre4) / 4;

    // Determina o conceito e a mensagem
    if ($media >= 9) {
        $conceito = "A";
        $mensagem = "Aprovado com Louvor";
    } elseif ($media >= 7) {
        $conceito = "B";
        $mensagem = "Aluno Aprovado";
    } elseif ($media >= 4) {
        $conceito = "C";
        $mensagem = "Recuperação, sua chance de passar";
    } else {
        $conceito = "D";
        $mensagem = "Poxa vida, vamos tentar novamente ano que vem";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Resultado</h1>
        <p><strong>Média:</strong> <?php echo number_format($media, 2); ?></p>
        <p><strong>Conceito:</strong> <?php echo $conceito; ?></p>
        <p><strong>Mensagem:</strong> <?php echo $mensagem; ?></p>

        <?php if ($conceito === "C"): ?>
            <h2>Recuperação</h2>
            <form action="recuperacao.php" method="post">
                <input type="hidden" name="media" value="<?php echo $media; ?>">
                <div class="form-group">
                    <label for="recuperacao">Nota da Recuperação:</label>
                    <input type="number" class="form-control" id="recuperacao" name="recuperacao" step="0.1" required>
                </div>
                <button type="submit" class="btn btn-primary">Verificar Resultado da Recuperação</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
