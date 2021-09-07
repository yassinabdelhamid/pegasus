<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <title>Rea - Html Responsive Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Template by Dry Themes" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="author" content="DryThemes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="../images/favicon.png" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href='../css/clear.css' />
    <link rel="stylesheet" type="text/css" href='../css/common.css' />
    <link rel="stylesheet" type="text/css" href='../css/carouFredSel.css' />
    <link rel="stylesheet" type="text/css" href='../css/animated-headline.css' />
    <link rel="stylesheet" type="text/css" href='../css/sm-clean.css' />
    <link rel="stylesheet" type="text/css" href='../style.css' />


    <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>                
                <script src="js/respond.min.js"></script>                
        <![endif]-->

</head>

<body class="blog">

    <?php
    include('../include/doc-loader.php');
    ?>

    <div class="menu-wraper center-relative">
        <?php
        include('../include/nav.php');
        include('../include/social-media.php');
        ?>
    </div>

    <header class="header-holder center-relative relative">
        <?php include('../include/header.php'); ?>
    </header>

    <div id="blog-holder">
        <div class="blog-background"></div>
        <div class="grid">
            <div class="grid-sizer"></div>

        </div>
        <div class="clear"></div>

        <div class="block content-1170 center-relative center-text">
            <a target="_self" class="more-posts-index">
                <img src="../images/loadMoreArrow.png" alt="Load more">
            </a>
        </div>
        <img class="blog-img" src="../images/logowithfont.png" alt="">
    </div>

    <div class="clear"></div>

    <footer class="footer">
        <?php
        include('../include/footer.php');
        ?>
    </footer>

    <!--Load JavaScript-->
    <script src="../js/jquery.js"></script>
    <script src='../js/jquery.fitvids.js'></script>
    <script src='../js/jquery.smartmenus.min.js'></script>
    <script src='../js/imagesloaded.pkgd.js'></script>
    <script src='../js/isotope.pkgd.js'></script>
    <script src='../js/jquery.carouFredSel-6.0.0-packed.js'></script>
    <script src='../js/jquery.mousewheel.min.js'></script>
    <script src='../js/jquery.touchSwipe.min.js'></script>
    <script src='../js/jquery.easing.1.3.js'></script>
    <script src='../js/main-headline.js'></script>
    <script src='../js/jquery.sticky-kit.min.js'></script>
    <script src='../js/jquery.ba-throttle-debounce.min.js'></script>
    <script src='../js/jquery.nicescroll.min.js'></script>
    <script src='../js/main.js'></script>
    <script src="https://kit.fontawesome.com/e1c32b3e35.js" crossorigin="anonymous"></script>
</body>

</html>