<?php require("contact.php"); require("portfolio-items.php"); ?>
<!DOCTYPE html>
<html class=".tk-ff-meta-serif-web-pro">
<head>
    <title>Luke Tully's Portfolio - Interior Touches</title>
    <meta name="description" content="I work to build websites with a focus on good design, usability, and performance. Currently available to work, I'd be happy to discuss your project." />
    <link rel="stylesheet" href="css/base.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/modules.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/state.css" type="text/css" media="screen">
    <meta name="viewport" content="user-scalable = no">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"><!--<script src="js/gridset-overlay.js" type="text/javascript">
</script><script src="viewport_bookmarklet.min.js" type="text/javascript">
</script>-->
<script src="js/ie8classlistshim.js" type="text/javascript"></script>
</head>
<body>
    <div id="page-wrapper">
        <header id="masthead">
            <h2 id="intro">I work to build websites with a focus on good design, usability, and performance. Currently available to work, I'd be <a href="#contact-info">happy to discuss</a> your next project.</h2><!-- <nav id="main-nav" class="nav main-nav"><a href="#contact-info">Contact me</a> <a href="#portfolio">Portfolio</a> <a href="#">Everything Else</a></nav> -->
        </header>

        <section id="main-container">
            <h1 class="spanner">Portfolio</h1>

            <div id="teaser-list">
                <div class="teaser portfolio-item">
                    <div class="gc">
                        <a href="<?php echo($portfolio[0]['localurl']); ?>" class="image portfolio-image container"><img src="images/portfolio/interiortouches.jpg" alt="" class="image portfolio-image"></a>
                    </div>

                    <div class="gc">
                        <h3 class="portfolio-heading teaser"><a href="<?php echo($portfolio[0]['localurl']); ?>"><?php echo($portfolio[0]['name']); ?></a></h3>

                        <p class="bodytext teaser">For my first mobile first web design I worked with Interior Touches to build a new website for their interior design business. The new website was built upon Drupal and provides a much better experience for their customers and staff.</p><span class="button more-detail"><a href="<?php echo($portfolio[0]['localurl']); ?>">More Detail</a></span>
                    </div>
                </div>

                <div class="teaser portfolio-item">
                    <div class="gc">
                        <a href="<?php echo($portfolio[1]['localurl']); ?>" class="image portfolio-image container"><img src="images/portfolio/homerunsports.jpg" alt="" class="image portfolio-image"></a>
                    </div>

                    <div class="gc">
                        <h3 class="portfolio-heading teaser"><a href="<?php echo($portfolio[1]['localurl']); ?>"><?php echo($portfolio[1]['name']); ?></a></h3>

                        <p class="bodytext teaser">homerunsports.com was my first commitment after attending the University of Winnipeg in 2011. I built the site on Drupal and currently am currently employed full-time at Home Run Sports.</p><span class="button more-detail"><a href="<?php echo($portfolio[1]['localurl']); ?>">More Detail</a></span>
                    </div>
                </div>

                <div class="teaser portfolio-item">
                    <div class="gc">
                        <a href="<?php echo($portfolio[2]['localurl']); ?>" class="image portfolio-image container"><img src="images/portfolio/couturecapital.jpg" alt="Couture Capital Group" class="image portfolio-image"></a>
                    </div>

                    <div class="gc">
                        <h3 class="portfolio-heading teaser"><a href="<?php echo($portfolio[2]['localurl']); ?>"><?php echo($portfolio[2]['name']); ?></a></h3>

                        <p class="bodytext teaser">Mike Couture was looking for a website to provide his clients with a source to get critical information about his business practices and news from the industry.</p><span class="button more-detail"><a href="<?php echo($portfolio[2]['localurl']); ?>">More Detail</a></span>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer id="main-foot">
        <nav id="nav-main" class="nav main">
            <div class="nav-section">
                <span class="label nav-label">Portfolio Items</span>

                <ul>
                    <li><a href="<?php echo($portfolio[0]['localurl']); ?>" title="Portfolio - Interior Touches"><?php echo($portfolio[0]['name']); ?></a></li>

                    <li><a href="<?php echo($portfolio[1]['localurl']); ?>" title="Portfolio - Home Run Sports"><?php echo($portfolio[1]['name']); ?></a></li>

                    <li><a href="<?php echo($portfolio[2]['localurl']); ?>" title="Couture Capital Group Inc."><?php echo($portfolio[2]['name']); ?></a></li>
                </ul>
            </div>

            <div class="nav-section">
                <span class="label nav-label">Contact info</span>

                <ul id="contact-info" class="vcard main">
                    <li class="fn"><?php echo($contactInfo['name']); ?></li>

                    <li><?php echo($contactInfo['email']); ?></li>

                    <li><?php echo($contactInfo['phone']); ?></li>
                    <li><?php echo($contactInfo['resume']); ?></li>

                    <li><a href="<?php echo($contactInfo['linkedin']); ?>" title="Luke Tully on LinkedIn">LinkedIn</a></li>

                    <li><a href="<?php echo($contactInfo['googleplus']); ?>" title="Luke Tully on Google+">Google+</a></li>

                    <li><a href="<?php echo($contactInfo['twitter']); ?>" title="Luke Tully on Twitter">Twitter</a></li>
                </ul>
            </div>
        </nav>
    </footer>
</body>
<script type="text/javascript" src="//use.typekit.net/rsa5tag.js"></script>
<script type="text/javascript">
try{Typekit.load();}catch(e){}
</script>
<script type="text/javascript" src="js/library.js"></script>
<?php include_once("tracking.php"); ?>
</html>