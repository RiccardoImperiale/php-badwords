<?php
$paragraph = $_GET['paragraph'];
$wordToBeCensored = $_GET['word'];
$censoredParagraph = str_replace($wordToBeCensored, "***", $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h5>The paragraph contains <span class="text-primary"><?= strlen($paragraph) ?></span> characters</h5>
        <p class="fst-italic"><?= $paragraph ?></p>
        <h5 class="pt-3">Paragraph without the word <span class="text-danger">"<?= $wordToBeCensored ?>"</span>:</h5>
        <p class="fst-italic"><?= $censoredParagraph ?></p>
        <h5>The paragraph it's now <span class="text-primary"><?= strlen($censoredParagraph) ?></span> characters long</h5>
    </div>

</body>

</html>