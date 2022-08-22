<?php get_header(); ?>
<div class="l-frame">
<section>
    <div class="l-entry">
      <?php breadcrumb(); ?>
      
    </div>
</section>

<section>
  
    <div class="l-container">
         <h1 class="tit-01"><span>ABOUT</span></h1>
         <div class="l-contents">

        <main>

        <?php

        if(have_posts()): while(have_posts()): the_post();?>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>

        </main>


      </div>

  
  
</section>


</div>




        














<?php get_footer(); ?>