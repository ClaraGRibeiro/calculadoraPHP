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
    <title>Calculadora | Checkbox</title>
</head>
<body>
    <header>
        <h1>Calculadora</h1>
        <h3>Checkbox</h3>
    </header>
    
<form action="checkbox.php" method="POST">
<table style='margin:0 auto;' cellpadding=10>
            <tr>
                <td>
                    <input type="number" id="numero 1" name="n" value="0">
                </td>
                <td>
                <input type="checkbox" id="soma" name="+">
                <label for="soma"><i class="fa-solid fa-plus"></i></label><br>
                <input type="checkbox" id="subt" name="-">
                <label for="subt"><i class="fa-solid fa-minus"></i></label><br>
                <input type="checkbox" id="mult" name="*">
                <label for="mult"><i class="fa-solid fa-xmark"></i></label><br>
                <input type="checkbox" id="div" name="/">
                <label for="div"><i class="fa-solid fa-divide"></i></label><br>
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
        echo $_POST['n']." <i class='fa-solid fa-plus'></i> ".$_POST['n2']." = $soma</p>";
    }
    if(isset($_POST['n']) && isset($_POST['n2']) && isset($_POST['-'])){
        $subt = $_POST['n'] - $_POST['n2'];
        echo $_POST['n']." <i class='fa-solid fa-minus'></i> ".$_POST['n2']." = $subt</p>";
    }
    if(isset($_POST['n']) && isset($_POST['n2']) && isset($_POST['*'])){
        $mult = $_POST['n'] * $_POST['n2'];
        echo $_POST['n']." <i class='fa-solid fa-xmark'></i> ".$_POST['n2']." = $mult</p>";
    }
    if(isset($_POST['n']) && isset($_POST['n2']) && isset($_POST['/'])){
        if($_POST['n2']==0){echo "Impossível dividir qualquer valor por 0.</p>";}
        else{
            $div = $_POST['n'] / $_POST['n2'];
            echo $_POST['n']." <i class='fa-solid fa-divide'></i> ".$_POST['n2']." = $div</p>";
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