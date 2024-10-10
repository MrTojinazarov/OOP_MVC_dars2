<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <ul>
            <li><a href="/">Bosh sahifa</a></li>
            <li><a href="/about">about sahifa</a></li>
        </ul>

        <?= $content ?>

        <h1>Footer</h1>

        <footer>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, consectetur voluptatem. Esse quidem vel blanditiis quisquam. Vel perspiciatis animi pariatur autem atque sint rerum quasi, quos obcaecati quod nam fugit!</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>