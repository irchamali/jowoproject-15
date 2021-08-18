<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Silver Blog | About</title>
</head>
<body>
    <h1>Halaman About</h1>
    <p><a href="/">Home</a></p>
    <p><a href="/posts">Post</a></p><br>

    <h2><?= $name; ?></h2>
    <p><a href="mailto:<?= $email; ?>"><?= $email; ?></a></p>
    <img src="img/<?= $image; ?>" alt="<?= $name; ?>" width="100">
</body>
</html>