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
        <link rel="stylesheet" type="text/css"  href='../css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='../css/common.css' />
        <link rel="stylesheet" type="text/css"  href='../css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='../css/animated-headline.css' />        
        <link rel="stylesheet" type="text/css"  href='../css/sm-clean.css' />        
        <link rel="stylesheet" type="text/css"  href='../style.css' />

        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>                
                <script src="js/respond.min.js"></script>                
        <![endif]-->

    </head>
    <body class="page">

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
           <?php
           include('../include/header.php');
           ?>
        </header>


        <div id="content" class="site-content">
            <article>
                <div class="content-1170 center-relative">
                    <div class="one_half ">
                        <p>We choose to go to the moon in this decade and do the other things, not because they are easy.</p>
                        <p>&nbsp;</p>
                        <p>Because they are hard, because that goal will serve to organize and measure the best of our energies and skills, because that challenge is one that we are willing to accept, one we are unwilling to postpone and one.</p>
                        <p>&nbsp;</p>
                        <p>Which we intend to win. With a warning label this big, you know they gotta be fun. Bring me the forms I need to fill out to have her taken away. I decline the title of iron cook and accept the lesser title of zinc saucier, which I just made up. Dinosaurs are extinct today because they lacked opposable thumbs and the brainpower to build a space program. Houston, Tranquillity Base here.</p>
                        <p>&nbsp;</p>
                        <p>
                            <span style="color: #f375ad;">Addresse:</span>&nbsp;<strong>Unterer Rheinweg 86, 4057 Basel, Schweiz</strong>
                            <br>
                            <span style="color: #f375ad;">Tel:</span> <strong></strong>
                            <br>
                            <span style="color: #f375ad;">öffnungszeiten:</span> <strong>08:00 – 17:00</strong>
                            <br>
                        </p>
                    </div>
                    <div class="one_half last">
                        <div class="contact-form">                            
                            <p><input id="name" type="text" name="your-name" placeholder="Name"></p>
                            <p><input id="contact-email" type="email" name="your-email" placeholder="Email"></p>
                            <p><input id="subject" type="text" name="your-subject" placeholder="Subject"></p>
                            <p><textarea id="message" name="your-message" placeholder="Message"></textarea></p>
                            <p><input type="submit" onClick="SendMail()" value="SEND"></p>                                 
                        </div>      
                    </div>
                    <div class="clear"></div>
                </div>
            </article>


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