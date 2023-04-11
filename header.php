<!DOCTYPE html>
<?php
$language = isset($_GET['lang']) && $_GET['lang'] === 'cn' ? 'cn' : 'en';
$htmlLang = $language === 'cn' ? 'lang="cn"' : 'lang="en"';
?>
<html <?php echo $htmlLang; ?>>
<head>
    <title><?php if($language === 'cn') {echo 'NXpark - 创新厂房物流园';} else {echo 'NXpark by Aden';}?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">
    <?php wp_head();?>
    <style>
        <?php if (!is_home()) : ?>
            .hero-banner, .col-hero {
                display: none;
            }
        <?php endif; ?>
    </style>
</head>
<body <?php if(is_home()) echo 'class="big-container"'?>>
    <?php if(is_home()) : ?>
        <div class="hero-banner">   
<video autoplay muted playsinline src="" x5-video-player-type="h5">
 Your browser does not support the video tag.</video>


    <?php endif; ?>
    <header class="header-container">
    <div class="header">
    <a <?php if(is_home('')) echo 'class="activ"'?>class="" href="<?php echo add_query_arg('lang', $language, home_url('')) ?>"><img  class="logo"src="/wp-content/themes/nxparklastupdate/assets/Group 1.svg" alt=""></a> 
    <nav>
        <ul class="navigation" id="menuBox">
            <li><a <?php if(is_home('')) echo 'class="activ"'?>class="" href="<?php echo add_query_arg('lang', $language, home_url('')) ?>"><?php if($language === 'cn') {echo '首页';} else{ echo 'Home';}?></a><hr class="navi-hr"></li>
          <!---<li><a href="#"><?php if($language === 'cn') {echo '关于';} else{ echo 'About Us';}?></a><hr class="navi-hr"></li>---->
          <!---  <li><a href="#"><?php if($language === 'cn') {echo '愿景';} else{ echo 'Our Vision';}?></a><hr class="navi-hr"></li>---->
           <!---  <li><a href="#"><?php if($language === 'cn') {echo '新闻';} else{ echo 'News';}?></a><hr class="navi-hr"></li>---->
            <li><a <?php if(is_page('contact')) echo 'class="activ"'?>class="" href="<?php echo add_query_arg('lang', $language, site_url('contact')) ?>"><?php if($language === 'cn') {echo '联系';} else{ echo 'Contact';}?><hr class="navi-hr"<?php if(is_page('contact')) echo 'class="activ"'?>></a></li>
        </ul>
        <img src="/wp-content/themes/nxparklastupdate/assets/open.svg" id="menuIcon" alt="">
        <div class="language-switcher">
  <a  href="<?php echo add_query_arg('lang', 'en'); ?>" <?php if($language === 'en') {echo 'class="activ font-english"';} ?> class="font-english">EN</a>
   <a  href="<?php echo add_query_arg('lang', 'cn'); ?>" <?php if($language === 'cn') {echo 'class="activ font-chinese"';} ?> class="font-chinese">中文</a>
</div>

    </nav>
  
</div>

        <?php if(is_home()) : ?>
            <div class="col-hero">
                <h1 class="hero-title <?php echo ($language === 'cn') ? 'hero-title-cn' : '' ?>">
                <?php if($language === 'cn') 
                {echo '<strong>高瞻远瞩</strong><br> 面向未来的工业地产';} else{ echo '<strong>Industrial real estate</strong> for the ESG era';}?></h1>
                <img class="logo-title" src="/wp-content/themes/nxparklastupdate/assets/by Aden.png" alt="" width="50" height="">
            </div>
        <?php endif; ?>
    </header>
    <?php if(is_home()) : ?>
        </div>
    <?php endif; ?>

