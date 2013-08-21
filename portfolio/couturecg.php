<?php require("contact.php"); require("portfolio-items.php");?>
<!DOCTYPE html>
<html class=".tk-ff-meta-serif-web-pro">
<head>
    <title>Luke Tully's Portfolio - Couture Capital Group</title>
    <meta name="description" content="I work to build websites with a focus on good design, usability, and performance. Currently available to work, I'd be happy to discuss your project." />
    <link rel="stylesheet" href="css/base.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/modules.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/state.css" type="text/css" media="screen">
    <meta name="viewport" content="user-scalable = no">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"><script src="js/ie8classlistshim.js" type="text/javascript"></script>
    <script type="text/javascript" src="//use.typekit.net/rsa5tag.js"></script>
    <script type="text/javascript">
    try{Typekit.load();}catch(e){}
    </script>
    
</head>

<body class="sub-template">
    <div id="page-wrapper">
        <nav id="nav-main" class="nav main external">
            <div class="nav-section">
                <span class="label nav-label" portfolio="" items="">Portfolio Items</span>

                <ul>
                    <li><a href="<?php echo($portfolio[0]['localurl']); ?>" title="Portfolio - Interior Touches"><?php echo($portfolio[0]['name']); ?></a></li>

                    <li><a href="<?php echo($portfolio[1]['localurl']); ?>" title="Portfolio - Home Run Sports"><?php echo($portfolio[1]['name']); ?></a></li>

                    <li><a href="<?php echo($portfolio[2]['localurl']); ?>" title="Couture Capital Group Inc."><?php echo($portfolio[2]['name']); ?></a></li>
                </ul>
            </div>

            <div class="nav-section">
                <span class="label nav-label">Contact info</span>

                <ul id="contact-info" class="vcard main nav-style">
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

        <section id="main-container">
            <h1 class="spanner"><a href="<?php echo($portfolio[2]['exturl']); ?>" title="Interior Touches Website"><?php echo($portfolio[2]['name']); ?></a></h1><span class="header-link menu">menu</span>

            <div id="content-container" class="fulltext">
                <div class="full-view portfolio-item">
                    <div class="bodytext fulltext">
                        <section class="case-study section section-intro">
                            <p><a href="<?php echo($portfolio[2]['exturl']); ?>" class="image portfolio-image container"><img src="images/portfolio/interiortouches.jpg" alt="" class="image portfolio-image"/><span class="website image-url">couturecg.ca</span></a>Mike Couture was looking for a website to provide his current and potential clients with a source to get critical information about his business practices and news from the industry.</p>
                        </section>

                        <section class="case-study section">
                            <h2 class="heading portfolio-heading case-study full-view">Goals</h2>

                            <p>This website first and foremost needed to be able to be updated by his employees with little or no training. It needed a way to allow the person tasked with updating the content on the site with a way to upload downloadable files along with any news articles.</p>
                            <h2 class="heading portfolio-heading case-study full-view">Drupal</h2>

                            <p>Drupal was chosen as the optimal way to build the website in the allotted time and allow for future iteration. At this point I was still very new to Drupal, so it was quite a daunting task trying to learn it quickly. Learning how to achieve the fairly simple goals in Drupal, as well as working some other modules in, were the most challenging problems in this development.</p><p>
                            	In this case I was not working on the front end design of the site due to some constraints and so a free theme (orange) was chosen for this site. It worked out quite well, and Mike has been happy with the site since then.</p>
                            	<h2 class="heading portfolio-heading case-study full-view">Other</h2>
                            	<p>This was my first real client project based on the Drupal CMS, and my first full site development.</p>
                        </section>
                        </div>
                </div>
            </div>
           
        </section>
    </div>
</body>
<script type="text/javascript" src="js/library.js"></script>
<?php include_once("tracking.php"); ?>
</html>
