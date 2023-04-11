<?php get_header();
?>
<?php 
$language = isset($_GET['lang']) && $_GET['lang'] === 'cn' ? 'cn' : 'en';
if ($language === 'cn') {
    echo '<html lang="cn">';
} else {
    echo '<html lang="en">';
}
?>
<!----------------------------------
        Animation Slider
------------------------------------>

 <div class="second-container">
       <div class="left-line">
          <div class="line-center">
            <div id="progressbar"></div>
          </div>
        </div>
      <div class="main-content">
        <div class="gray-box">
          <div class="box-content">
            <div class="box-text">
            <img class="img-content" src="/wp-content/themes/nxparklastupdate/assets/Picture 1.png" alt=""></div>
            <div class="box-text">
              <h2 class="box-text-heading <?php echo ($language === 'cn') ? 'box-text-heading-cn' : '' ?>"><?php if($language === 'cn') {echo '覆盖全中国的 一站式服务';} else{ echo 'Turn-key China offer';}?> </h2>
              <div class="line-orange"></div>
              <p class="box-content-text <?php echo ($language === 'cn') ? 'box-content-text-cn' : '' ?>"><?php if($language === 'cn') {echo '快速、灵活和深根本土的专业经验，助您在中国的任何地方安心地大展拳脚';} else{ echo 'Speed, flexibility and regional expertise allow you to open anywhere in China.';}?>  </p>
                <a href="#scrolltext1">
                <button><?php if($language === 'cn') {echo '了解更多';} else{ echo 'Learn more';}?></button></a>
            </div>
          </div>
          <div class="box-content">
            <div class= "box-text">
            <img class="img-content" src="/wp-content/themes/nxparklastupdate/assets/Picture 3.png" alt=""> </div>
            <div class="box-text">
              <h2 class="box-text-heading <?php echo ($language === 'cn') ? 'box-text-heading-cn' : '' ?>"><?php if($language === 'cn') {echo '数字化生产力';} else{ echo 'Digitalization';}?></h2>
              <div class="line-orange"></div>
              <p class="box-content-text <?php echo ($language === 'cn') ? 'box-content-text-cn' : '' ?> "><?php if($language === 'cn') {echo '优化建筑资产和物流的全生命周期，实现数字化管理';} else{ echo 'Digitalize and optimize the full lifecycle of your built assets and logistics.';}?> </p>
                <a href="#scrolltext3">
                <button><?php if($language === 'cn') {echo '了解更多';} else{ echo 'Learn more';}?></button></a>
            </div>
          </div>
        </div>
        <div class="line-content">
          <div class="line-center">
            <div id="progressbar"></div>
          </div>
        </div>
        <div class="gray-box">
          <div class="box-content-2">
            <div class="box-text">
              <h2 class="box-text-heading-2 <?php echo ($language === 'cn') ? 'box-text-heading-2-cn' : '' ?>"><?php if($language === 'cn') {echo 'ESG加速器';} else{ echo 'ESG accelerator';}?></h2>
              <div class="line-orange"></div>
              <p class="box-content-text-2 <?php echo ($language === 'cn') ? 'box-content-text-2-cn' : '' ?>"><?php if($language === 'cn') {echo '不间断地收集净零排放设施的数据，高效实现ESG目标';} else{ echo 'Achieve ESG targets in 
                net-zero facilities with continuous data collection.';}?> </p>
                <a href="#scrolltext2">
                <button><?php if($language === 'cn') {echo '了解更多';} else{ echo 'Learn more';}?></button></a>
            </div>
            <div class="box-text">
            <img class="img-content-2" src="/wp-content/themes/nxparklastupdate/assets/Boardroom image.png" alt=""></div>
          </div>
          <div class="box-content-2">
            <div class="box-text">
              <h2 class="box-text-heading-2 <?php echo ($language === 'cn') ? 'box-text-heading-2-cn' : '' ?>"><?php if($language === 'cn') {echo '资本性支出';} else{ echo 'Capex investment';}?></h2>
              <div class="line-orange"></div>
              <p class="box-content-text-2 <?php echo ($language === 'cn') ? 'box-content-text-2-cn' : '' ?>"><?php if($language === 'cn') {echo '可以翻译为 "提供全额资本支出融资，为您的项目提供财务便利和灵活性。';} else{ echo 'Financial ease and flexibility with full capex financing on your site.';}?></p>
                <a href="#content4">
                <button><?php if($language === 'cn') {echo '了解更多';} else{ echo 'Learn more';}?> </button></a>
            </div>
            <div class="box-text">
            <img class="img-content-2" src="/wp-content/themes/nxparklastupdate/assets/picture 4.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
<!----------------------------------
        Animation Slider End
------------------------------------>

<!----------------------------------
        Working With Us
------------------------------------>
    <div class="container">
        <h1 class="logo-heading <?php echo ($language === 'cn') ? 'logo-heading-cn' : '' ?>"><?php if($language === 'cn') {echo 'NXpark 生态系统';} else{ echo 'NXpark ecosystem';}?></h1>
        <div class="logo-company">
            <img class="img-logo" src="/wp-content/themes/nxparklastupdate/assets/Normal Logo (5).png" alt=""  width="50" height="">
            <img class="img-logo" src="/wp-content/themes/nxparklastupdate/assets/Normal Logo (1).png" alt="">
            <img class="img-logo" src="/wp-content/themes/nxparklastupdate/assets/Normal Logo (6).png" alt=""  width="50" height="">
            <img class="img-logo" src="/wp-content/themes/nxparklastupdate/assets/Normal Logo (2).png" alt=""  width="50" height="">
            <img class="img-logo" src="/wp-content/themes/nxparklastupdate/assets/Normal Logo (3).png" alt=""  width="50" height="">
            <img class="img-logo" src="/wp-content/themes/nxparklastupdate/assets/Normal Logo (4).png" alt=""  width="50" height="">
        </div>
    </div>
    
<!----------------------------------
        Working with us End
------------------------------------>

<!----------------------------------
        Map Section
------------------------------------>
<div class="map-container"> <!----map container--->
    <section class="map"> <!---map section --->
        <div class="map-container-2"> <!--map container 2--->
            <div class="map-item">
                <div class="map-heading"> <!---heading--->
                    <h2 class="heading-left <?php echo ($language === 'cn') ? 'heading-left-cn' : '' ?>"><?php if($language === 'cn') {echo '智慧、可持续和适应<br>
气候的物业资产';} else{ echo 'Property born smart, sustainable & climate resilient';}?> </h2>
                    <div class="orange-line"></div>
                    <p class="text-left <?php echo ($language === 'cn') ? 'text-left-cn' : '' ?>"><?php if($language === 'cn') {echo 'NXpark 的服务涵盖物业开发和数据科技，并确保设施响应任何气候条件。<br><br> NXpark在中国的发展中物业达100万平米，我们以一站式的模式交付全面数字化的工业地产，使您的物业在竞争极为激烈的市场中具备坚实的财务韧性，并能够适应多变的气候环境。NXpark由在设施领域具有25年经验的埃顿集团领导，由数字孪生平台Akila提供技术支持，帮助您实现建筑资产全生命周期的优化。';} else{ echo 'NXpark lives where property development, data technology and climate action meet. <br><br>
With 1M sqm of China property in development, NXpark offers
fully digitalized turn key industrial real estate, designed for environmental and financial resilience in an era of climate disruption and intensifying demands. We are backed by Aden Group’s 25 year history in the facilities sector and powered by Akila, the digital twin platform enabling us to optimize the full lifecycle of your built assets.';}?></p>
                </div>
                <div class="map-heading"> <!---Map Image--->
                    <img class="img-right" src="/wp-content/themes/nxparklastupdate/assets/Map.png" alt=""  width="50" height="">
                </div>
            </div>
            
<!----Why NXpark start--->
            <h2 class="heading-left <?php echo ($language === 'cn') ? 'heading-left-cn' : '' ?>"><?php if($language === 'cn') {echo '你的NX工业化解决方案';} else{ echo 'Your NX industrial solution';}?></h2>
            <div class="orange-line-2"></div>
            <div class="nx-items-column"> <!---column top--->
                <div class="nx-item">
                <div class="nx-column"> <!--column icon top---->
                 <img class="img-column" src="/wp-content/themes/nxparklastupdate/assets/Icon  (10).png" alt="icon"width="50" height="">
                    <div class="nx-item-col">
                        <div class="nx-item-arrow">
                            <img  class="img-arrow" src="/wp-content/themes/nxparklastupdate/assets/Component 1 – 2.svg" alt=""width="50" height="">
                        </div>
                        <div class="nx-item-text">
                        <h2><?php if($language === 'cn') {echo 'ESG表现，<br>一气呵成 ';} else{ echo 'Streamlined <br>ESG performance';}?> </h2>
                        </div>
                    </div>
                    <p class="column-text <?php echo ($language === 'cn') ? 'column-text-cn' : '' ?>"><?php if($language === 'cn') {echo '通过Akila系统，自动 化全部ESG数据收集和 报告工作。';} else{ echo 'Automate full ESG data collection & reporting collection through our operating platform, Akila.';}?> </p>
                </div>
                <div class="nx-column">
                                            <img class="img-column" src="/wp-content/themes/nxparklastupdate/assets/Icon  (3).png" alt="icon"width="50" height="">
                    <div class="nx-item-col">
                        <div class="nx-item-arrow">
                            <img class="img-arrow" src="/wp-content/themes/nxparklastupdate/assets/Component 1 – 2.svg" alt=""width="50" height="">
                        </div>
                        <div class="nx-item-text">
                        <h2><?php if($language === 'cn') {echo '气候因素，<br>韧性响应';} else{ echo 'Climate <br>resilience';}?></h2>
                        </div>
                    </div>
                    <p class="column-text <?php echo ($language === 'cn') ? 'column-text-cn' : '' ?>"><?php if($language === 'cn') {echo '即使建筑的外部环境和内 在需求变得极端，设施仍 能高效运转。';} else{ echo 'Buildings designed to excel even as conditions & demands on buildings grow more extreme.';}?> </p>
                </div>
                <div class="nx-column">
                    <img class="img-column" src="/wp-content/themes/nxparklastupdate/assets/Icon  (8).png" alt="icon"width="50" height="">
                    <div class="nx-item-col">
                        <div class="nx-item-arrow">
                            <img class="img-arrow" src="/wp-content/themes/nxparklastupdate/assets/Component 1 – 2.svg" alt=""width="50" height="">
                        </div>
                        <div class="nx-item-text">
                        <h2><?php if($language === 'cn') {echo 'BIM和数字孪生， <br>

技术平台全面加持';} else{ echo 'BIM & digital<br> twin platform';}?>  </h2>
                        </div>
                    </div>
                    <p class="column-text <?php echo ($language === 'cn') ? 'column-text-cn' : '' ?>"><?php if($language === 'cn') {echo '货真价实的3D建筑设计，使建设施工更高效并掌握 24小时不间断的运营数据。';} else{ echo ' A single source of truth for 3D design of your buildings more efficient construction and 24/7 operational data.';}?> </p>
                </div>
                <div class="nx-column">
                                           <img class="img-column" src="/wp-content/themes/nxparklastupdate/assets/Icon  (4).png" alt="icon"width="50" height="">
                    <div class="nx-item-col">
                        <div class="nx-item-arrow">
                            <img class="img-arrow" src="/wp-content/themes/nxparklastupdate/assets/Component 1 – 2.svg" alt=""width="50" height="">
                        </div>
                        <div class="nx-item-text">
                        <h2><?php if($language === 'cn') {echo '设施运维，<br>以人为本';} else{ echo 'Human-centric <br>facilities';}?> </h2>
                        </div>
                    </div>
                    <p class="column-text <?php echo ($language === 'cn') ? 'column-text-cn' : '' ?>"><?php if($language === 'cn') {echo '打造注重便利性、舒适性和健康性的智慧场所，实现以人和身心健康为中心。';} else{ echo 'Put people and wellness at the center with smart spaces prioritizing convenience, comfort & wellness.';}?> </p>
                </div> <!---end column icon--->
            </div>

        <!----start column bottom---->
            <div class="nx-items-column">
                <div class="nx-item">  <!--column icon bottom---->
                    <div class="nx-column"> 
                        <img class="img-column" src="/wp-content/themes/nxparklastupdate/assets/Icon  (1).png" alt="icon"width="" height="">
                        <div class="nx-item-col">
                            <div class="nx-item-arrow">
                                <img class="img-arrow" src="/wp-content/themes/nxparklastupdate/assets/Component 1 – 2.svg" alt=""width="50" height="">
                            </div>
                            <div class="nx-item-text">
                                <h2><?php if($language === 'cn') {echo '更敏捷';} else{ echo 'Greater <br> agility';}?></h2>
                            </div>
                        </div>
                        <p class="column-text <?php echo ($language === 'cn') ? 'column-text-cn' : '' ?>"><?php if($language === 'cn') {echo '为当前和未来需求而定制的一站式服务和零资本性支出解决方案。';} else{ echo 'Turn key and zero capex solutions customizable for current needs & future growth.';}?> </p>
                    </div>
                    <div class="nx-column">
                        <img class="img-column" src="/wp-content/themes/nxparklastupdate/assets/Icon  (9).png" alt="icon" width="50" height="">
                        <div class="nx-item-col">
                            <div class="nx-item-arrow">
                                <img class="img-arrow" src="/wp-content/themes/nxparklastupdate/assets/Component 1 – 2.svg" alt=""width="" height="">
                            </div>
                            <div class="nx-item-text">
                                <h2><?php if($language === 'cn') {echo '更高效';} else{ echo 'Operational <br> efficiency';}?>  </h2>
                            </div>
                        </div>
                        <p class="column-text"><?php if($language === 'cn') {echo '以资产为核心的数字化运维和后勤管理，实现设施性能和资产可靠性最大化。';} else{ echo 'Maximize performance and asset reliability through digitalized, asset centric maintenance & logistics.';}?> </p>
                    </div>
                    <div class="nx-column">
                        <img class="img-column" src="/wp-content/themes/nxparklastupdate/assets/Icon  (2).png" alt="icon"width="" height="">
                        <div class="nx-item-col">
                            <div class="nx-item-arrow">
                                <img class="img-arrow" src="/wp-content/themes/nxparklastupdate/assets/Component 1 – 2.svg" alt=""width="" height="">
                            </div>
                            <div class="nx-item-text">
                                <h2><?php if($language === 'cn') {echo '更清晰，更迅速';} else{ echo 'Cleaner, faster <br>construction';}?> </h2>
                            </div>
                        </div>
                        <p class="column-text <?php echo ($language === 'cn') ? 'column-text-cn' : '' ?>"><?php if($language === 'cn') {echo 'BIM软件和专业工程团队作后盾，工程进度更快，成本更低，浪费更少。';} else{ echo 'Better timelines and costs, with far less waste. Powered by BIM software and experienced engineering teams.';}?> </p>
                    </div>
                    <div class="nx-column">
                        <img class="img-column"src="/wp-content/themes/nxparklastupdate/assets/Icon  (7).png" alt="icon" width="50" height="">
                        <div class="nx-item-col">
                            <div class="nx-item-arrow">
                                <img class="img-arrow" src="/wp-content/themes/nxparklastupdate/assets/Component 1 – 2.svg" alt=""width="50" height="">
                            </div>
                            <div class="nx-item-text">
                                <h2><?php if($language === 'cn') {echo '更懂中国';} else{ echo 'Regional <br>expertise';}?>  </h2>
                            </div>
                        </div>
                        <p class="column-text <?php echo ($language === 'cn') ? 'column-text-cn' : '' ?>"><?php if($language === 'cn') {echo '我们深入中国，具有长 达25年扎实的工业园区、设施和建设经验。';} else{ echo 'We are backed by 25 years experience in China’s industrial, facilities & construction sector.';}?> </p>
                    </div>
                </div>  
            </div>
        </div> <!--end map container 2 -->
    </section> <!--end map section--->
    </div> <!---end map container---->

<!----------------------------------
       End Map Section
------------------------------------>
    
<!----------------------------------
        Our Vision Section
------------------------------------>
    <div class="scroll-container" id = "scroll-container">
     <div id = 'scrollSection' class =  'scrollSection container-section'>
      <div class="vision">
        <h2><?php if($language === 'cn') {echo '万事俱佳的  物业场地、
合作伙伴和工具资源';} else{ echo 'The place, the tools, the guarantee';}?> </h2>
         <div class="orange-line-vision"></div>
        <p><?php if($language === 'cn') {echo 'NXpark（隶属于埃顿）以全方位的资源和工具，祝您加速工业转型，实现数据治理和ESG目标。';} else{ echo 'NXpark by Aden offers a complete toolkit for accelerated industrial transformation, centered on data and ESG.';}?> </p>
       </div>
       </div>
        <div class="carousel-container">
            <div class="container-section">
                <div id="carousel">
                <div class = 'image-container'>
                <div class="scroll-content">
                    <div class="box" id="scrolltext1">
                        <h2 class="header-slide <?php echo ($language === 'cn') ? 'header-slide-cn' : '' ?>"><?php if($language === 'cn') {echo '轻松选址和一<br>
站式解决方案';} else{ echo 'Find the best location & <br>enjoy turn key solutions';}?></h2>
                            <div class="orange-line-left"></div>
                        <p class="text-slide <?php echo ($language === 'cn') ? 'text-slide-cn' : '' ?>"><?php if($language === 'cn') {echo 'NXpark以埃顿的专家网络和在中国的25
年工业设施专业经验为基石，集结资历
丰富的专家为您的工业和物流需求匹
配最优物业，帮助您以最短的时间，
找到最为适合的场地设施。';} else{ echo 'Benefit from our localized knowledge and industry expertise to seal the optimal deal and open for business in record time. Backed by our partner Aden’s network and 25 years operating industrial facilities in China, NXpark helps you scout, secure and open the ideal location based on your industrial and logistical needs. ';}?></p>
                        <a href="<?php echo add_query_arg('lang', $language, site_url('contact')) ?>" class="blog-slider__button"><?php if($language === 'cn') {echo '联系我们';} else{ echo 'Contact us';}?><img src="/wp-content/themes/nxparklastupdate/assets/Group 746.png" alt=""width="50" height=""></a>
                    </div>
                    
                <div class="box">
                    <img src="/wp-content/themes/nxparklastupdate/assets/Group 745.png"alt=" image" class="scroll-img list" id = 'scroll1' width="50" height="">
                </div> 
            </div>        
            </div>
            <div class = 'image-container'>
                <div class="scroll-content-2">
                    <div class="box">
                <img class="img-text-left" src="/wp-content/themes/nxparklastupdate/assets/Indoor Space 1.png" alt=" image"  class="scroll-img list" id = 'scroll2' width="50" height="">
            </div>  
                    <div class="box" id="scrolltext2">
                        <h2 class="header-slide-right <?php echo ($language === 'cn') ? 'header-slide-right-cn' : '' ?>"><?php if($language === 'cn') {echo '透明运维，24小<br>时不间断性能监测';} else{ echo 'Transparency & 24/7 <br>performance tracking';}?> </h2>
                        <div class="line-right"></div>
                        <p class="text-slide-right <?php echo ($language === 'cn') ? 'text-slide-right-cn' : '' ?>"><?php if($language === 'cn') {echo '基于Akila尖端平台，我们对建成环境进行全程数据跟踪和优化。我们为全部建筑提供完整可追溯的数据，强化运维的透明度，并通过分析功能和控制面板使您掌握运营、财务和环境各方面的表现。';} else{ echo "We are powered by Akila's cutting-edge platform for full data tracking & optimization of the built environment. We provide a comprehensive, single source of truth for all building data, enhancing transparency and providing analytics and  dashboards for insightful analysis of operational, financial, and environmental performance ";}?> </p>
                        <a href="<?php echo add_query_arg('lang', $language, site_url('contact')) ?>" class="blog-slider-right__button"><?php if($language === 'cn') {echo '联系我们';} else{ echo 'Contact us';}?><img src="/wp-content/themes/nxparklastupdate/assets/Group 746.png" alt=""></a>
                    </div>  
                </div>    
            </div>
            <div class = 'image-container'>
                <div class="scroll-content">
                    <div class="box" id="scrolltext3">
                        <h2 class="header-slide <?php echo ($language === 'cn') ? 'header-slide-cn' : '' ?>"><?php if($language === 'cn') {echo '数据自动化，确保合<br>规和满足ESG治理目标';} else{ echo 'Automate data to lock in <br> compliance and ESG reporting';}?> </h2>
                        <div class="orange-line-left"></div>
                        <p class="text-slide <?php echo ($language === 'cn') ? 'text-slide-cn' : '' ?>"><?php if($language === 'cn') {echo '基于Akila尖端平台，我们对建成环境进行全程数据跟踪和优化。<br>我们为全部建筑提供完整可追溯的数据，强化运维的透明度，并通过分析功能和控制面板使您掌握运营、财务和环境各方面的表现。';} else{ echo 'A end-to-end data trail for your entire facility, ensuring that you meet and exceed any regulatory needs. NXpark facilities enjoy internationally recognized certifications including LEED, China Green Star, and HQE. NXpark is also the world’s first industrial site to insure its net-zero performance through partnership with ZhongAn Insurance.';}?></p>
                        <a href="<?php echo add_query_arg('lang', $language, site_url('contact')) ?>" class="blog-slider__button"><?php if($language === 'cn') {echo '联系我们';} else{ echo 'Contact us';}?><img src="/wp-content/themes/nxparklastupdate/assets/Group 746.png" alt=""></a>
                    </div>
                    <div class="box">
                        <img src="/wp-content/themes/nxparklastupdate/assets/Edited - Boardroom test.png" alt=" image"  class="scroll-img list" id = 'scroll3' width="50" height="">
                    </div> 
                </div>           
            </div>
                </div>
            </div>
            <div class="blog-slider__dots">
    <span class="dot" data-slide="1"></span>
    <span class="dot" data-slide="2"></span>
    <span class="dot" data-slide="3"></span>
    </div>
        </div>
        </div>

  <div class="container">
        <div id="content4" class="vision-item"> <!---static content--->
                <div class="column-vision">
                    <img class="img-left"src="/wp-content/themes/nxparklastupdate/assets/ezgif.com-video-to-gif.gif" alt="" width="50" height="">
                </div>
                <div class="column-vision">
                    <h2 class="heading-right <?php echo ($language === 'cn') ? 'heading-right-cn' : '' ?>"><?php if($language === 'cn') {echo '万事俱佳的  物业场地、
合作伙伴和工具资源';} else{ echo 'Optimize the full <br>property lifecycle';}?></h2> 
                    <div class="orange-line-right"></div>
                    <p class="text-right <?php echo ($language === 'cn') ? 'text-right-cn' : '' ?>"><?php if($language === 'cn') {echo '建筑不是冰冷的躯壳，它是充满生命力和效能的资产。
我们的平台将不断为您追踪、自动化和优化建筑在生命周期各阶段的表现。通过在设计建造阶段采纳BIM软件，
和在运营维护阶段采纳数字孪生技术来提升效率和实现ESG自动化，NXpark为具有长期价值和效能的物业提供高效的数字化管理服务。';} else{ echo 'A building is more than a shell - it is a living, working entity whose lifespan can be optimized, tracked and automated through our platform. NXpark manages and digitalizes the entire property lifecycle for building that generate long-term value and performance from design and construction in BIM software to operational efficiency and automated ESG reporting through digital twin.';}?></p>
                    <a class="learn-right" href="<?php echo add_query_arg('lang', $language, site_url('contact')) ?>"><?php if($language === 'cn') {echo '联系我们';} else{ echo 'Contact us';}?>  <img src="/wp-content/themes/nxparklastupdate/assets/Group 746.png" alt="" width="50" height="">  </a>
                </div>
            </div> 
  </div>
    
<!----------------------------------
       End Our Vision Section
------------------------------------>

<!----------------------------------
       News Section
------------------------------------>
    <section class="news">
        <div class="container">
            <div>
                <h1 class="news-heading"><?php if($language === 'cn') {echo '新闻';} else{ 'News';}?> </h1>
            </div>
</div>
<div class="featureSlide">
  <div class="swiper-wrapper">
    <?php 
    while (have_posts()) {
      the_post(); 
      $categories = get_the_category();
      $show_post = false;
      foreach ($categories as $category) {
        if (($language === 'en' && $category->name === 'English') || ($language === 'cn' && $category->name === 'Chinese')) {
          $show_post = true;
          break;
        }
      }
      if ($show_post) {
    ?>
    <div class="swiper-slide">
      <a href="<?php echo add_query_arg( 'lang', $language, get_permalink() ); ?>"><?php the_post_thumbnail('small', array('class' => 'img-news'));?></a>
      <h2 class="article-heading"><a href="<?php echo add_query_arg( 'lang', $language, get_permalink() ); ?>"><?php the_title();?></a></h2>
      <div class="blue-line"></div>
      <p><?php the_time('M j, Y')?></p>                   
    </div>
    <?php
      }
    }
    ?>
  </div>
</div>




            <div class="container">
            <div class="call-to-action"> <!--call to action start--->
                <div class="call-to-action-side">
                    <div class="cta-right"> <!---right side--->
                        <h1><?php if($language === 'cn') {echo '采取行动';} else{ echo 'Take the NX step';}?></h1>
                        <p><?php if($language === 'cn') {echo 'NXpark帮助企业进行工业转型，如果您对我们的解决方案感兴趣，请联系我们的团队，或者来您附近的NXpark所在地';} else{ echo ' Learn more about how NX can help in your industrial transformation. Meet our team or come to visit a NXpark site near you.';}?></p>
                    </div><!---right side end--->
                </div>
                <div class="call-to-action-side-3">
<div class="call-to-action-side-2">
  <div class="cta-left">
    <div class="cta-box" onclick="document.querySelector('.popup-overlay').classList.add('active');">
      <img class="box-img" src="/wp-content/themes/nxparklastupdate/assets/Icon awesome-microphone-alt.svg" alt="" width="50" height=""> 
      <a class="cta-link" href="#"><p><?php if($language === 'cn') {echo '联络我们';} else{ echo 'Talk to us';}?> </p></a>
      <img class="box-img-2" src="/wp-content/themes/nxparklastupdate/assets/Component 1 – 43.svg" alt="" width="50" height="">
    </div>
  </div>
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






                    <div class="call-to-action-side-2">
    <div class="cta-left">
        <div class="cta-box">
            <img class="box-right" src="/wp-content/themes/nxparklastupdate/assets/Icon awesome-bookmark.svg" alt="" width="50" height="">
           <a href="#"><p><?php if($language === 'cn') {echo '访问我们';} else{ echo 'Visit us';}?> </p></a>
            <img class="box-img-2" src="/wp-content/themes/nxparklastupdate/assets/Component 1 – 43.svg" alt="" width="50" height="">
            <div class="cta-popup">
                <div class="cta-popup-left">
                    <h2><?php if($language === 'cn') {echo '访问我们';} else{ echo 'Visit us';}?></h2>
                    <div class="line-orange"></div>
                    <div class="cta-popup-box">
                        <img src="/wp-content/themes/nxparklastupdate/assets/Icon material-location-on.png" alt="">
                    <p><?php if($language === 'cn') {echo '中国上海市徐汇区<br>

襄阳南路218号<br>

现代大厦4楼';} else{ echo '218 Xiangyang Road South<br> Xuhui District Shanghai, China<br> Shanghai 200031, China';}?></p>
                    </div>
                 <button class="get-direction"> <a href="https://www.amap.com/search?id=B0FFGY7V8Z&city=310104&geoobj=121.453074%7C31.210732%7C121.461085%7C31.21395&query_type=IDQ&query=%E5%8C%97%E4%BA%AC%E5%9F%83%E9%A1%BF%E9%85%92%E5%BA%97%E6%9C%8D%E5%8A%A1%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8%E4%B8%8A%E6%B5%B7%E7%AC%AC2%E5%88%86%E5%85%AC%E5%8F%B8&zoom=17.5"><?php if($language === 'cn') {echo '获取方向';} else{ echo 'Get Direction';}?> </a></button>
                </div>
                <div class="cta-popup-right">
                <a href="https://www.amap.com/search?id=B0FFGY7V8Z&city=310104&geoobj=121.453074%7C31.210732%7C121.461085%7C31.21395&query_type=IDQ&query=%E5%8C%97%E4%BA%AC%E5%9F%83%E9%A1%BF%E9%85%92%E5%BA%97%E6%9C%8D%E5%8A%A1%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8%E4%B8%8A%E6%B5%B7%E7%AC%AC2%E5%88%86%E5%85%AC%E5%8F%B8&zoom=17.5"><img class="box-right" src="/wp-content/themes/nxparklastupdate/assets/Mask Group 74.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div> <!--call to action end--->
            </div>
    </section>
    
<!----------------------------------
       End News Section
------------------------------------>

<?php get_footer(); ?>