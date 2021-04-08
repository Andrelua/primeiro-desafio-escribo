<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <div>
        <form action="index.php" method="post">
            <input type="number" name="valor" id="valor">
            <button name="btn_calc" type="submit">Calcular</button>
        </form>
    </div>
    <div>
        <?php
            require_once 'calc.php';
            if (isset($_POST['btn_calc'])) {
                $valor = $_POST['valor'];
                if ($valor == null) { // Verificando se o valor é igual a null.
                    echo "Error - O input está vazio."; 
                } else {
                    Calculadora::somarInferior($valor);
                }
                
            }
        ?>
    </div>
</body>
</html>

