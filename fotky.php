<!DOCTYPE html>
<html lang ="cs">
    <head>
        <link rel="stylesheet" href=".css/styles.css">
        <meta charset="UTF - 8">
        <title>The Velka Uzasna Stranka Pavla Bartose</title>


    </head>

    <body class="duha" style="text-align:center;">
        <div class="uprostred">
            <div class="foteckos">
                <a href="index.php">Zpět</a>
            </div>
        </div>

        <?php 
        $obrazky = glob('obrazky' . '/*');

        foreach ($obrazky as $obrazek) {
            echo '<br>';
            echo '<img src="'. $obrazek .'">';
            echo '<p>všechna práva vyhrazena Pavel Bartoš ® ™ ©</p>';
        }
        ?>
    </body>
</html>