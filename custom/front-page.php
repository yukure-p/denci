<?php get_header(); ?>
<main>

  <div class="l-frame">
    <div class="l-entry">
      
      <div class="mv-box">

         <div class="mv-inner-l">
            <div class="img-girl">
               <img src="<?php echo get_template_directory_uri()?>/img/top/mv01.svg" alt="電子商店OPEN GUIDE" >
            </div>
            <img src="<?php echo get_template_directory_uri()?>/img/top/mv-icon01.svg" alt="電子商店OPEN GUIDE" class="mv-icon01 mv-icon">
            <img src="<?php echo get_template_directory_uri()?>/img/top/mv-icon02.svg" alt="電子商店OPEN GUIDE" class="mv-icon02 mv-icon">
            <img src="<?php echo get_template_directory_uri()?>/img/top/mv-icon03.svg" alt="電子商店OPEN GUIDE" class="mv-icon03 mv-icon">
            <img src="<?php echo get_template_directory_uri()?>/img/top/mv-icon04.svg" alt="電子商店OPEN GUIDE" class="mv-icon04 mv-icon">
         </div>
         <div class="mv-inner-c">
               <img src="<?php echo get_template_directory_uri()?>/img/top/txt.svg" alt="電子商店OPEN GUIDE">
         </div>

         <div class="mv-inner-r">
            <div class="img-man">
               <img src="<?php echo get_template_directory_uri()?>/img/top/mv02.svg" alt="電子商店OPEN GUIDE"  >
            </div>
            <img src="<?php echo get_template_directory_uri()?>/img/top/mv-icon05.svg" alt="電子商店OPEN GUIDE" class="mv-icon05 mv-icon">
            <img src="<?php echo get_template_directory_uri()?>/img/top/mv-icon06.svg" alt="電子商店OPEN GUIDE" class="mv-icon06 mv-icon">
            <img src="<?php echo get_template_directory_uri()?>/img/top/mv-icon07.svg" alt="電子商店OPEN GUIDE" class="mv-icon07 mv-icon">
            <img src="<?php echo get_template_directory_uri()?>/img/top/mv-icon08.svg" alt="電子商店OPEN GUIDE" class="mv-icon08 mv-icon">
        </div>
      </div>
     
    </div>


   <section>
      <div class="l-container">
         <h1 class="tit-01"><span>PICK UP</span></h1>
         <div class="l-contents">
            <?php
                $toplist = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'meta_key' => 'top',
                    'meta_value' => 'on',
                    'meta_compare' => 'LIKE'
                );
            ?>
            <ul class="contents-list l-gid top">

               <?php query_posts($toplist); ?>
               <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
               <li class="box-content">
                  <div class="box-item">
                     <div class="date">
                        <time datetime=""><?php the_time('Y.m.d') ?></time>
                     </div>
                     <div class="box-img">
                        <a href="<?php the_permalink(); ?>" class="linkBl01">
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
                        <a href="<?php the_permalink(); ?>" class="link01"><?php echo get_the_title($post->ID); ?></a>
                        </h1>

                     </div>
                  </div>
               </li>
               <?php endwhile; endif; wp_reset_query(); ?>
              
            </ul>



        </div>
      </div>
     </section>

  </div>
  <!-- /.l-frame -->


   <section>
      <h1 class="tit-01"><span>記事</span> </h1>

      <div class="tab-box l-frame">

         <ul class="tab-group">
            <li class="tab tab-A tab-border is-active">
               <img src="<?php echo get_template_directory_uri()?>/img/top/tab01.svg" alt="開設前に知っておくこと" width="55" >
               <span>開設前に知っておくこと</span>
            </li>
            <li class="tab tab-border tab-B">
               <img src="<?php echo get_template_directory_uri()?>/img/top/tab02.svg" alt="ASPカートサービスについて" width="32" >
               <span>ASPカートサービスについて</span>
            </li>
         </ul>
      </div>


      <div class="l-frame-outer bg-w border01">
         <div class="l-frame">
            <div class="tab-box-inner">
              <div class="panel-group">
                <div class="panel tab-A is-show">
                     <?php
                     // 取得したい内容
                     $args = array(
                        'posts_per_page'   => -1, // 読み込みしたい記事数（全件取得時は-1）
                        // 'category'         => 1, // 読み込みしたいカテゴリID（複数の場合は '1,2'）
                        'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
                        'order'            => 'DESC', // 昇順(ASC)か降順か(DESC）
                        'category_name' => 'before',
                        // 'exclude'          => '111, 125', // 一覧に表示したくない記事のID（複数時は,区切）
                     );

                     // 配列で指定した内容で、記事情報を取得
                     $the_query = new WP_Query( $args );?>
                     <?php
                     // 取得した記事情報の表示
                     if ( $the_query->have_posts() ): // 記事情報がある場合はforeachで記事情報を表示
                      ?>
                  <ul class="contents-list l-gid">                     
                    <?php
                     // ↓ ループ開始 ↓
                     while ( $the_query->have_posts() ):
                        $the_query->the_post(); // アーカイブページ同様にthe_titleなどで記事情報を表示できるようにする
                     ?>
                     <li class="box-content">
                        <div class="box-item">
                           <div class="date">
                              <time datetime=""><?php the_time('Y.m.d') ?></time>
                           </div>
                           <div class="box-img">
                             <a href="<?php the_permalink(); ?>" class="linkBl01">
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
                              <a href="<?php the_permalink(); ?>" class="link01"><?php echo get_the_title($post->ID); ?></a>
                              </h1>

                           </div>
                        </div>
                     </li>
                     <?php endwhile; ?>
                     
                  </ul>
                  <?php
                    endif;
                    wp_reset_postdata();
                  ?>
                </div>


                <div class="panel tab-B">
                     <?php
                     // 取得したい内容
                     $args = array(
                        'posts_per_page'   => -1, // 読み込みしたい記事数（全件取得時は-1）
                        // 'category'         => 1, // 読み込みしたいカテゴリID（複数の場合は '1,2'）
                        'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
                        'order'            => 'DESC', // 昇順(ASC)か降順か(DESC）
                        'category_name' => 'asp',
                        // 'exclude'          => '111, 125', // 一覧に表示したくない記事のID（複数時は,区切）
                     );

                     // 配列で指定した内容で、記事情報を取得
                     $the_query = new WP_Query( $args );?>
                     <?php
                     // 取得した記事情報の表示
                     if ( $the_query->have_posts() ): // 記事情報がある場合はforeachで記事情報を表示
                      ?>
                  <ul class="contents-list l-gid">                     
                     <?php
                     // ↓ ループ開始 ↓
                     while ( $the_query->have_posts() ):
                        $the_query->the_post(); // アーカイブページ同様にthe_titleなどで記事情報を表示できるようにする
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
                              <a href="<?php echo get_permalink($post->ID); ?>" class="link01"><?php echo get_the_title($post->ID); ?></a>
                              </h1>

                           </div>
                        </div>
                     </li>
                     <?php endwhile; ?>
                     
                  </ul>
                  <?php
                    endif;
                    wp_reset_postdata();
                  ?>
                </div>
              </div>
            </div>
         </div>
      </div>

   </section>


   <section>
      <div class="l-frame">
         <div class="l-container">
            <h1 class="tit-01"><span>タグから探す</span> </h1>
         
         <div class="l-contents">

            <ul class="tag-box">
               <?php
                 $posttags = get_tags();
                 if ($posttags) {
                   foreach($posttags as $tag) {
                     echo '<li><a href="'. get_tag_link($tag->term_id) .'" class="link01">' . $tag->name . '</a></li>';
                   }
                 }
                ?>               
            </ul>
         </div>
         </div>
      </div>
   </section>

</main>
<?php get_footer(); ?>

