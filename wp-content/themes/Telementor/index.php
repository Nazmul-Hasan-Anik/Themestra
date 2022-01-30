<?php get_header(  ) ?>

  <body>

    <header>


    <div class="wrapper">


  <h2 class="title" > <a href="<?php echo site_url() ?>"><?php  bloginfo( 'name' ) ?> </a>    </h2>
<h2 ><?php bloginfo( "description" )?></h2>  </div>
<div>

</header>

    <?php if (have_posts()):
      while (have_posts()):
        the_post();
       ?>
       <div class="img_thumbnail">
         <?php
            if(has_post_thumbnail()){
              the_post_thumbnail('full',['class'=>'.post-thumb']);
            }
          ?>

       </div>
    <h2 >
      <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
    </h2>
    <p class="post-meta"><?php the_time( 'F j,Y' ) ?> by <a href="<?php   echo get_author_posts_url(get_the_author_meta( 'ID' )) ?>"><?php the_author() ?></a>
      Category <?php
          $categories=get_the_category();
          $separetor=',';
          $result='';

        foreach ($categories as $category) {
          // code...
        $result .='<a href="' .get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$separetor;
        }
        echo trim ($result,$separetor);
       ?>

     </p>

    <?php the_content() ?>
     <?php echo get_the_tag_list('<ul class= "post-tags"> <li>','</li><li>','</li></ul>'); ?>

  <?php endwhile;
endif; ?>

  </body>



  <?php get_footer(  ) ?>
    </html>
