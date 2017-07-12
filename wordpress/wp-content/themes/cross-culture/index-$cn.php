<?php
/**
* Template Name:Chinese Home Page
*
* @package WordPress
* @subpackage Crosscultures
* @since Crosscultures 1.0
*/ 
?>

    <?php get_header();?>
    <!-- banner -->
    <div class="banner-box">
        <a class="banner1" href="#">
            <div>结交朋友
                <br> 认识耶稣</div>
        </a>
    </div>
    <!-- button box -->
    <div class="container-fluid white_bg">
        <div class="button_box">
            <div class="row">
                <div class="col-md-4">
                    <button type="button" class="btn btn-info"><a href="<?php echo get_option('home'); ?>/our-events/">新活动</a></button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-info"><a href="<?php echo get_option('home'); ?>/faq/">FAQ</a></button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-info"><a href="<?php echo get_option('home'); ?>#getInvolvedPic">我是新人</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- introduction -->
    <div class="jumbotron introduction white_bg">
        <div class="container-fluid">
            <p>Hi，你是国际留学生吗？</br>
                你想在澳洲认识一些新朋友吗？</br>
                来我们的Cross Cultures俱乐部吧！我们可以一起交友以及了解基督教！
            </p>
        </div>
    </div>
    <!-- about crossculture -->
    <div class="jumbotron about_Crossculture">
        <div class="container-fluid">
            <h1>Cross Cultures俱乐部</h1>
            <h2>由基督徒所组织</h2>
            <p>
                我们是一群由澳洲本地人和国际留学生组成的年轻人。因为想要交到新朋友以及更多的了解耶稣基督，我们聚集在一起学习圣经。</br>
                </br>
                我们会在每周四晚上6点举办定期聚会，除此之外我们也有其他的活动，比如说免费英语课，露营和女士晚会。
            </p>
        </div>
    </div>
    <!-- main meeting -->
    <div class="container-fluid introduction_pic_box" id="thursdayMeeting">
        <span></span>
        <!-- <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/meeting.jpg"> -->
    </div>
    <div class="jumbotron introduction">
        <div class="container-fluid" >
            <h2>周四晚间聚会</h2>
            <p>我们每周四都会在距离墨大很近的一个教堂见面。</br> 
            在那里，我们有潮人，酷炫的音乐，美食和有说服力的圣经讲解！</br>
                </br>
                </br>
            </p>
            <div class="container-fluid info_table">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        •时间:
                    </div>
                    <div class="col-md-8 col-sm-6">
                        每周四 6pm</br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        •费用:
                    </div>
                    <div class="col-md-8 col-sm-6">
                        每周的晚餐是 $4 每个人 </br>
                        <span>(如果你第一次来，晚餐免费)</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        •地点:
                    </div>
                    <div class="col-md-8 col-sm-6">
                        ST. JUDE'S Anglican Church</br>
                        <span>2 KEPPEL ST, CARLTON, VIC, 3053</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        •我们都在干什么:
                    </div>
                    <div class="col-md-8 col-sm-6">
                    </div>
                </div>
            </div>
        </div>
        <!-- clock -->
        <div class="container-fluid time_table">
            <div class="row">
                <div class="col-md-4">
                    <p>6:00</p>
                    <div class="circlePic img-circle pic1"></div>
                    <p>认识新朋友 & </br> 吃晚餐</p>
                </div>
                <div class="col-md-4">
                    <p>7:00</p>
                    <div class="circlePic img-circle pic2"></div>
                    <p>为各国祈祷 & </br> 学习圣经</p>
                </div>
                <div class="col-md-4">
                    <p>8:30</p>
                    <div class="circlePic img-circle pic3"></div>
                    <p>聊天 & </br> 吃甜点</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- free English class -->
    <div class="jumbotron English_class">
        <div class="container-fluid">
            <h2>免费的英语课</h2>
            <p>想提高英语吗？你可以在我们的聚会之前早来一点儿。 </br>我们在周四的5点到6点之间提供免费的英语课。</p>

            <p></br><a href="<?php echo get_option('home'); ?>/free-english-class/">更多...</a></p>
        </div>
    </div>
    <!-- about our event -->
    <div class="jumbotron about_event">
        <div class="container-fluid">
            <h2>我们的活动</h2>
            <!-- <div class="event_pic"></div> -->
            <!-- carousel for mobile devices-->
            <div class="carouselSm hidden-md hidden-lg">
                <ul class="carousel_imgs clearfix">
                    <li>
                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/carousel_5.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/carousel_1.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/carousel_2.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/carousel_3.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/carousel_4.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/carousel_5.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/carousel_1.jpg" alt=""></a>
                    </li>
                </ul>
                <ul class="carousel_index clearfix">
                    <li class='current'></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <!-- carousel for pc -->
            <div id="carousel-example-generic" class="carousel slide hidden-xs hidden-sm" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class='pc_carousel_img image_1'></div>
                    </div>
                    <div class="item">
                        <div class='pc_carousel_img image_2'></div>
                    </div>
                    <div class="item">
                        <div class='pc_carousel_img image_3'></div>
                    </div>
                    <div class="item">
                        <div class='pc_carousel_img image_4'></div>
                    </div>
                    <div class="item">
                        <div class='pc_carousel_img image_5'></div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- who can join us -->
    <div class="container-fluid  join_us white_bg">
        <div class="origin_point">
            <div class="circle1 img-circle">
                <p>
                    <span>谁</span></br>
                    能加入
                </p>
            </div>
            <div class="circle2 img-circle"></div>
            <div class="circle3 img-circle">
                <p>国际学生</p>
            </div>
            <div class="circle4 img-circle">
                <p>所有学校的学生</p>
            </div>
            <div class="circle5 img-circle">
                <p>不论英文能力高低</p>
            </div>
            <div class="circle6 img-circle">
                <p>不论是否信奉耶稣</p>
            </div>
        </div>
    </div>

    <!-- get involved -->
    <div class="container-fluid introduction_pic_box2" id="getInvolvedPic">
        <span></span>
    </div>
     <div class="jumbotron get_involved">
        <div class="container-fluid">
            <h2>快来加入！</h2>
            <div>
                <p>如果你感兴趣，可以通过以下方式联系我们:</p>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                
                <img src="<?php echo get_template_directory_uri();?>/images/crossculture-logo.png" class="img-responsive">
                <p>在这周四直接过来</p>
                <p><span>6:00PM</br>我们在 St. Jude's 教堂见面,</br> 2 Keppel St, Carlton.</br>(在墨大附近)</span></p>
                </div>

                <div class="col-md-4">
                
                <img src="<?php echo get_template_directory_uri();?>/images/facebook.png" class="img-responsive">
                <p>加我们的Facebook</br><span>上面有很多有趣的信息</span></p>
                <p><span><a href="https://www.facebook.com/crosscultures.melbourne">点我加入</a></span></p>
                </div>

                <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/images/unichurch.png" class="img-responsive">
                
                <p>周日去Unichurch</br> </p>
                <p><span>6:00PM</br>在墨尔本大学的 Eastern Resource Centre (ERC)</span></p>
                </div>
            </div>
        
        </div>
    </div>
    <!-- like us on facebook -->
    <!--     <div class="container-fluid facebook_box">
    </div> -->

    <?php get_footer();?>
        <script src="<?php echo get_template_directory_uri();?>/js/carousel.js"></script>