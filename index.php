<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MegaSena</title>
    <link rel="stylesheet" href="megasena.css" type="text/css" />
</head>
<body>
    <?php
        $contador = isset($_GET['temp']) ? $_GET["temp"] : 0;

    ?>
        <img class="imagem" src="img/mega.jpeg">
    
    <div class="wrapper">
        <!-- <h1>BORA GANHAR ?!!!</h1> -->    <!---Title----->

        <!------Box dos Numeros----->
        <div class="boxemain" alt="">
        
            <div class="box" id="box1">
                <?php echo $contador == 0 ? "?" : rand(1, 60)?>
            </div>
            <div class="box" id="box2">
                <?php echo $contador == 0 ? "?" : rand(1, 60)?>
            </div>
            <div class="box" id="box3">
                <?php echo $contador == 0 ? "?" : rand(1, 60)?>
            </div>
            <div class="box" id="box4">
                <?php echo $contador == 0 ? "?" : rand(1, 60)?>
            </div>
            <div class="box" id="box5">
                <?php echo $contador == 0 ? "?" : rand(1, 60)?>
            </div>
            <div class="box" id="box6">
                <?php echo $contador == 0 ? "?" : rand(1, 60)?>
            </div>
        </div>
        
        <form action="?temp=1" method="post">

            <div class="encerramento">
                <button>Estou com Sorte</button>
            </div>

        </form>
    </div>
</body>