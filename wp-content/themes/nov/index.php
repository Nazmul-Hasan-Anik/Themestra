<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name') ?></title>
    <h1 style="text-align: center;"><?php bloginfo('description') ?></h1>
    <?php wp_head() ?>
  </head>
  <body>
    <?php
    echo str_repeat('&nbsp;', 5); ?>
    <?php
    if (have_posts()):
      while (have_posts()):
        the_post();
     ?>
     <h1 style="text-align: center;"><?php the_title() ?></h1>
    <p><?php the_content()  ?></p>
    <?php echo str_repeat('&nbsp;', 5); ?>
   <?php endwhile;
 endif;
    ?>

  </body>
</html>
