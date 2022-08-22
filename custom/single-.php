<?php get_header(); ?>
<?php if(have_posts()):?>
<?php while (have_posts()): the_post(); ?>

  <div class="l-entry">
    <?php breadcrumb(); ?>
    <section>
      <div class="entry-box">
        <div class="inner-entry-box">
          <div class="date">
            <time datetime="<?php echo get_the_date('Y.n.d'); ?>"><?php echo get_the_date('Y.n.d'); ?></time>
          </div>
          <h1 class="detail-title"><?php the_title(); ?></h1>
        </div>
      </div>
    </section>
  </div>
  <!-- /.l-entry -->


  <div class="l-container">
    <article>
      <div class="l-contents">
        <div class="detail-content">
          <div class="detail-box">
            <section>
              <?php the_content(); ?>
            </section>
          </div>
          <div class="detail-box">
            <section>
 <?php
          $term = get_the_terms($post->ID, 'genre');
          if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="l-box">
            <section>
              <div class="contents-list">
                <div class="date">
                  <time datetime="<?php echo get_the_date('Y.n.d'); ?>"><?php echo get_the_date('Y.n.d'); ?></time>
                </div>
                <div class="box-img">
                  <a href="<?php echo get_permalink($post->ID); ?>" class="linkBl01">
                    <?php
                      $thumbnail_id = get_post_thumbnail_id($post->ID);
                      $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'music-list');
                      if (get_post_thumbnail_id($post->ID)) {
                        echo '<img src="' . $thumb_url[0] . '" alt="">';
                      } else {
                        echo '<img src="' . get_template_directory_uri() . '/img/img-default.png" alt="">';
                      }
                    ?>      
                  </a>
                </div>

                <div class="box-contents">
                  <?php
                    $terms = get_the_terms($post->ID, 'genre');
                    if($terms):
                      echo '<ul class="category-tag" arial-label="タグ">';

                      foreach($terms as $term):
                        $term_name = $term->name;
                        $term_link = get_term_link( $term );
                        echo '<li><a href="'.$term_link.'" class="link01">'.$term_name.'</a></li>';
                      endforeach;
                      echo '</ul>';
                    endif;
                  ?>
                  <h1 class="list-title">
                    <a href="<?php echo get_permalink($post->ID); ?>" class="link03"><?php echo get_the_title($post->ID); ?></a>
                  </h1>
                  <?php
                    $terms = get_the_terms($post->ID, 'type');
                    if($terms):
                      echo '<ul class="type-tag" arial-label="タグ">';
                      foreach($terms as $term):
                        $term_name = $term->name;
                        $term_link = get_term_link( $term );
                        echo '<li><a href="'.$term_link.'" class="link02">'.$term_name.'</a></li>';
                      endforeach;
                      echo '</ul>';
                    endif;
                  ?>
                </div>  
              </div>
            </section>
          </div>
          <?php endwhile;?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
            </section>
          </div>
          <div class="detail-aside">
            <section class="detail-box-inner">
              <div class="detail-img">
                <?php
                  // アイキャッチ画像を取得
                  $thumbnail_id = get_post_thumbnail_id($post->ID);
                  $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'music-list');
                  if (get_post_thumbnail_id($post->ID)) {
                    echo '<img src="' . $thumb_url[0] . '" alt="">';
                  } else {
                    // アイキャッチ画像が登録されていなかったときの画像
                    echo '<img src="' . get_template_directory_uri() . '/img/img-default.png" alt="">';
                  }
                ?>   
              </div>
              <ul class="detail-info">
                <li><span class="agenda">ARTIST</span><a href="" class="link01"><?php the_field('artist'); ?></a></li>
                <li><span class="agenda">TITLE</span><?php the_field('title'); ?></li>
                <li><span class="agenda"><?php the_field('format'); ?></span><?php the_field('content-tit'); ?></li>
                <li><span class="agenda">RELEASE</span><?php the_field('release'); ?></li>
              </ul>

              <div class="detail-tag">
                <!-- <h1 class="tag-tit">Category</h1> -->
                <?php
                  $terms = get_the_terms($post->ID, 'genre');
                  if($terms):
                    echo '<ul class="category-tag" arial-label="タグ">';

                    foreach($terms as $term):
                      $term_name = $term->name;
                      $term_link = get_term_link( $term );    //$termはオブジェクトなので第二引数は省略可
                      echo '<li><a href="'.$term_link.'" class="link01">'.$term_name.'</a></li>';
                    endforeach;

                    echo '</ul>';
                  endif;
                ?>
                
                <?php
                  $terms = get_the_terms($post->ID, 'type');
                  if($terms):
                    echo '<ul class="type-tag" arial-label="タグ">';

                    foreach($terms as $term):
                      $term_name = $term->name;
                      $term_link = get_term_link( $term );    //$termはオブジェクトなので第二引数は省略可
                      echo '<li><a href="'.$term_link.'" class="link02">'.$term_name.'</a></li>';
                    endforeach;

                    echo '</ul>';
                  endif;
                ?>
              </div>

            </section>
          </div>
        </div>
       
      </div>
      <!-- /.l-contents -->
    </article> 
  </div>
  <!-- /.l-container -->
</div>
<!-- /.l-flame -->
<?php endwhile; ?>
<?php endif; ?>

        <?php get_template_part('template-parts/similar'); ?>
        

<div class="l-frame">
  <div class="l-container">
    <article> 
      <div class="l-contents">
        <h1 class="list-tit">MUSIC</h1>

        <div class="l-lists space-topXL" id="result">
          <?php get_template_part( 'search' ); // 検索フォームを読み込み. ?>

        </div>

      </div>
      <!-- /.l-contents -->
    </article> 
  </div>
  <!-- /.l-container -->
















<?php get_footer(); ?>
