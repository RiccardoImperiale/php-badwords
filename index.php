<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="./script.php" method="get" class="container w-50 mt-5">
        <div class="mb-3">
            <label for="paragraph" class="form-label">Paragraph:</label>
            <textarea name="paragraph" id="paragraph" class="form-control" rows="5" placeholder="Write a sentence..."></textarea>
        </div>
        <div class="mb-3">
            <label for="word" class="form-label">Word to be censored:</label>
            <input name="word" type="text" class="form-control" id="word" placeholder="Type the word you want to censor...">
        </div>
        <button type="submit" class="btn btn-primary">Censor</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>