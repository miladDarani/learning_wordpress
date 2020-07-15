<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>After School</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <link type="text/css" rel="stylesheet" href="style.css" />
<?php wp_head(); ?>
</head>
<body >


        <!--Navbar-->
<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark primary-color ">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="/">Space Debris</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto " id="main-ul">
      <?php wp_nav_menu(['menu' => 'main_menu','add_li_class'  => 'nav-item']); ?>

      

     

    </ul>
    <!-- Links -->

  </div>
  <!-- Collapsible content -->

</nav>