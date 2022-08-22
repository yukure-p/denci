<?php
$args = array(
  'post_type'      => 'music', // 絞り込み検索をする投稿タイプ.
  'posts_per_page' => -1, // 1ページに表示する記事数.
  'tax_query'      => array( // 検索条件.
    'relation' => 'AND',
  ),
);

// 検索条件を追加.
if ( ! empty( $genre ) ) {
  $args['tax_query'][] = array(
    'taxonomy' => 'genre',
    'field'    => 'slug',
    'terms'    => $genre,
    'operator' => 'IN',
  );
}
if ( ! empty( $type ) ) {
  $args['tax_query'][] = array(
    'taxonomy' => 'type',
    'field'    => 'slug',
    'terms'    => $type,
    'operator' => 'IN',
  );
}
$the_query = new WP_Query( $args );
?>




<?php while ( $the_query->have_posts() ) :
    $the_query->the_post();?>
    
           <div class="l-box">

            <section>
              <div class="contents-list">
                <div class="box-img">
                  <div class="movie">
                      <?php the_field('youtube'); ?>
                    </div>
                </div>
                <div class="box-contents">
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
                  <h1 class="list-title">
                    <a href="<?php echo get_permalink($post->ID); ?>" class="link03"><?php echo get_the_title($post->ID); ?></a>
                  </h1>


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
              </div>
            </section>

          </div>
<?php
  endwhile;

?>





    

<?php

wp_reset_postdata();
?>
  <div class="number"><?php echo $the_query->found_posts; ?></div>

