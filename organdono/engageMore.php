
<?php
    require_once("admin/phpscripts/init.php");
    require_once("admin/phpscripts/read.php");
    $tbl = "tbl_pages3";
    $col = "pages3_id";
    $id = "1";

    $getInfo = getSingle($tbl,$col,$id);
    $row = mysqli_fetch_array($getInfo)
?>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Organ Donor | Engage More</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Open Top bar
    ============================================================== -->
    <header>
        <h1 class="hide">Engage More</h1>
        <div id="socialTop">
            <nav class="iconsTop">
                <h2 class="hide">Organ Donation Main Nav</h2>
                <ul>
                    <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Close Top bar
    ============================================================== -->
    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
            <!-- off-canvas left menu
    ============================================================== -->
            <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
                <!-- <button class="close-button" aria-label="Close menu" type="button" data-close="">
                    <span aria-hidden="true">×</span>
                </button> -->
                <ul class="vertical dropdown menu" data-dropdown-menu>
                    <li class="navBder"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                    <li class="navBder"><a href="about.php"><i class="fa fa-users" aria-hidden="true"></i>About Donation</a></li>
                    <li class="navBder"><a href="storyOfHope.php"><i class="fa fa-address-card" aria-hidden="true"></i>Story of Hope</a></li>
                    <li><a href="engageMore.php"><i class="fa fa-phone-square" aria-hidden="true"></i>Engage More</a></li>
                </ul>
                <a class="registerBtnMenu navDonarBtn" href="#"><span class="white">Donate</span></a>
            </div>
            <!-- "wider" top-bar menu for 'medium' and up
    ============================================================== -->
            <div id="widemenu" class="top-bar">
                <div class="top-bar-left">
                  <?php echo "<img src=\"{$row['pages3_logo']}\" alt='logo' class='menu-text'>";?>
                </div>
                <div class="top-bar-right">
                    <ul class="menu">
                        <li class="navBder"><a href="index.php">Home</a></li>
                        <li class="navBder"><a href="about.php">About Donation</a></li>
                        <li class="navBder"><a href="storyOfHope.php">Story of Hope</a></li>
                        <li><a href="engageMore.php">Engage More</a></li>
                        <li class="donateMenu"><a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration?utm_source=so&utm_medium=keyword&utm_campaign=original" class="donateBtn"><span class="white">Donate</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- original content goes in this container
    ============================================================== -->
            <div class="off-canvas-content" data-off-canvas-content>
                <!-- off-canvas title bar for 'small' screen
    ============================================================== -->
                <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="large">
                    <div class="title-bar-left">
                        <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
                        <?php echo "<img src=\"{$row['pages3_logo']}\" alt='logo' class='title-bar-title'>";?>
                    </div>
                    <div class="title-bar-right">
                        <a class="registerBtnTop" href="https://www.ontario.ca/page/organ-and-tissue-donor-registration?utm_source=so&utm_medium=keyword&utm_campaign=original"><span class="white">Donate</span></a>
                    </div>
                </div>
            </div>
            <!-- ===================================================================================================
Main Nav Close
================================================================================================= -->
            <!-- ===================================================================================================
Main Header
================================================================================================= -->
            <section class="mainHeader row">
                <div class="large-offset-2 large-6 columns wow fadeInLeft animated" data-wow-animation-name="fadeInLeft">
                    <?php echo "<h2>{$row['pages3_text']}</h2>"?>
                    <br>
                    <p class="mainHeaderDesc"><?php echo "{$row['pages3_text2']}"?></p>
                    <p><?php echo "{$row['pages3_text3']}"?></p>
                </div>
                <div class="large-4 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                    <h3 class="hide">Sub Menus Tabs</h3>
                    <div class="subMenus">
                        <ul class="tabs vertical" data-active-collapse="true" data-tabs="cnwmnn-tabs" id="collapsing-tabs" role="tablist">
                            <li class="tabs-title is-active" role="presentation"><a href="#panel1" aria-selected="true" role="tab"><?php echo "{$row['pages3_text4']}"?></a>
                            </li>
                            <li class="tabs-title" role="presentation"><a href="#panel2" aria-selected="false" role="tab"><?php echo "{$row['pages3_text5']}"?></a>
                            </li>
                            <li class="tabs-title" role="presentation"><a href="#panel3" aria-selected="false" role="tab"><?php echo "{$row['pages3_text6']}"?></a></li>
                            <li class="tabs-title" role="presentation"><a href="#panel4" aria-selected="false" role="tab"><?php echo "{$row['pages3_text7']}"?></a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- ===================================================================================================
