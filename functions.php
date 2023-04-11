<?php 

function nxpark_files() {
    wp_enqueue_script('videojs', '//imgcache.qq.com/open/qcloud/video/tcplayer/tcplayer.min.css" rel="stylesheet');
    wp_enqueue_script('videojs-2', '//imgcache.qq.com/open/qcloud/video/tcplayer/libs/hls.min.0.13.2m.js%22');
    wp_enqueue_script('videojs-3', '//imgcache.qq.com/open/qcloud/video/tcplayer/tcplayer.min.js%22');
    wp_enqueue_script('animationjs', '//unpkg.com/swiper/swiper-bundle.min.js');
    wp_enqueue_script('javscript', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script('javscript-2', '//assets.website-files.com/5f369e90e946a4c5add5fc1a/js/swoopin.cf1c05186.js');
    wp_enqueue_script('javscript-3', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js');
    wp_enqueue_script('javscript-4', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js');
    wp_enqueue_script('javscript-5', '//cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.5.2/smooth-scrollbar.js');
    wp_enqueue_script('nxpark-js', get_theme_file_uri('/js/swipper-min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('main-nxpark-js', get_theme_file_uri('/js/script.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('cloudflare2', '//cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css');
    wp_enqueue_style('unpkg', '//unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_style('fonts-plusjakarta', '//fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600&display=swap');
    wp_enqueue_style('fonts-outfit', '//fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600&display=swap');
    wp_enqueue_style('fonts-chinese', '//fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@300;400;500;700&display=swap" rel="stylesheet"');
    wp_enqueue_style('nxpark_main_styles', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('nxpark_cn_styles', get_theme_file_uri('/css/stylecn.css'));
}
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

add_action('wp_enqueue_scripts', 'nxpark_files');

function add_language_to_post_link($url, $post) {
    global $language;
    $url = add_query_arg('lang', $language, $url);
    return $url;
}
add_filter('post_link', 'add_language_to_post_link', 10, 2);