<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Formulário de Notas</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Calculadora de Media</h1>
        <form action="resultado.php" method="post">
            
            <h2>Notas dos Bimestres</h2>
            <div class="form-group">
                <label for="bimestre1">1º Bimestre:</label>
                <input type="number" class="form-control" id="bimestre1" name="bimestre1" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="bimestre2">2º Bimestre:</label>
                <input type="number" class="form-control" id="bimestre2" name="bimestre2" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="bimestre3">3º Bimestre:</label>
                <input type="number" class="form-control" id="bimestre3" name="bimestre3" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="bimestre4">4º Bimestre:</label>
                <input type="number" class="form-control" id="bimestre4" name="bimestre4" step="0.1" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>