Awareness
================================================================================================= -->
            <div class="tabs-content" data-tabs-content="collapsing-tabs">
                <section class="tabs-panel" id="panel1" role="tabpanel" aria-hidden="true">
                    <div class="awareCon row">
                        <div class="large-offset-2 large-8 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                            <h3 class="hide">Organ Donation Awareness</h3>
                            <br>
                            <p class="mainHeaderDesc"><?php echo "{$row['pages3_text8']}"?></p>
                            <p><?php echo "{$row['pages3_text9']}"?></p>
                            <ol>
                                <li><?php echo "{$row['pages3_text10']}"?></li>
                                <li><?php echo "{$row['pages3_text11']}"?></li>
                                <li><?php echo "{$row['pages3_etext']}"?></li>
                            </ol>
                        </div>
                    </div>
                    <!-- ===================================================================================================
Awareness Ends
================================================================================================= -->
                    <section class="introCon wow fadeInUp animated" data-wow-animation-name="fadeInUp">
                        <h4 class="hide">Engaging More People Information</h4>
                        <div class="row">
                            <div class="small-12 large-4 medium-4 columns">
                              <?php echo "<img src=\"{$row['pages3_img1']}\" alt='people icon' class='svgIcon'>";?>
                                <h6 class="subTitle"><?php echo "{$row['pages3_text12']}"?></h6>
                                <p><?php echo "{$row['pages3_text13']}"?></p>
                                <a class="btn-2" href="https://beadonor.ca/about-donation">Read more</a>
                            </div>
                            <div class="small-12 large-4 medium-4 columns">
                              <?php echo "<img src=\"{$row['pages3_img2']}\" alt='people icon' class='svgIcon'>";?>
                                <h6 class="subTitle"><?php echo "{$row['pages3_text14']}"?></h6>
                                <p><?php echo "{$row['pages3_text15']}"?></p>
                                <a class="btn-2" href="https://beadonor.ca/about-donation">Read more</a>
                            </div>
                            <div class="small-12 large-4 medium-4 columns">
                                <?php echo "<img src=\"{$row['pages3_img3']}\" alt='people icon' class='svgIcon'>";?>
                                <h6 class="subTitle"><?php echo "{$row['pages3_text16']}"?></h6>
                                <p><?php echo "{$row['pages3_text17']}"?></p>
                                <a class="btn-2" href="https://beadonor.ca/about-donation">Read more</a>
                            </div>
                        </div>
                    </section>
                </section>
                <!-- ===================================================================================================
Tab 1  Ends
================================================================================================= -->
                <section class="tabs-panel" id="panel2" role="tabpanel" aria-hidden="true">
                    <h4 class="hide">Individual</h4>
                    <div class="hopeCon">
                        <div class="row hopeContents">
                            <div class="container">
                                <a id="left-button"><i class="fa fa-chevron-left arrow left-arrow" aria-hidden="true"></i></a>
                                <a id="right-button"><i class="fa fa-chevron-right arrow right-arrow" aria-hidden="true"></i></a>
                                <div id="slider-text" class="content content-mid transition">
                                    <div id="text-1" class="content-text">
                                        <div class="large-4 medium-5 small-12 columns"><?php echo "<img src=\"{$row['pages3_img4']}\" alt='giver profile'>";?></div>
                                        <section class="large-8 columns hopeConInfo wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                            <h5><?php echo "{$row['pages3_text18']}"?></h5>
                                            <p><?php echo "{$row['pages3_text19']}"?></p>
                                        </section>
                                    </div>
                                    <div id="text-2" class="content-text">
                                        <div class="large-4 medium-5 small-12 columns"><?php echo "<img src=\"{$row['pages3_img5']}\" alt='recipient profile'>";?></div>
                                        <section class="large-8 columns hopeConInfo wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                            <h5><?php echo "{$row['pages3_text20']}"?></h5>
                                            <p><?php echo "{$row['pages3_text21']}"?></p>
                                        </section>
                                    </div>
                                    <div id="text-3" class="content-text">
                                        <div class="large-4 medium-5 small-12 columns"><?php echo "<img src=\"{$row['pages3_img6']}\" alt='waiting-list profile'>";?></div>
                                        <section class="large-8 columns hopeConInfo wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                            <h5><?php echo "{$row['pages3_text22']}"?></h5>
                                            <p><?php echo "{$row['pages3_text23']}"?></p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ===================================================================================================
