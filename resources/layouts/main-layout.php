<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite('resources/css/app.css') ?>
    <?= vite('resources/js/app.js') ?>
    <title><?= e(app_name()) ?></title>
</head>

<body>
    <header>
        <x-navbar />
    </header>
    <main>
        <?= $slot ?>
    </main>
</body>

</html>