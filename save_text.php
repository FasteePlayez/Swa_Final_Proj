<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získání dat z formuláře
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userText = $_POST['userText'];

    // Cesta k souboru, do kterého chceme data uložit
    $filePath = 'user_data.txt';

    // Otevření souboru pro zápis (přidávání na konec souboru)
    $fileHandle = fopen($filePath, 'a');

    if ($fileHandle) {
        // Přidání časové značky před text
        $timeStamp = date('Y-m-d H:i:s');
        $formattedData = "Čas: " . $timeStamp . "\nJméno: " . $userName . "\nE-mail: " . $userEmail . "\nText: " . $userText . "\n\n";

        // Zápis dat do souboru
        fwrite($fileHandle, $formattedData);

        // Uzavření souboru
        fclose($fileHandle);

        // Informování uživatele o úspěchu
        echo "Zpráva byla úspěšně zaznaménana.";
    } else {
        // Informování uživatele o neúspěchu
        echo "Chyba při otevírání souboru.";
    }
} else {
    // Pokud není metoda POST, přesměrování zpět na formulář
    header("Location: form.html");
    exit();
}
?>