Tab 2  Ends
================================================================================================= -->
                <section class="tabs-panel" id="panel3" role="tabpanel" aria-hidden="true">
                    <h5 class="hide">Through - Organization</h5>
                    <div class="donorCon">
                        <div class="row donorSec">
                            <div class="large-4 medium-5 small-12 columns"><?php echo "<img src=\"{$row['pages3_img7']}\" class='hopeImg donorCon' alt='giver profile'>";?></div>
                            <div class="large-7 medium-7 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                <h6><?php echo "{$row['pages3_text24']}"?></h6>
                                <p class="aboutInfo"><?php echo "{$row['pages3_text25']}"?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row donorSec">
                            <div class="large-4 medium-5 small-12 columns"><?php echo "<img src=\"{$row['pages3_img7']}\" class='hopeImg' alt='recipient profile'>";?></div>
                            <div class="large-7 medium-7 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                <h6><?php echo "{$row['pages3_text26']}"?></h6>
                                <p class="aboutInfo"><?php echo "{$row['pages3_text27']}"?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row donorSec">
                            <div class="large-4 medium-5 small-12 columns"><?php echo "<img src=\"{$row['pages3_img8']}\" class='hopeImg' alt='waiting-list profile'>";?></div>
                            <div class="large-7 medium-7 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                <h6><?php echo "{$row['pages3_text28']}"?></h6>
                                <p class="aboutInfo"><?php echo "{$row['pages3_text29']}"?></p>
                            </div>
                        </div>
                    </div>
                    <section class="shareComCon">
                        <h6 class="hide">Waiting for a life-saving organ transplant stats</h6>
                        <p><?php echo "{$row['pages3_text30']}"?></p>
                        <p><?php echo "{$row['pages3_text31']}"?></p>
                        <a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration?utm_source=so&utm_medium=keyword&utm_campaign=original" class="donateBtn-2"><span class="white">Start Your Own</span></a>
                    </section>
                </section>
                <!-- ===================================================================================================
Tab 3  Ends
================================================================================================= -->
                <section class="tabs-panel" id="panel4" role="tabpanel" aria-hidden="true">

                        <div class="shareComCon-2">
                            <h6 class="hide">Waiting for a life-saving organ transplant stats</h6>
                            <p><?php echo "{$row['pages3_text32']}"?></p>
                            <p><?php echo "{$row['pages3_text33']}"?>.</p>
                            <a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration?utm_source=so&utm_medium=keyword&utm_campaign=original" class="donateBtn-2"><span class="white">Start Your Own</span></a>
                        </div>
                </section>
                <!-- ===================================================================================================
Tab 4  Ends
================================================================================================= -->
                </div>
                <!-- ===================================================================================================
Tab Ends
================================================================================================= -->
                <!-- ===================================================================================================
infoCon
================================================================================================= -->
<section id="infoCon">
    <div class="row">
        <div class="large-3 large-offset-1 medium-5 small-12 columns"><img src=<?php echo "{$row['pages3_img9i']}"?> class="mockupImg" alt="mockup image with hand">
        </div>
        <div class="large-6 large-offset-1 medium-6 small-12 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
              <?php echo "<h5>{$row['pages3_title']}</h5>";?>
            <div class="wow fadeInUp animated" data-wow-animation-name="fadeInUp">
                <?php echo "<p class='moreinfo'>{$row['pages3_text12i']}</p>";?>
                  <?php echo "<p class='moreinfo-2'>{$row['pages3_text13i']}</p>";?>
                <div class="stores">
                    <a href="#"><?php echo "<img src=\"{$row['pages3_img10i']}\" alt='app store'>"?>&nbsp;&nbsp;</a>
                    <a href="#"><?php echo "<img src=\"{$row['pages3_img11i']}\" alt='google play'>"?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===================================================================================================
