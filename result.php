<!DOCTYPE html>
<html>
<head>
    <title>Risultato del Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
        // Verifica se il form è stato inviato
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recupera il paragrafo e la parola da censurare dal form
            $paragrafo = $_POST["paragrafo"];
            $parolaCensurare = $_POST["parola_censurare"];
            
            // Calcola la lunghezza del paragrafo
            $lunghezzaParagrafo = strlen($paragrafo);
            
            // Stampa del paragrafo e la sua lunghezza
            echo "<h2 class='mt-5'>Paragrafo originale:</h2>";
            echo "<p>$paragrafo</p>";
            echo "<p>Lunghezza del paragrafo: $lunghezzaParagrafo caratteri</p>";
            
            // Sostituzione della parola censurata con ***
            $paragrafoCensurato = str_replace($parolaCensurare, '***', $paragrafo);
            
            // Calcola la lunghezza del paragrafo censurato
            $lunghezzaParagrafoCensurato = strlen($paragrafoCensurato);
            
            // Stampa del paragrafo censurato e la sua lunghezza
            echo "<h2 class='mt-3'>Paragrafo censurato:</h2>";
            echo "<p>$paragrafoCensurato</p>";
            echo "<p>Lunghezza del paragrafo censurato: $lunghezzaParagrafoCensurato caratteri</p>";
        }
        ?>
    </div>
</body>
</html>