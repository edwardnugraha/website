<?php 
$language = isset($_GET['lang']) && $_GET['lang'] === 'cn' ? 'cn' : 'en';
if ($language === 'cn') {
    echo '<html lang="cn">';
} else {
    echo '<html lang="en">';
}
?>

<footer>
        <div class="container">
                <div class="footer-site"> <!---footer start--->
                    <div class="footer-block">
                        <div class="footer-left">
                        <a <?php if(is_home('')) echo 'class="activ"'?>class="" href="<?php echo home_url('')?>"> <img class="icon-footer" src="/wp-content/themes/nxparklastupdate/assets/logo.svg" alt=""></a><!---logo--->
                            
                            <div class="address"><!---address--->
                                <img class="icon-location"src="/wp-content/themes/nxparklastupdate/assets/Icon material-location-on.svg" alt=""> <!---icon address--->
                                <p><?php if($language === 'cn') {echo '中国上海市徐汇区<br>

襄阳南路218号<br>

现代大厦4楼';} else{ echo '218 Xiangyang Road South<br> Xuhui District Shanghai, China<br> Shanghai 200031, China';}?> </p>
                            </div><!---address end--->
                            
                            <div class="email"> <!---email--->
                                <img class="icon-email"src="/wp-content/themes/nxparklastupdate/assets/Icon material-email.svg" alt=""> <!---icon email--->
                                <p>info@nx-park.com</p>
                            </div><!---email end--->
                        
                        </div>
                        <div class="footer-right">
                            <div class="footer-nav"> <!---footer nav static--->
                                <p><?php if($language === 'cn') {echo '<strong>公司</strong>';} else{ echo '<strong>Company</strong>';}?> </p>
                                <p><?php if($language === 'cn') {echo '关于';} else{ echo 'About Us';}?></p>
                                <p><?php if($language === 'cn') {echo '高层';} else{ echo 'Leadership';}?> </p>
                            </div>
                            <div class="footer-nav">
                                <p><?php if($language === 'cn') {echo '<strong>资源 </strong>';} else{ echo '<strong>Resources</strong>';}?></p>
                                <p><?php if($language === 'cn') {echo '文章';} else{ echo 'Blog';}?> </p>
                                <p><?php if($language === 'cn') {echo '活动';} else{ echo 'Events';}?></p>
                            </div>
                            <div class="footer-nav">
                                <p><?php if($language === 'cn') {echo '<strong>支持</strong>';} else{ echo '<strong>Support</strong>';}?></p>
                                <p><?php if($language === 'cn') {echo '客服';} else{ echo 'Customer Support';}?></p>
                                <p><?php if($language === 'cn') {echo '联系';} else{ echo 'Contact Us';}?></p>
                            </div><!---footer nav static end--->
                            
                            <div class="footer-nav-2"><!---footer nav link--->
                                <p><a href="#"><?php if($language === 'cn') {echo '服务';} else{ echo 'Our Services';}?></a></p>
                                <p><a href="#"><?php if($language === 'cn') {echo '文章';} else{ echo 'Our Clients';}?></a></p>
                                <p><a href="#"><?php if($language === 'cn') {echo '优势';} else{ echo 'Why NXPark';}?> </a></p>
                                <p><a href="#">BIM BAM BOOM</a></p>
                                <p><a href="#"><?php if($language === 'cn') {echo '文章';} else{ echo 'Articles';}?> </a></p>
                                <p><a <?php if(is_page('contact')) echo ''?>class="" href="<?php echo add_query_arg('lang', $language, site_url('contact')) ?>"><?php if($language === 'cn') {echo '联系';} else{ echo 'Contact us';}?></a></p>
                            </div><!---footer nav link end--->
                        </div>
                    </div>
                    <div class="footer-block">
                        <div class="logo-media">
                            <div class="copyright-text"><!---social media--->
                              <a href="https://www.adenservices.com/en/" target="_blank"><img src="/wp-content/themes/nxparklastupdate/assets/Layer 2.svg" alt=""></a>
                              <a href="https://www.akila3d.com/" target="_blank">  <img src="/wp-content/themes/nxparklastupdate/assets/Group 412.svg" alt=""></a>
                             </div><!---social media end--->
                        
                                <div class="social-icons"> <!---logo--->
                                  <img src="/wp-content/themes/nxparklastupdate/assets/green-building.svg" alt="">
                                  <img src="/wp-content/themes/nxparklastupdate/assets/logo-net-zero.svg" alt="">
                                  <img src="/wp-content/themes/nxparklastupdate/assets/green-building-label.svg" alt="">
                                  <img src="/wp-content/themes/nxparklastupdate/assets/Image 24.png" alt="">
                                </div>  <!---logo end--->
                        </div>
                    </div>
                        
                    <div class="footer-block">
                        <p class="text-copy-right">©2023 NXPark. All Rights Reserved</p>
                        <div class="text-terms">
                            <a <?php if(is_page('terms-of-use')) echo 'class="aktif"'?>class="" href="<?php echo site_url('terms-of-use')?>">Terms| <?php if(is_page('terms-of-use')) echo ''?></a>  
                            <a <?php if(is_page('privacy-policy')) echo 'class="aktif"'?>class="" href="<?php echo site_url('privacy-policy')?>">Privacy policy| <?php if(is_page('privacy-policy')) echo ''?></a> 
                            <a href="#">Cookie Settings</a> </div>
                    </div>
                </div> <!---footer end--->
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>