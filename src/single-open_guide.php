<?php get_header(); ?>
<?php if(have_posts()):?>
<?php while (have_posts()): the_post(); ?>
<div class="l-frame">
<section>
    <div class="l-entry">
      <?php breadcrumb(); ?>
      <div class="l-entry-inner">
        <h1 class="l-entry-title"><span>テイクアウト注文の予約・決済システム「テイクイーツ」はWeb制作会社にも飲食店にもメリットが大きすぎた</span></h1>
        <div class="date">
          <time datetime="<?php echo get_the_date('Y.n.d'); ?>"><?php echo get_the_date('Y.n.d'); ?></time>
        </div>
      </div>
      
    </div>
</section>

<section>
  
    <div class="l-container">
      <div class="l-section">

        <main>
          <div class="l-contents">
            <div class="entry-img"><img src="<?php echo get_template_directory_uri()?>/img/kiasmos.jpg" alt="電子商店OPEN GUIDE" width="38" ></div>
            
            <div class="c-box">
              <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
              <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
            </div>
            <div class="c-box">
              <h2 class="c-tit02">タイトルh2タイトルh2タイトルh2</h2>
              <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
              <h3 class="c-tit03">タイトルh3タイトルh3タイトルh3</h3>
              <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
              <h4 class="c-tit04">タイトルh4タイトルh4タイトルh4</h4>
              <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
            </div>
                        
            <div class="c-box">
              <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
              <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
            </div>
            <div class="c-box">
              <h2 class="c-tit02">タイトルh2タイトルh2タイトルh2</h2>
              <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
              <h3 class="c-tit03">タイトルh3タイトルh3タイトルh3</h3>
              <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
              <h4 class="c-tit04">タイトルh4タイトルh4タイトルh4</h4>
              <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
            </div>

          </div>

        </main>

        <aside>
          <div class="l-aside">
            <div class="l-aside-inner">
              <h1>この記事の目次</h1>
              <ul>
                <li>サイドメニュー</li>
                <li>サイドメニュー</li>
                <li>サイドメニュー</li>
                <li>サイドメニュー</li>
                <li>サイドメニュー</li>
                <li>サイドメニュー</li>
                <li>サイドメニュー</li>
                <li>サイドメニュー</li>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>
  
  
</section>
</div>




        









<?php endwhile; ?>
<?php endif; ?>







<?php get_footer(); ?>