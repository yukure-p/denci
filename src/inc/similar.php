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
<?php
                    $terms = get_the_terms($post->ID, 'before');
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
               </li>