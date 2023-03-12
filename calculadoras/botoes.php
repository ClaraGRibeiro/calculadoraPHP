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
    <title>Calculadora | Botões</title>
</head>
<body>
    <header>
        <h1>Calculadora</h1>
        <h3>Botões</h3>
    </header>
    <form action="botoes.php" method="POST">
        <table style='margin:0 auto;' cellpadding=10>
            <tr>
                <td>
                    <input type="number" id="numero 1" name="n" value="0">
                </td>
                <td>
                    <button id="soma" name="+"><i class="fa-solid fa-plus"></i></button><br>
                    <button id="subt" name="-"><i class="fa-solid fa-minus"></i></button><br>
                    <button id="mult" name="x"><i class="fa-solid fa-xmark"></i></button><br>
                    <button id="div" name="/"><i class="fa-solid fa-divide"></i></button>
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
    if(isset($_POST['n']) && isset($_POST['n2']) && isset($_POST['+'])){
        $soma = $_POST['n'] + $_POST['n2'];
        echo " $soma</p>";
    }
    if(isset($_POST['n']) && isset($_POST['n2']) && isset($_POST['-'])){
        $subt = $_POST['n'] - $_POST['n2'];
        echo " $subt</p>";
    }
    if(isset($_POST['n']) && isset($_POST['n2']) && isset($_POST['x'])){
        $mult = $_POST['n'] * $_POST['n2'];
        echo " $mult</p>";
    }
    if(isset($_POST['n']) && isset($_POST['n2']) && isset($_POST['/'])){
        if($_POST['n2']==0){echo "Impossível dividir qualquer valor por 0.</p>";}
        else{
            $div = $_POST['n'] / $_POST['n2'];
            echo " $div</p>";
        }
    } else{
        ?>
            <p>Insira os valores.</p>
        <?php
        }
    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>