<?php require("contact.php"); require("portfolio-items.php");?>
<!DOCTYPE html>
<html class=".tk-ff-meta-serif-web-pro">
<head>
    <title>Luke Tully's Portfolio</title>
    <meta name="description" content="I work to build websites with a focus on good design, usability, and performance. Currently available to work, I'd be happy to discuss your project." />
    <link rel="stylesheet" href="css/base.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/modules.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/state.css" type="text/css" media="screen">
    <meta name="viewport" content="user-scalable = no">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <script src="js/ie8classlistshim.js" type="text/javascript"></script>
    <script type="text/javascript" src="//use.typekit.net/rsa5tag.js"></script>
    <script type="text/javascript">
    try{Typekit.load();}catch(e){}
    </script>
    <script type="text/javascript" src="js/library.js"></script>
</head>

<body class="sub-template">
    <div id="page-wrapper">
        <nav id="nav-main" class="nav main external">
            <div class="nav-section">
                <span class="label nav-label">Portfolio Items</span>

                <ul>
                    <li><a href="<?php echo($portfolio[0]['localurl']); ?>" title="Portfolio - Interior Touches"><?php echo($portfolio[0]['name']); ?></a></li>

                    <li><a href="<?php echo($portfolio[1]['localurl']); ?>" title="Portfolio - Home Run Sports"><?php echo($portfolio[1]['name']); ?></a></li>

                    <li><a href="<?php echo($portfolio[2]['localurl']); ?>" title="Portfolio - Couture Capital Group Inc."><?php echo($portfolio[2]['name']); ?></a></li>
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
            <h1 class="spanner"><a href="<?php echo($portfolio[0]['exturl']); ?>" title="Interior Touches Website"><?php echo($portfolio[0]['name']); ?></a></h1><span class="header-link menu">menu</span>

            <div id="content-container" class="fulltext">
                <div class="full-view portfolio-item">
                    <div class="bodytext fulltext">
                        <section class="case-study section section-intro">
                            <p><a href="<?php echo($portfolio[0]['exturl']); ?>" class="image portfolio-image container"><img src="images/portfolio/interiortouches.jpg" alt="" class="image portfolio-image"><span class="website image-url">interiortouches.ca</span></a>The lovely people at Interior Touches were looking for a website redesign that reflected the culture and business that they cater to.</p>

                            <p>Moving away from the current flash based site, our goal was to built a beautiful site that reflected the romance that they wanted their customers to feel while visiting the store in person, as well as be easily maintainable for any of the employees.</p>

                            <p>While renovating the site was important, it was also very important to consider the current content of the flash based site. Things such as the ability to look through products, and sign up for the email list needed to be kept in the new site and made better.</p>
                        </section>

                        <section class="case-study section">
                            <h2 class="heading portfolio-heading case-study full-view">Responsive Approach</h2>

                            <p>This was my first responsively designed website, making it much more time consuming and challenging than what I was used to. After doing my research, considering how various methods would work, and really hurting my brain trying to grasp the concepts quickly, I settled with a mobile first initiative.</p>

                            <p>One major difficulty that I found early on, but should have realized prior to starting, was that current capabilities of CSS do not allow major layout changes independent of source order. In this case it was especially diffucult to drop the menu below one of the main images at the smallest viewport width. The solution to that was to create two identical menus and use display:none to hide one of them at any given time. This is non-ideal but it works in this case. Using display:none is something I see all too often when trying to hide images from mobile devices, which results in unneccessary bandwidth being required to load the site because these images are loaded regardless of whether they are seen or not. In this case there were no images or "heavy" content involved.</p>

                            <p>The other major issue I ran into while building this site was, as mentioned above, background images. My goal was to load appropriately sized images based on screen size. This is something that has, and continues to be discussed very frequently and is a major issue at the moment. However thanks to the work of Tim Kadlec who provided testing and insight into asset downloading under different conditions, it was clear that the appropriate route to take would be mobile first. If large images are loaded in via CSS media query from the smallest viewport size upwards, they will not be loaded all at once. The Background Image module really helped with that. It allowed me to assign background images using the Context module, and also assign them at different breakpoints. The result was a standard very nice background image at the smallest viewport loaded as the default without any media queries applied. If the viewport width is increased, any CSS background image rules that apply will trigger and then load the images in as needed.</p>

                            <h2 class="heading portfolio-heading case-study full-view">Drupal</h2>

                            <p>This project relied heavily on the Omega theme which uses the 960gs grid system and a number of other neat features such as the Delta module. It also provides HTML5 output and an interface for handling @media breakpoints. I chose to use the Background Image module to assign different css background images in different contexts throughout the site. The interface for assigning these background images is not accessible for content creators.</p>

                            <p>There were some other more commonly used modules that I chose to use in this project such as Nice Menus which provides configurable blocks of menus based on the standard menu system, Views which provides a robust interface and system for making database queries, and Display Suite which allows the creation of custom layouts for most entity types.</p>
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
