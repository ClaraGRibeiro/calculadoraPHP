<?php
include_once '../template/footer.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://kit.fontawesome.com/cc9f72a45c.js" crossorigin="anonymous"></script>
    <title>Calculadora | Opções</title>
</head>
<body>
    <header>
        <h1>Calculadora</h1>
        <h3>Opções</h3>
    </header>
    <form action="opcoes.php" method="POST">
    <table style='margin:0 auto;' cellpadding=10>
            <tr>
                <td>
                    <input type="number" id="numero 1" name="n" value="0">
                </td>
                <td>
                    <select name="operacao" id="operacao">
                        <option value="soma">+</option>
                        <option value="subt">-</option>
                        <option value="mult">×</option>
                        <option value="div">÷</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="numero 2" name="n2" value="0">
                </td>
                <td>
                    <p>=</p>
                </td>
                <td>
                    <p>

    <?php
    if(!isset($_POST['n'])){$_POST['n']=0;}
    if(!isset($_POST['n2'])){$_POST['n2']=0;}
    if (isset($_POST['n']) && isset($_POST['n2']) && isset($_POST['operacao'])) {
        if ($_POST['operacao'] == 'soma') {
            $soma = $_POST['n'] + $_POST['n2'];
            echo " $soma</p>";
        }
        if ($_POST['operacao'] == 'subt') {
            $subt = $_POST['n'] - $_POST['n2'];
            echo " $subt</p>";
        }
        if ($_POST['operacao'] == 'mult') {
            $mult = $_POST['n'] * $_POST['n2'];
            echo " $mult</p>";
        }
        if ($_POST['operacao'] == 'div') {
            if($_POST['n2']==0){echo "Impossível dividir qualquer valor por 0.</p>";}
            else{
                $div = $_POST['n'] / $_POST['n2'];
                echo " $div</p>";
            }
        }
    } else{
    ?>
        <p>Insira os valores.</p>
    <?php
    }
        ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" style='text-align: right;'><button type="submit">Calcular</button></td>
            </tr>
    </form>

</body>
</html>