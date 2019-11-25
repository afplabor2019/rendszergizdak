<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=SITE_NAME?></title>
    <link rel="stylesheet" href="<?=URL?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>/assets/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?=URL?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=URL?>/assets/css/dice.css">
    <link rel="stylesheet" href="<?=URL?>/assets/css/rock-paper.css">
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="<?=URL?>/">Főoldal</a></li>
            <li><a href="<?=URL?>/game">Játék</a></li>
            <li><a href="<?=URL?>/game/dice">Kocka</a></li>
            <li><a href="<?=URL?>/game/headortail">head or tail</a></li>
            <li><a href="<?=URL?>/game/rock_paper_scissors">rock_paper_scissors</a></li>
            <li><a href="<?=URL?>/game/roulett">roulett</a></li>
            <li><a href="<?=URL?>/game/slotgame">slotgame</a></li>
            <li><a href="<?=URL?>/register">reg</a></li>
            <li><a href="<?=URL?>/settings">settings</a></li>
            <li><a href="<?=URL?>/home/logout">kilépés</a></li>
        </ul>
    </nav>
    <?php if (empty($user['name'])): ?>
    <form action="home/login" method="POST">
        <input type="text" name="name">
        <input type="password" name="password">
        <button>Login</button>
    </form>
    <?php else: ?>
        <p>user: <?=$user['name']?></p>
        <p>balance: <?=$user['balance']?></p>
    <?php endif; ?>
</header>