<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo("name")  ?></title>
  </head>
  <body>
    <header>
      <div class="wrapper">
      <h1 class="name"> <a href="<?php echo site_url()  ?> "><?php bloginfo("name");?> </h1></a>
      <h3 class='des'>  <?php bloginfo("description"); ?> </h3>

      </div>
      <nav>
        <?php wp_nav_menu() ?>
      </nav>
      <?php wp_head(); ?>
    </header>
