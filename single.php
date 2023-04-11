<?php 
$language = isset($_GET['lang']) && $_GET['lang'] === 'cn' ? 'cn' : 'en';
if ($language === 'cn') {
    echo '<html lang="cn">';
} else {
    echo '<html lang="en">';
}

?>

<?php

get_header();

while(have_posts()) {
    the_post();?>
  
     <div class="news-sosmed">
        <p>share:</p>
        <div class="icon-sosmed-news">
            <img src="/wp-content/themes/nxpark/assets/Icon awesome-facebook-square.svg" alt="">
            <img src="/wp-content/themes/nxpark/assets/Icon simple-wechat.svg" alt="">
            <img src="/wp-content/themes/nxpark/assets/Path 96.svg" alt="">
            <img src="/wp-content/themes/nxpark/assets/Icon awesome-linkedin.svg" alt="">
        </div>
    </div>
    
<!---------
new article
----------->
    <section class="new-container">
       <div class="img-header-news">
    <div class="img-container-left"> <!---big thumbnail---><?php
   //get thumnail post
    if ( has_post_thumbnail() ) {
      the_post_thumbnail('large', array('class' => 'img-news-l'));
    }
  ?></div> <!---big thumbnail end--->
        

<div class="img-container-right">
   <?php
if ($language === 'en') {
  $current_cat_id = 3;
} else {
  $current_cat_id = 26;
}

$prev = get_previous_post(false, '', $current_cat_id); //get the previous post in the current category
$next = get_next_post(false, '', $current_cat_id); //get the next post in the current category
?>

<?php
//check the next post

$next = get_adjacent_post(true, '', true, 'category');

if ($next): ?>
<a href="<?php echo get_permalink( $next->ID ); ?>">

<?php 

//get the next post
echo get_the_post_thumbnail($next->ID, 'medium', array('class' => 'img-news-s')); ?>

<h1 class="news-content-heading">
    <?php

    //get the next title
    echo apply_filters( 'the_title', $next->post_title ); 

    ?> </h1>
    </a>

<?php wp_reset_postdata();?>
<div class="blue-line-news"></div>
<p class="date-news-next">
    <?php
    //get the date
    echo get_the_date('', $next->ID); ?>
</p>

<?php else: ?>
<?php

//if this is the last post
$latest = new WP_Query(array(
    'posts_per_page' => 1,
    'order' => 'DESC',
    'cat' => $current_cat_id //get the latest post in the current category
));
$latest->the_post();?>
<a href="<?php the_permalink(); ?>">
<?php

//display thumbnail
the_post_thumbnail('medium', array('class' => 'img-news-s')); 
?>
<h1 class="news-content-heading">
<?php 

//display title
the_title(); ?></h1></a>

<?php wp_reset_postdata(); ?>

<div class="blue-line-news"></div>
<p class="date-news-next">
    <?php 

    //display date
    echo get_the_date('M j, Y'); ?></p>
<?php endif; ?>


          
 <div class="button-news">
    <div class="prev">
        <img class="button-prev" src="/wp-content/themes/nxpark/assets/Group 133.svg" alt="">
        <?php 
        $prev = get_adjacent_post(true, '', true, 'category');
        if ($prev && in_category($current_cat_id, $prev)) {
          echo '<a href="' . get_permalink($prev) . '">' . ($language === 'cn' ? __('上一篇', 'nxpark') : __('Previous', 'nxpark')) . '</a>';

        } else {
            $latest = new WP_Query(array(
                'posts_per_page' => 1,
                'order' => 'DESC',
                'cat' => $current_cat_id,
            ));
            if ($latest->have_posts()) {
                $latest->the_post();
                if ($language === 'cn') {
                    echo '<a href="' . get_permalink() . '">' . __('上一篇', 'nxpark') . '</a>';
                } else {
                    echo '<a href="' . get_permalink() . '">' . __('Previous', 'nxpark') . '</a>';
                }
            }
            wp_reset_postdata();
        }
        ?>
    </div>
    <div class="next">
        <?php 
        $next = get_adjacent_post(true, '', false, 'category');
        if ($next && in_category($current_cat_id, $next)) {
            echo '<a href="' . get_permalink($next) . '">' . ($language === 'cn' ?__('下一篇', 'nxpark')  : __('Next', 'nxpark')) . '</a>';
        } else { 
            $last = new WP_Query(array(
                'posts_per_page' => '1',
                'order' => 'ASC',
                'cat' => $current_cat_id,
            ));
            if ($last->have_posts()) {
                $last->the_post();
                if ($language === 'cn') {
                    echo '<a href="' . get_permalink() . '">' . __('下一篇', 'nxpark') . '</a>';
                } else {
                    echo '<a href="' . get_permalink() . '">' . __('Next', 'nxpark') . '</a>';
                }
            }
            wp_reset_postdata();
        };       
        ?>
        <img class="button-next" src="/wp-content/themes/nxpark/assets/Group 132.svg" alt="">
    </div>
</div>


        </div>
       </div>
<div class="container-news">
    <div class="news-menu"> <!---news nav--->
        <div class="news-men-col">
            <img src="/wp-content/themes/nxpark/assets/Group 186.svg" alt="">
        </div>
        <div class="news-men-col">
            <?php if ($language === 'cn') { ?>
                <p> <a class="non-active" href="<?php echo home_url('')?>">首页 / </a></p> &nbsp;&nbsp;
                <p> <a class="activ" href="http://">新闻</a></p>
            <?php } else { ?>
                <p> <a class="non-active" href="<?php echo home_url('')?>">Home / </a></p> &nbsp;&nbsp;
                <p> <a class="activ" href="http://">News</a></p>
            <?php } ?>
        </div>
    </div><!---news nav end--->
<?php 
$language = isset($_GET['lang']) && $_GET['lang'] === 'cn' ? 'cn' : 'en';

// Define category IDs for each language
$category_ids = [
    'en' => 3, // category ID for English articles
    'cn' => 26, // category ID for Chinese articles
];

$current_cat_id = $category_ids[$language];

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; // get current page number

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'order' => 'DESC',
    'cat' => $current_cat_id, // only display posts from the current category
    'paged' => $paged // add pagination parameter
);

$the_query = new WP_Query($args);

if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?>

    <h1 class="news-heading-content">
        <?php the_title(); ?>
    </h1>
    <div class="line-news"></div>
    <p class="date-news">
        <?php
        // display post date
        the_time('M j, Y');
        ?>
    </p>
    <div class="news-paragraph">
        <?php
        // display post content
        the_content();
        ?>
    </div> 

<?php endwhile; ?>

  <?php endif;
wp_reset_postdata(); ?>


    </section>
<!-------------
new article end
-------------->
    <?php }
    get_footer();
?>