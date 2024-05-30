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

        <br>
        <br>
        <br>

        <div class="hedr">
            <p>co všechno je Pavel Bartoš?</p>
        </div>

        <br>

        <div class="uspech">
            <p>Top 100 hráč hry Hearthstone v České republice</p>
            <hr>
            <p>Hrdý žák Olomoucké</p>
            <hr>
            <p>Milující otec a syn</p>
            <hr>
            <p>profesionální muzikant</p>

        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <p>Pogratulujte skvělému tvůrci téhle stránky k jeho úspěchům!</p>

        <form action="save_text.php" method="post">
            <label for="userName">Jméno:</label><br>
            <input type="text" id="userName" name="userName" required><br><br>

            <label for="userEmail">E-mail:</label><br>
            <input type="email" id="userEmail" name="userEmail" required><br><br>

            <label for="userText">Zde zadejte svůj text a vaše poznámky a připomínky pro nás:</label><br>
            <textarea id="userText" name="userText" rows="10" cols="30" required></textarea><br><br>

            <input type="submit" value="Odeslat">
        </form>

    </body>
</html>
