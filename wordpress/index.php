<?php get_header(); ?>
    <!-- banner -->
    <div class="banner-box">
        <a class="banner1" href="#">
            <div>
            <?php echo get_theme_mod( 'textarea_setting', 'default_value' ); ?>
            </div>
        </a>
    </div>
    <!-- button box -->
    <div class="container-fluid white_bg">
        <div class="button_box">
            <div class="row">
                <div class="col-md-4">
                    <button type="button" class="btn btn-info">What's on</button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-info">FAQ</button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-info">I am new</button>
                </div>
            </div>
        </div>
    </div>
    <!-- introduction -->
    <div class="jumbotron introduction white_bg">
        <div class="container-fluid">
            <p>Hi, international student!</br>
                Do you feel lonely because you do not have any friend in Australia?</br>
                Come to Crossculture! Let's make friends and meet Jesus!
            </p>
        </div>
    </div>
    <!-- about crossculture -->
    <div class="jumbotron about_Crossculture">
        <div class="container-fluid">
            <h1>Crossculture Christian Club</h1>
            <h2>Make friends and meet Jesus</h2>
            <p>We are a mix of Australians and Internationals who are passionate about the relationship we can have with God because Jesus died for us.</br>
                </br>
                Our main meeting is every Thursday night at 6:00 pm. We also have many other events and activities such as free English class, camps and girls night.
            </p>
        </div>
    </div>
    <!-- main meeting -->
    <div class="container-fluid introduction_pic_box">
        <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/meeting.jpg">
    </div>
    <div class="jumbotron introduction">
        <div class="container-fluid">
            <h2>Thursday Night Meeting</h2>
            <p>We meet Thursday night every week in ST. JUDE'S church, Carlton. In our meeting, we make friends, have dinner, study bible and have social talk with dessert!</br>
                </br>
                If you are interesting, please record the following info in your calendar:</br>
                </br>
                </br>
            </p>
            <!--         <p>
        •Time:     every Thursday 6pm</br>
        •Cost:      dinner is $5 per week </br>
                            (if it is your first time,dinner is free)</br>
        •Place:     ST. JUDE'S ANGLICAN CHURCH</br>
                            2 KEPPEL ST, CARLTON, VIC, 3053</br>
        •Agenda:</br>
        </p>  -->
            <div class="container-fluid info_table">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        •Time:
                    </div>
                    <div class="col-md-8 col-sm-6">
                        every Thursday 6pm</br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        •Cost:
                    </div>
                    <div class="col-md-8 col-sm-6">
                        dinner is $5 per week </br>
                        <span>(if it is your first time,dinner is free)</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        •Place:
                    </div>
                    <div class="col-md-8 col-sm-6">
                        ST. JUDE'S Anglican Church</br>
                        <span>2 KEPPEL ST, CARLTON, VIC, 3053</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        •Agenda:
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
                    <p>Make friends & </br> have Dinner</p>
                </div>
                <div class="col-md-4">
                    <p>7:00</p>
                    <div class="circlePic img-circle pic2"></div>
                    <p>Pray for Country & </br> Bible Study</p>
                </div>
                <div class="col-md-4">
                    <p>8:30</p>
                    <div class="circlePic img-circle pic3"></div>
                    <p>Social Talk & </br> Dessert Time</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- free English class -->
    <div class="jumbotron English_class">
        <div class="container-fluid">
            <h2>Free English class</h2>
            <p>Cannot speak English well? Want to improve your English?</br>
                At St Jude's church in Carlton (235 Palmerston Street), we are holding FREE English classes every Thursday 5-6 pm, every week of the year.
            </p>
        </div>
    </div>
    <!-- about our event -->
    <div class="jumbotron about_event">
        <div class="container-fluid">
            <h2>We have Events</h2>
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
    <div class="container-fluid  join_us hidden-xs  white_bg">
        <div class="origin_point">
            <div class="circle1 img-circle">
                <p>
                    <span>Who</span></br>
                    Can Join Us
                </p>
            </div>
            <div class="circle2 img-circle"></div>
            <div class="circle3 img-circle">
                <p>International student welcome</p>
            </div>
            <div class="circle4 img-circle">
                <p>Every school / university's student welcome</p>
            </div>
            <div class="circle5 img-circle">
                <p>All English Level welcome</p>
            </div>
            <div class="circle6 img-circle">
                <p>Christian / non-Christian welcome</p>
            </div>
        </div>
    </div>

    <!-- carousel -->
    <script src="<?php echo get_template_directory_uri();?>/js/carousel.js"></script>
<?php get_footer(); ?>
