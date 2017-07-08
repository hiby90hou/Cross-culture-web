    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?></title>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!-- link openSan font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <?php wp_head();?>  -->
</head>

<body <?php body_class();?>>
    <!-- nav -->
    <div class="container-fluid">
        <nav class="navbar my-navbar navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri();?>/images/focus.png" alt=""></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
                        <li class="my-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">What We Do<span class="caret"></span></a>
                            <ul class="my-dropdown-menu">
                                <li><a href="<?php echo get_option('home'); ?>#thursdayMeeting">Thursday Meeting</a></li>
                                <li><a href="<?php echo get_option('home'); ?>/free-english-class/">Free English class</a></li>
                                <li><a href="<?php echo get_option('home'); ?>/our-events/">Our Events</a></li>
                            </ul>
                        </li>
                        <li class="my-dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
                            <ul class="my-dropdown-menu">
                                <li><a href="<?php echo get_option('home'); ?>/about-us/">About Us</a></li>
                                <!-- <li><a href="#">Our History</a></li> -->
                                <li><a href="<?php echo get_option('home'); ?>/faq/">FAQ</a></li>
                                <li><a href="<?php echo get_option('home'); ?>/our-team/">Our Team</a></li>
                                <li><a href="<?php echo get_option('home'); ?>/bible-study-materials/">Bible Study Materials</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo get_option('home'); ?>/contact-us/">Contact Us</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo get_option('home'); ?>#getInvolvedPic">Get Involved</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>

            <div class="transBox"><?php echo do_shortcode('[prisna-google-website-translator]'); ?></div>