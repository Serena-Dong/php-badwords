<?php
// Recupero dei ELEMENTI dal FORM
$badword = $_GET['badword'];
$paragraph = $_GET['paragraph'];

// CENSURA della parola
$censored_paragraph = str_replace($badword, '***', $paragraph);

// Calcolo della LUNGHEZZA del PARAGRAFO
$paragraph_lenght = strlen($paragraph);
$censored_paragraph_lenght = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">

    <h2>Paragrafo Originale</h2>
    <p> <?= $paragraph ?> </p>
    <p>Lunghezza caratteri: <b><?= $paragraph_lenght ?></b></p>

    <h2>Paragrafo Censurato</h2>
    <p> <?= $censored_paragraph ?> </p>
    <p>Lunghezza caratteri: <b><?= $censored_paragraph_lenght ?></b></p>

    </div>
</body>
</html>
