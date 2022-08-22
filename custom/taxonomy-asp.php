<?php get_header(); ?>
<main>
  <div class="l-frame">
    <div class="l-entry">
      <?php breadcrumb(); ?>
      <section>
        <div class="entry-box">
          <h1 class="tit-01"><span>ASPカートサービスについて</span></h1>
        </div>
      </section>
    </div>
    <!-- /.l-entry -->

    <div class="l-container">
      <article>
        <div class="l-contents" id="result">

          <ul class="contents-list l-gid">
               <?php
  $tax_name = 'asp';
  $posttype_name = 'open_guide';
  $terms = get_terms($tax_name);
  foreach ( $terms as $term ):

    $args = array(
      'post_type' => $posttype_name,
      'tax_query' => array(
        array(
          'taxonomy' => $tax_name,
          'field'    => 'slug',
          'terms'    => $term->slug,
        ),
      ),
    );
    $the_query = new WP_Query( $args );
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
              
                <?php endwhile;
                endif;
                wp_reset_postdata();
                ?>
                <li class="box-content">
                  <div class="box-item">
                     <div class="date">
                        <time datetime="">2022.08.30</time>
                     </div>
                     <div class="box-img">
                        <a href="" class="linkBl01">
                        <img src="<?php echo get_template_directory_uri()?>/img/kiasmos.jpg" alt="電子商店OPEN GUIDE" width="38" >
                        </a>
                     </div>
                     <div class="box-txt">
                        <h1 class="box-tit">
                        <a href="" class="link03">タイトルタイトルタイトルタイトルタイトル</a>
                        </h1>

                     </div>
                  </div>
               </li>
               <li class="box-content">
                  <div class="box-item">
                     <div class="date">
                        <time datetime="">2022.08.30</time>
                     </div>
                     <div class="box-img">
                        <a href="" class="linkBl01">
                        <img src="<?php echo get_template_directory_uri()?>/img/kiasmos.jpg" alt="電子商店OPEN GUIDE" width="38" >
                        </a>
                     </div>
                     <div class="box-txt">
                        <h1 class="box-tit">
                        <a href="" class="link03">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</a>
                        </h1>

                     </div>
                  </div>
               </li>
               <li class="box-content">
                  <div class="box-item">
                     <div class="date">
                        <time datetime="">2022.08.30</time>
                     </div>
                     <div class="box-img">
                        <a href="" class="linkBl01">
                        <img src="<?php echo get_template_directory_uri()?>/img/kiasmos.jpg" alt="電子商店OPEN GUIDE" width="38" >
                        </a>
                     </div>
                     <div class="box-txt">
                        <h1 class="box-tit">
                        <a href="" class="link03">タイトルタイトルタイトルタイトルタイトル</a>
                        </h1>
                        
                     </div>
                  </div>
               </li>
               <li class="box-content">
                  <div class="box-item">
                     <div class="date">
                        <time datetime="">2022.08.30</time>
                     </div>
                     <div class="box-img">
                        <a href="" class="linkBl01">
                        <img src="<?php echo get_template_directory_uri()?>/img/kiasmos.jpg" alt="電子商店OPEN GUIDE" width="38" >
                        </a>
                     </div>
                     <div class="box-txt">
                        <h1 class="box-tit">
                        <a href="" class="link03">タイトルタイトルタイトルタイトルタイトル</a>
                        </h1>

                     </div>
                  </div>
               </li>
               <li class="box-content">
                  <div class="box-item">
                     <div class="date">
                        <time datetime="">2022.08.30</time>
                     </div>
                     <div class="box-img">
                        <a href="" class="linkBl01">
                        <img src="<?php echo get_template_directory_uri()?>/img/kiasmos.jpg" alt="電子商店OPEN GUIDE" width="38" >
                        </a>
                     </div>
                     <div class="box-txt">
                        <h1 class="box-tit">
                        <a href="" class="link03">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</a>
                        </h1>

                     </div>
                  </div>
               </li>
               <li class="box-content">
                  <div class="box-item">
                     <div class="date">
                        <time datetime="">2022.08.30</time>
                     </div>
                     <div class="box-img">
                        <a href="" class="linkBl01">
                        <img src="<?php echo get_template_directory_uri()?>/img/kiasmos.jpg" alt="電子商店OPEN GUIDE" width="38" >
                        </a>
                     </div>
                     <div class="box-txt">
                        <h1 class="box-tit">
                        <a href="" class="link03">タイトルタイトルタイトルタイトルタイトル</a>
                        </h1>
                        
                     </div>
                  </div>
               </li>
               <li class="box-content">
                  <div class="box-item">
                     <div class="date">
                        <time datetime="">2022.08.30</time>
                     </div>
                     <div class="box-img">
                        <a href="" class="linkBl01">
                        <img src="<?php echo get_template_directory_uri()?>/img/kiasmos.jpg" alt="電子商店OPEN GUIDE" width="38" >
                        </a>
                     </div>
                     <div class="box-txt">
                        <h1 class="box-tit">
                        <a href="" class="link03">タイトルタイトルタイトルタイトルタイトル</a>
                        </h1>

                     </div>
                  </div>
               </li>
               <li class="box-content">
                  <div class="box-item">
                     <div class="date">
                        <time datetime="">2022.08.30</time>
                     </div>
                     <div class="box-img">
                        <a href="" class="linkBl01">
                        <img src="<?php echo get_template_directory_uri()?>/img/kiasmos.jpg" alt="電子商店OPEN GUIDE" width="38" >
                        </a>
                     </div>
                     <div class="box-txt">
                        <h1 class="box-tit">
                        <a href="" class="link03">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</a>
                        </h1>

                     </div>
                  </div>
               </li>
               <li class="box-content">
                  <div class="box-item">
                     <div class="date">
                        <time datetime="">2022.08.30</time>
                     </div>
                     <div class="box-img">
                        <a href="" class="linkBl01">
                        <img src="<?php echo get_template_directory_uri()?>/img/kiasmos.jpg" alt="電子商店OPEN GUIDE" width="38" >
                        </a>
                     </div>
                     <div class="box-txt">
                        <h1 class="box-tit">
                        <a href="" class="link03">タイトルタイトルタイトルタイトルタイトル</a>
                        </h1>
                        
                     </div>
                  </div>
               </li>
          </ul>
        </div>
      </article>
    </div>

  </div>
  <!-- /.l-frame -->
</main>
<?php get_footer(); ?>
