<?php get_header(); ?>
<main>
  <div class="l-frame">




<?php
/*
Template Name: list
*/
?>





    <div class="l-entry">
      <?php breadcrumb(); ?>
      <section>
        <div class="entry-box">
          <h1 class="tit-01"><span>記事一覧</span></h1>
        </div>
      </section>
    </div>
    <!-- /.l-entry -->

    <div class="l-container">
      <article>
        <div class="l-contents" >

          <ul class="contents-list l-gid">
                  <?php
                  $paged = (int) get_query_var('paged');
                  $args = array(
                     'posts_per_page' => -1,
                     'paged' => $paged,
                     'orderby' => 'post_date',
                     'order' => 'DESC',
                     'post_type' => 'post',
                     'post_status' => 'publish'
                  );
                  $the_query = new WP_Query($args);
                  if ( $the_query->have_posts() ) :
                     while ( $the_query->have_posts() ) : $the_query->the_post();
                  ?>

               <li class="box-content">
                  <div class="box-item">
                     <div class="date">
                        <time datetime=""><?php the_time('Y.m.d') ?></time>
                     </div>
                     <div class="box-img">
                        <a href="<?php echo get_permalink($post->ID); ?>" class="linkBl01">
                       <?php
                        // アイキャッチ画像を取得
                        $thumbnail_id = get_post_thumbnail_id($post->ID);
                        $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
                        if (get_post_thumbnail_id($post->ID)) {
                          echo '<figure><img src="' . $thumb_url[0] . '" alt=""></figure>';
                        } else {
                          // アイキャッチ画像が登録されていなかったときの画像
                          echo '<figure><img src="' . get_template_directory_uri() . '/img/img-default.png" alt=""></figure>';
                        }
                        ?>
                        </a>
                     </div>
                     <div class="box-txt">
                        <h1 class="box-tit">
                        <a href="<?php echo get_permalink($post->ID); ?>" class="link03"><?php echo get_the_title($post->ID); ?></a>
                        </h1>

                     </div>
                  </div>
               </li>
              
                <?php endwhile; endif; ?>
                
          </ul>
        </div>
      </article>
    </div>

  </div>
  <!-- /.l-frame -->
</main>
<?php get_footer(); ?>
