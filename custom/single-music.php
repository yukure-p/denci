<?php get_header(); ?>

<main>
  <div class="l-frame" id="place">
  <div class="l-entry">
    <?php breadcrumb(); ?>
    <section>
      <div class="entry-box">
        <div class="inner-entry-box">
          <h1 class="detail-title"><?php the_title(); ?></h1>
        </div>
      </div>
    </section>
  </div>
  <!-- /.l-entry -->


  <div class="l-container ">
    <article>
      <div class="l-contents">
        <div class="detail-content">
          <div class="detail-box">
            <section>
              
              
              <div class="content-movie">
              <div class="movie"><?php the_field('youtube'); ?></div>
              </div>
            </section>


           <?php
           global $post;
           $term = array_shift(get_the_terms($post->ID, 'artist')); //←ここが追加
           $args = array(
            'numberposts' => 8, //８件表示(デフォルトは５件)
            'post_type' => 'music', //カスタム投稿タイプ名
            'taxonomy' => 'artist', //タクソノミー名
            'term' => $term->slug, //ターム名 ←ここが追加
            'orderby' => 'rand', //ランダム表示
            'post__not_in' => array($post->ID) //表示中の記事を除外
           );
          ?>
          <?php $myPosts = get_posts($args); if($myPosts) : ?>
          
            <div class="detail-box-same">
              <section>
                <h1 class="box-tit01">同じアーティストの曲</h1>
                <div class="detail-box-contents">
                <?php foreach($myPosts as $post) : setup_postdata($post); ?>
                
                <div class="l-box">

                    <div class="movie">
                      <?php the_field('youtube'); ?>
                    </div>

                </div>

                
                <?php endforeach; ?>
                </div>
              </section>              
            </div>
          
          <?php else : ?>

          <?php endif; wp_reset_postdata(); ?>
          </div>





          <div class="detail-aside">
            <section class="detail-box-inner">
              <ul class="detail-info">
                <li><span class="agenda">ARTIST</span>
                  <?php
                    $terms = get_the_terms($post->ID, 'artist');
                    foreach( $terms as $term ) {
                      
                      echo $term->name; 
                    }
                  ?>  
                </li>
                <?php if(have_posts()):?>
                <?php while (have_posts()): the_post(); ?>
                <li><span class="agenda">TITLE</span><?php the_field('title'); ?></li>
                <li><span class="agenda"><?php the_field('format'); ?></span><?php the_field('content-tit'); ?></li>
                <li><span class="agenda">RELEASE</span><?php the_field('release'); ?></li>
                <?php endwhile; ?>
                <?php endif; ?>
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
              <?php the_content(); ?>

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


        <?php get_template_part('inc/similar'); ?>
        

<div class="l-frame non-active search">
  <div class="l-container">
    <article> 
      <div class="l-contents">
        <h1 class="list-tit"><span>MUSIC</span></h1>

        <div class="l-list space-topXL" id="result">
          <?php get_template_part( 'search' ); // 検索フォームを読み込み. ?>

        </div>

      </div>
      <!-- /.l-contents -->
    </article> 
  </div>
  <!-- /.l-container -->

  </div>
  <!-- /.l-frame -->
</main>
<?php get_footer(); ?>
