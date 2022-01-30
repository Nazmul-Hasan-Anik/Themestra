
     <?php get_header() ?>
    <menu>
      <?php if (have_posts()) :
        // code...
        while (have_posts()):
          // code...
                the_post();
       ?>
      <h1 class="article-title"> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a> </h1>
       <?php the_content(); ?>
     <?php endwhile;
    endif;
    ?>

    </menu>
    <?php get_footer(); ?>
