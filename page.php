<?php 
$language = isset($_GET['lang']) && $_GET['lang'] === 'cn' ? 'cn' : 'en';
if ($language === 'cn') {
    echo '<html lang="cn">';
} else {
    echo '<html lang="en">';
}
?>
<?php get_header();
while(have_posts()) {
    the_post();?>
    <!----------
    contact page
    ------------>
      <section class="contact-container"> <!---contact container start--->
        <div class="contact-column">
            <div class="con-con">
                <div class="contact-content">
                    <h1 class="contact-content__heading <?php echo ($language === 'cn') ? 'contact-content__heading-cn' : '' ?>"><?php if($language === 'cn') {echo '请联系我们 ';} else{ echo "<i>let's</i> <strong>connect</h1></strong>";}?> <!---contact heading--->
                    <p><?php if($language === 'cn') {echo '对于所有产品或技术支持的查询,您可通过热线电话或微信与我们联系,我们将很高兴为您服务。 无论您以何种方式与我们取得联系,向我们提供您的产品序列号都有助于我们更好地服务。 ';} else{ echo "Want to know more? The NXpark team would love to discuss your next project, or answer any questions you may have.";}?></p> <!---contact text--->
                    <div class="orange-line-contact"></div> <!---border orange line--->
                </div>
                <div class="contact-media"> <!---contact media start--->
                    <p><?php if($language === 'cn') {echo '关注我们';} else{ echo " Our partners:";}?> </p>
                    <div class="logo-media-contact">
                                <a href="https://www.adenservices.com/en/" target="_blank"><img src="/wp-content/themes/nxparklastupdate/assets/Layer 2.svg" alt=""></a>
                                <a href="https://www.akila3d.com/" target="_blank"><img src="/wp-content/themes/nxparklastupdate/assets/Group 412.svg" alt=""></a>
                    </div>
                </div> <!---contact media end--->
                
                <div class="cta-contact">
                   <div class="cta-box-con">
    <div class="cta-col-con" onclick="document.querySelector('.popup-overlay').classList.add('active');">
        <img class="box-img" src="/wp-content/themes/nxparklastupdate/assets/Icon awesome-microphone-alt.svg" alt="" width="50" height=""> 
        <a class="cta-link" href="#"><p><?php if($language === 'cn') {echo '联络我们 ';} else{ echo "Talk to us";}?></p></a>
        <img class="box-img-2" src="/wp-content/themes/nxparklastupdate/assets/Component 1 – 43.svg" alt="" width="50" height="">
    </div>

    <div class="popup-overlay">
  <div class="popup">
    <span class="popup-close"onclick="document.querySelector('.popup-overlay').classList.remove('active')";>&times;</span>
    <h2><?php if($language === 'cn') {echo '让我们携手合作';} else{ echo 'Learn more';}?></h2>
    <div class="line-form"></div>
    <?php
$form_1 = '[forminator_form id="7"]'; 
$form_2 = '[forminator_form id="820"]'; 

// Tentukan bahasa yang sedang digunakan
if (isset($_GET['lang']) && $_GET['lang'] == 'cn') {
  $language = "cn"; // Bahasa Cina
} else {
  $language = "en"; // Bahasa Inggris
}

if ($language == "en") {
  $form = $form_1;
} else if ($language == "cn") {
  $form = $form_2;
}
?>

<!-- Tampilkan formulir yang telah ditentukan -->
<?php echo do_shortcode($form); ?>
  </div>
</div>
</div>

                <div class="cta-box-con">
    <div class="cta-col-con">
        <img class="box-img" src="/wp-content/themes/nxparklastupdate/assets/Icon awesome-bookmark.svg" alt="">
        <a href="#">
            <p><?php if($language === 'cn') {echo '访问我们';} else{ echo "Visit us";}?></p>
        </a>
        <img class="box-img-2" src="/wp-content/themes/nxparklastupdate/assets/Component 1 – 43.svg" alt="">
        <div class="cta-popup-con">
                <div class="cta-popup-left-con">
                    <h2><?php if($language === 'cn') {echo '访问我们';} else{ echo 'Visit us';}?></h2>
                    <div class="line-orange"></div>
                    <div class="cta-popup-box-con">
                        <img src="/wp-content/themes/nxparklastupdate/assets/Icon material-location-on.png" alt="">
                    <p><?php if($language === 'cn') {echo '中国上海市徐汇区<br>

襄阳南路218号<br>

现代大厦4楼';} else{ echo '218 Xiangyang Road South<br> Xuhui District Shanghai, China<br> Shanghai 200031, China';}?></p>
                    </div>
                 <button class="get-direction-contact"> <a href="https://www.amap.com/search?id=B0FFGY7V8Z&city=310104&geoobj=121.453074%7C31.210732%7C121.461085%7C31.21395&query_type=IDQ&query=%E5%8C%97%E4%BA%AC%E5%9F%83%E9%A1%BF%E9%85%92%E5%BA%97%E6%9C%8D%E5%8A%A1%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8%E4%B8%8A%E6%B5%B7%E7%AC%AC2%E5%88%86%E5%85%AC%E5%8F%B8&zoom=17.5"><?php if($language === 'cn') {echo '获取方向';} else{ echo 'Get Direction';}?></a></button>
                </div>
                <div class="cta-popup-right-con">
                <a href="https://www.amap.com/search?id=B0FFGY7V8Z&city=310104&geoobj=121.453074%7C31.210732%7C121.461085%7C31.21395&query_type=IDQ&query=%E5%8C%97%E4%BA%AC%E5%9F%83%E9%A1%BF%E9%85%92%E5%BA%97%E6%9C%8D%E5%8A%A1%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8%E4%B8%8A%E6%B5%B7%E7%AC%AC2%E5%88%86%E5%85%AC%E5%8F%B8&zoom=17.5"><img class="box-right" src="/wp-content/themes/nxparklastupdate/assets/Mask Group 74.png" alt=""></a>
                </div>
            </div>
    </div>
</div>
</div>
                </div>
            </div>
            <div class="contact-column">
                <div class="contact-column-right">
                    <img class="img-contact" src="/wp-content/themes/nxparklastupdate/assets/img-contact.png" alt="">
                    <img class="img-contact" src="/wp-content/themes/nxparklastupdate/assets/img-contact-2.png" alt="">
                    <img class="img-contact" src="/wp-content/themes/nxparklastupdate/assets/img-contact-3.png" alt="">
                </div>
            </div>
    </section>
    
        
    <hr class="line-bottom-contact">
    <!---------------
    contact page end
    ---------------->
<?php }
get_footer();
?>

