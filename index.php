<!DOCTYPE html>
<html>
<head>
    <title>Form di Censura</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Form di Censura</h1>
        <!-- Form in cui scrivere il paragrafo -->
        <form action="result.php" method="post" class="mt-3">
            <div class="mb-3">
                <label for="paragrafo" class="form-label">Inserisci un paragrafo:</label>
                <textarea name="paragrafo" id="paragrafo" rows="5" class="form-control" required></textarea>
            </div>
            <!-- Parte in cui si specifica la parola da censurare -->
            <div class="mb-3">
                <label for="parola_censurare" class="form-label">Parola da censurare:</label>
                <input type="text" name="parola_censurare" id="parola_censurare" class="form-control" required>
            </div>
            <!-- Bottone che invia la richiesta -->
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
</body>
</html>



