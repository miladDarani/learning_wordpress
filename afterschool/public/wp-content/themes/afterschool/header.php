<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>After School</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <link type="text/css" rel="stylesheet" href="style.css" />
<?php wp_head(); ?>
</head>
<body class="page-template-default">
    <div class="container">

        <header class="main col-xs-12">

            <span class="site_title">After School</span>

            <nav id="util">
                <ul class="menu">
                    <?php wp_nav_menu(['menu' => 'top_menu']); ?>
                </ul>
            </nav>

            <a class="menu_toggle" href="#">Menu</a>

        </header>



        <nav id="main" class="col-xs-12">

            <ul class="menu">
                <?php wp_nav_menu() ?>
            </ul>

        </nav>