infoCon  Ends
================================================================================================= -->
<!-- ===================================================================================================
Footer
================================================================================================= -->
<!-- Close Story of Hope Section-->
<!-- Open footerImg Background  Section-->
<div class="footerBgCon">
    <!-- Open Last Register  Section-->
    <section id="lastDonateCon">
        <h5 class="hide">Donate Now</h5>
        <div class="handsIcon">
          <?php echo "<img src=\"{$row['pages3_hand']}\" alt='holding hands icon'>"?>
        </div>
          <?php echo "<p class='donateTitle'>{$row['pages3_title2']}</p>";?>
          <?php echo "<a href='#' class='registerBtn-2'><span class='white'>{$row['pages3_text14i']}</span></a>";?>
    </section>
    <!-- Close Last Register Section-->
    <!-- Open Footer -->
    <footer>
        <div class="row full-width">
            <div class="small-12 medium-4 large-4 columns">
              <?php echo "<h6>{$row['pages3_foot1']}</h6>";?>
                <ul class="footer-links">
                    <li><a href="https://beadonor.ca/about-us">About beadonor.ca</a></li>
                    <li><a href="https://beadonor.ca/about-us">Success Stories</a></li>
                    <li><a href="https://beadonor.ca/about-us">Free Fundraising</a></li>
                    <li><a href="https://beadonor.ca/about-us">Fundraising Tips&amp;Ideas</a></li>
                </ul>
            </div>
            <div class="small-12 medium-4 large-4 columns">
                  <?php echo "<h6>{$row['pages3_foot2']}</h6>";?>
                <ul class="footer-links">
                    <li><a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration?utm_source=so&utm_medium=keyword&utm_campaign=original">About Beadonor.ca</a></li>
                    <li><a href="https://beadonor.ca/contact">Contact Us</a></li>
                    <li><a href="http://www.giftoflife.on.ca/en/media/default.htm">Media Relations</a></li>
                </ul>
            </div>
            <div class="small-12 medium-4 large-4 columns">
                <?php echo "<h6>{$row['pages3_foot3']}</h6>";?>
                <ul class="footer-links">
                    <li><a href="https://beadonor.ca/register">Register online with ServiceOntario</a></li>
                </ul>
            </div>
            <div class="small-12 medium-4 large-4 columns socialIcon">
                  <?php echo "<h6>{$row['pages3_foot4']}</h6>";?>
                <ul class="footer-links">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="small-12 medium-4 large-4 columns lastSlogan">
                <a href="http://www.giftoflife.on.ca/en/"><?php echo "<img src=\"{$row['pages3_img12']}\" alt='Trillium Gift of Life Network Ontario'>"?></a>
            </div>
            <div class="small-12 medium-4 large-4 columns blogSec">
                <h6 class="hide">Visit our blog</h6>
                <?php echo "<a class='blogBtn' href='#'>{$row['pages3_visit']}</a>";?>
            </div>
        </div>
        <!-- Close full-width-->
        <div class="handsIcon">
              <?php echo "<img src=\"{$row['pages3_hand']}\" alt='holding hands icon'>"?>
        </div>
        <div class="row columns copyright full-width">
            <h6 class="hide">Copyright</h6>
            <?php echo "<img src=\"{$row['pages3_img13']}\" class='small-12 large-offset-1 large-2 columns' alt='be a donor Logo'>"?>
            <?php echo "<p class='small-12 large-6 large-offset-2 large-5 columns'>{$row['pages3_copy']}</p>"?>
        </div>
    </footer>
                    <!-- Close Footer -->
                </div>
                <!-- ===================================================================================================
Footer
================================================================================================= -->
            </div>
        </div>
        <!-- close wrapper, no more content after this
  ============================================================== -->
        <!-- Open About Informartion Section-->
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/foundation.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>
        <script>
        $(document).foundation();
        </script>
</body>

</html>
