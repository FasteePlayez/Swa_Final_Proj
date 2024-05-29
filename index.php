<!DOCTYPE html>
    <html lang ="cs">
        <head>
            <link rel="stylesheet" href=".css/styles.css">
            <meta charset="UTF - 8">
            <title>The Velka Uzasna Stranka Pavla Bartose</title>


        </head>

        <body class="duha">
            <div class="head">
                <?php include 'templates/header.php';?>
            </div>

            <?php include '.php/mezery.php';?>

            <div class="skrolovak">

                <h1>Obsahuje: <div class="roller">
                    <span id="rolltext"><a href="zivotopis.php">Životopis</a><br/>
                    <a href="uspechy.php">Úspěchy</a><br/>
                    <a href="fotky.php">Fotky</a><br/>
                    <span id="spare-time"><a href="bolest.php">Bolest</a> </span><br/>
                </div>
                </h1>

            </div>

            <ul style="width:95%;list-style-type:none;" id="fotky">
                <li style="float:left"><img class="bordr" src="../paulielajk.webp" style="width:350px"></li>
                <li style="float:right"><img class="bordr" src="../paulielajk.webp" style="width:350px;-webkit-transform: scaleX(-1);transform: scaleX(-1);"></li>
            <ul>
                




            <div class="foot">
                <?php include 'templates/footer.php';?>
            </div>

            <body window.onload="redirekt()">


        </body>



    </html>