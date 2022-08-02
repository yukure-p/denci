<?php get_header(); ?>
<main>
  <div class="l-frame">
    <div class="l-entry">
      <!-- <div class="mvtype"></div> -->
      <div class="mv-box">

        <p>Hello!</p>
        <p>I'm DJ SOUNDLOG</p>
        <p>I don't DJ MIX</p>
        <p>And play DJ</p>
        <p>Just select the music</p>
      </div>
     
    </div>


    <div class="l-container">
      <article>
        <div class="l-contents" id="result">
          <?php get_template_part( 'search' ); ?>
        </div>
      </article>
    </div>
  </div>
  <!-- /.l-frame -->
</main>
<?php get_footer(); ?>

