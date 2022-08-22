<?php get_header(); ?>
<main>
  <div class="l-frame">










    <div class="l-entry">
      <?php breadcrumb(); ?>
      <section>
        <div class="entry-box">
          <h1 class="tit-01"><span>開設前に知っておくこと</span></h1>
        </div>
      </section>
    </div>
    <!-- /.l-entry -->

    <div class="l-container">
      <article>
        <div class="l-contents" id="result">

          <ul class="contents-list l-gid">
                <?php
                $args = array(
                  'post_type' => 'open_guide',// 投稿タイプを指定
                  'posts_per_page' => -1,// 表示する記事数
                            'orderby' => 'date', //日付で並び替え
                            'order' => 'DESC' // 降順 or 昇順
                );
                $news_query = new WP_Query( $args );
                if ( $news_query->have_posts() ): 
                  while ( $news_query->have_posts() ): 
                    $news_query->the_post(); 
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
