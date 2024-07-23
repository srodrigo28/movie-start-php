<?php
    require_once("./globals.php");
    require_once("./db.php");
    require_once("./models/Message.php");

    $message = new Message($BASE_URL);

    $flassMessage = $message->getMessage();

    if(!empty($flassMessage["msg"])){
        $message->clearMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieStar2</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="<?= $BASE_URL ?>" class="navbar-brand">
                <img src="<?= $BASE_URL ?>img/star.png" alt="star" width="100px">
                <span id="moviestar-title">MovieStar</span>
            </a>
            <!-- <button 
                type="hidden" 
                class="navbar-toggle" 
                data-toggle="collapse" 
                data-target="#navbar" 
                aria-controls="navbar"
                aria-expanded="false" 
                ariea-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button> -->
            <!-- form#search-form.form-inline.my-2.my-lg-0 -->
            <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
                <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="buscar" aria-label="search">
                <button class="btn my-2 my-sm-0" type="submit"> 
                    <i class="fa fa-search"> </i> 
                </button>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href=" <?= $BASE_URL ?>auth.php">Entrar / Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<?php if(!empty($flassMessage["msg"])): ?>
    <div class="msg-container">
        <p class="msg <?= $flassMessage["type"] ?>"> <?= $flassMessage["msg"] ?></p>
    </div>
<?php endif; ?>

