<?php get_header(); ?>



    <div class="l-container">
      <div class="not-found">
        <p class="not-found-text01">404</p>
        <p class="not-found-text02">Page Not Found</p>

        <div class="not-found-link">
          <a href="<?php echo esc_url (home_url()); ?>">
            <?php
            if ( get_current_blog_id() === BLOG_ID_JP ) {?>
              Topへ戻る
            <?php } else { ?>
              Return to top page
            <?php } ?>
          </a>
        </div>
      </div>
    </div>

<?php get_footer(); ?>

