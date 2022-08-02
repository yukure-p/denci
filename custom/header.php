<?php
if ( get_current_blog_id() === BLOG_ID_JP ) {?>
       

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="<?php bloginfo("charset"); ?> | ">
<?php
  if(is_front_page()){ ?>
    <meta name="description" content="SoundLogは、Electronicな音楽・Techno・House・Electro・IDM・DEEP HOUSE・MINIMAL TE CHNOなどの曲を検索できるサイトです。様々なElectronicな音楽を検索するのにご利用ください。">
    <?php }else{ ?>
    <meta name="description" content="<?php the_title(); ?>　|　 SoundLog(サウンドログ)　|　 Electronicな音楽・曲・Techno・House・Electro・IDM・Minimal Tecno・Deep House">
    <?php } ?>
  <meta name="keywords" content="SoundLog,サウンドログ,Blog DJ,Techno,House,Electro,IDM,Electronica,DeepHouse,テクノ,ハウス,エレクトロニカ,ディープハウス">
  <meta name="viewport" content="">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/icon.svg">
  <link rel="apple-touch-icon-precomposed" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/icona.svg" />
  <meta property="og:site_name" content="SoundLogは、Electronicな音楽・Techno・House・Electro・IDM・DEEP HOUSE・MINIMAL TE CHNOなどの曲を検索できるサイトです。様々なElectronicな音楽を検索するのにご利用ください。" />
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
  <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/img_ogp.jpg" />
  <meta property="og:description" content="SoundLogは、Electronicな音楽・Techno・House・Electro・IDM・DEEP HOUSE・MINIMAL TE CHNOなどの曲を検索できるサイトです。様々なElectronicな音楽を検索するのにご利用ください。" />
  <meta itemprop="name" content="<?php the_title(); ?>">
  <meta itemprop="description" content="SoundLog(サウンドログ)　|　 Electronicな音楽(Techno・House・Electro・IDM等々)を雰囲気で紹介しています。">
  <meta itemprop="image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/img_ogp01.jpg">



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-221460689-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-221460689-1');
</script>

<script>
  (function(d) {
    var config = {
      kitId: 'jco3hgw',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<?php wp_head(); ?>
</head>



<?php
  if ( is_front_page() ) {
    $my_body_class = 'l-top';
  } else if ( is_single() ) {
    $my_body_class = 'l-local';
  } else if ( is_archive() ) {
    $my_body_class = 'l-list';
  }else if ( is_404() ) {
    $my_body_class = 'l-top';
  }
?>
<body id="jp" <?php echo ( $my_body_class ) ? ' class="l-grid ' . $my_body_class . '"' : ''; ?>>

<header>
  <div class="l-header">
    <h1 class="logo">
      <a href="<?php echo esc_url (home_url()); ?>">
        <img src="<?php echo get_template_directory_uri()?>/img/common/logo.svg" alt="SOUNDLOG">
      </a>
    </h1>

    <div class="lang-btn">
      <span class="lang-tit"><a href="<?php echo esc_url (home_url()); ?>/en"></a></span>
    </div>
    
    <div class="gnav-botton gnav-btn">
      <div class="gnav-botton-box">
        <div class="gnav-botton-inner">
           <span class="gnav-line">
        </div>    
        <div class="gnav-botton-inner">     
           </span><span class="gnav-line"></span>
        </div>
        <div class="gnav-botton-inner">
           <span class="gnav-line"></span>
         </div>
      </div>
    </div>
  
  </div>

  <!-- /.l-header -->
</header>
<?php get_template_part('inc/nav'); ?>
<!-- get_template_part('inc/sidebar');  -->







<?php } else { ?>














<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="<?php bloginfo("charset"); ?> | ">
<?php
  if(is_front_page()){ ?>
    <meta name="description" content="SoundLog is a site where you can search for electronic music, Techno, House, Electro, IDM, DEEP HOUSE, MINIMAL TE CHNO, etc. Please use it to search for various electronic music.">
    <?php }else{ ?>
    <meta name="description" content="<?php the_title(); ?> | SoundLog | Electronic music / songs / Techno / House / Electro / IDM / Minimal Tecno / Deep House">
    <?php } ?>
  <meta name="keywords" content="SoundLog,Techno,House,Electro,IDM,Electronica,DeepHouse">
  <meta name="viewport" content="">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/icon.svg">
  <link rel="apple-touch-icon-precomposed" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/icona.svg" />
  <meta property="og:site_name" content="SoundLog is a site where you can search for electronic music, Techno, House, Electro, IDM, DEEP HOUSE, MINIMAL TE CHNO, etc. Please use it to search for various electronic music." />
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
  <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/img_ogp.jpg" />
  <meta property="og:description" content="" />
  <meta itemprop="name" content="<?php the_title(); ?>">
  <meta itemprop="description" content="SoundLog is a site where you can search for electronic music, Techno, House, Electro, IDM, DEEP HOUSE, MINIMAL TE CHNO, etc. Please use it to search for various electronic music.">
  <meta itemprop="image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/img_ogp01.jpg">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-221460689-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-221460689-1');
</script>

<script>
  (function(d) {
    var config = {
      kitId: 'jco3hgw',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<?php wp_head(); ?>
</head>



<?php
  if ( is_front_page() ) {
    $my_body_class = 'l-top';
  } else if ( is_single() ) {
    $my_body_class = 'l-local';
  } else if ( is_archive() ) {
    $my_body_class = 'l-list';
  }else if ( is_404() ) {
    $my_body_class = 'l-top';
  }
?>
<body id="en" <?php echo ( $my_body_class ) ? ' class="l-grid ' . $my_body_class . '"' : ''; ?>>

<header>
  <div class="l-header">
    <h1 class="logo">
      <a href="<?php echo esc_url (home_url()); ?>">
        <img src="<?php echo get_template_directory_uri()?>/img/common/logo.svg" alt="SOUNDLOG">
      </a>
    </h1>

    <div class="lang-btn">
      <span class="lang-tit"><a href="<?php echo esc_url (network_home_url()); ?>"></a></span>
    </div>
    
    <div class="gnav-botton gnav-btn">
      <div class="gnav-botton-box">
        <div class="gnav-botton-inner">
           <span class="gnav-line">
        </div>    
        <div class="gnav-botton-inner">     
           </span><span class="gnav-line"></span>
        </div>
        <div class="gnav-botton-inner">
           <span class="gnav-line"></span>
         </div>
      </div>
    </div>
  
  </div>

  <!-- /.l-header -->
</header>
<?php get_template_part('inc/nav'); ?>
<!-- get_template_part('inc/sidebar');  -->


<?php } ?>


