<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head;
any other head content must come *after* these tags -->
    <title>
    <?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "Results"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo 'Page not found!';
    } else {
        wp_title('',true);
    } ?>
    </title>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!-- link openSan font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]> 
 	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> 
 	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo get_template_directory_uri();?>/lib/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="<?php echo get_template_directory_uri();?>/lib/js/bootstrap.min.js"></script> -->
    
    <style>
        <?php $h1_color = get_option('h1_color'); ?>
        .jumbotron .h1, .jumbotron h1 {
            color:  <?php echo $h1_color; ?> ;
        }

        <?php if ( get_theme_mod( 'banner_image' ) ) : ?>
        .banner1 {
            background-image: url(<?php echo esc_url( get_theme_mod( 'banner_image' ) ); ?>);
        }

        <?php endif; ?>

        .admin-bar .navbar-fixed-top {
            top: 32px;
        }
        .customize-partial-icon-setting_id

    </style>

<?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
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
                        <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri();?>/images/focus.png" alt=""></a> </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
                        <li class="my-dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">What We Do<span class="caret"></span></a>
                            <ul class="my-dropdown-menu">
                                <li><a href="#">Thursday Meeting</a></li>
                                <li><a href="index.php/facebook/">Our Events</a></li>
                            </ul>
                        </li>
                        <li class="my-dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
                            <ul class="my-dropdown-menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our History</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Bible Study Materials</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Get Involved</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
