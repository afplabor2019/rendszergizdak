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
    <link rel="stylesheet" href="<?=URL?>/assets/css/form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?=URL?>/">Home</a></li>
                <?php if (!empty($user['id'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Games
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?=URL?>/game/dice">Dice</a>
                            <a class="dropdown-item" href="<?=URL?>/game/headortail">Head or Tail</a>
                            <a class="dropdown-item" href="<?=URL?>/game/rock_paper_scissors">Rock,Paper,Scissors</a>
                            <a class="dropdown-item" href="<?=URL?>/game/roulett">Roulett</a>
                            <a class="dropdown-item" href="<?=URL?>/game/slotgame">Slotgame</a>
                        </div>
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="<?=URL?>/settings">Settings</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=URL?>/home/logout">Logout</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="<?=URL?>/register">Register</a></li>
                <?php endif; ?>
            </ul>
        </div>
    
        <?php if (empty($user['name'])): ?>
        <form action="home/login" method="POST" class="form-inline">
            <div class="input-group">
                <input class="form-control" placeholder="Username" type="text" name="name">
                <input class="form-control" placeholder="Password" type="password" name="password">
            </div>
            <button>Login</button>
        </form>
        <?php else: ?>
            
            <span class="navbar-text">User: <?=$user['name']?> Balance: <?=$user['balance']?></span>
        <?php endif; ?>
    </nav>
</header>