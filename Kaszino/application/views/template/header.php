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
            <li><a href="<?=URL?>/">Home</a></li>
            <?php if (!empty($user['id'])): ?>
                <li><a href="<?=URL?>/game">Games</a></li>
                <li><a href="<?=URL?>/game/dice">Dice</a></li>
                <li><a href="<?=URL?>/game/headortail">Head or Tail</a></li>
                <li><a href="<?=URL?>/game/rock_paper_scissors">Rock,Paper,Scissors</a></li>
                <li><a href="<?=URL?>/game/roulett">Roulett</a></li>
                <li><a href="<?=URL?>/game/slotgame">Slotgame</a></li>
                <li><a href="<?=URL?>/settings">Settings</a></li>
                <li><a href="<?=URL?>/home/logout">Logout</a></li>
            <?php else: ?>
                <li><a href="<?=URL?>/register">Register</a></li>
            <?php endif; ?>
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