
<?php
    require_once("admin/phpscripts/init.php");
    require_once("admin/phpscripts/read.php");
    $tbl = "tbl_pages4";
    $col = "pages4_id";
    $id = "1";

    $getInfo = getSingle($tbl,$col,$id);
    $row = mysqli_fetch_array($getInfo)
?>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Organ Donor | Story of Hope</title>
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
        <h1 class="hide">Story of Hope</h1>
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
                  <?php echo "<img src=\"{$row['pages4_logo']}\" alt='logo' class='menu-text'>";?>
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
                        <img src=<?php echo "{$row['pages4_logo']}"?> alt="logo" class="title-bar-title">
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
                    <h2><?php echo "{$row['pages4_text']}"?></h2>
                    <br>
                    <p class="mainHeaderDesc"><?php echo "{$row['pages4_text1']}"?></p>
                    <p><?php echo "{$row['pages4_text2']}"?></p>
                </div>
                <div class="large-4 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                    <h3 class="hide">Sub Menus Tabs</h3>
                    <div class="subMenus">
                        <ul class="tabs vertical" data-active-collapse="true" data-tabs="cnwmnn-tabs" id="collapsing-tabs" role="tablist">
                            <li class="tabs-title is-active" role="presentation"><a href="#panel1" aria-selected="true" role="tab"><?php echo "{$row['pages4_text3']}"?></a>
                            </li>
                            <li class="tabs-title" role="presentation"><a href="#panel2" aria-selected="true" role="tab"><?php echo "{$row['pages4_text4']}"?></a>
                            </li>
                            <li class="tabs-title" role="presentation"><a href="#panel3" aria-selected="false" role="tab"><?php echo "{$row['pages4_text5']}"?></a>
                            </li>
                            <li class="tabs-title" role="presentation"><a href="#panel4" aria-selected="false" role="tab"><?php echo "{$row['pages4_text6']}"?></a></li>
                            <li class="tabs-title" role="presentation"><a href="#panel5" aria-selected="false" role="tab"><?php echo "{$row['pages4_text7']}"?></a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- ===================================================================================================
Donor- Giving Hope
================================================================================================= -->
            <div class="tabs-content" data-tabs-content="collapsing-tabs">
                <section class="tabs-panel is-active" id="panel1" role="tabpanel" aria-hidden="false">
                    <h3 class="hide">2 Minutes Promotion Video</h3>
                    <!-- ===================================================================================================
2 Minutes Promotion Video
================================================================================================= -->
                    <div class="promoVid">
                        <video class="small-centered large-centered columns" width="370" height="315" controls>
                            <source src=<?php echo "{$row['pages4_video']}"?> type="video/mp4">
                        </video>
                    </div>
                </section>
                <!-- ===================================================================================================
2 Minutes Promotion Video Ends
================================================================================================= -->
                <!-- ===================================================================================================
Tab 1 Ends
================================================================================================= -->
                <section class="tabs-panel" id="panel2" role="tabpanel" aria-hidden="true">
                <h5 class="hide">Donor - Giving Hope</h5>
                     <div class="donorCon">
                        <div class="row donorSec">
                            <div class="large-4 medium-5 small-12 columns"><img src=<?php echo "{$row['pages4_img1']}"?> class="hopeImg donorCon" alt="giver profile"></div>
                            <div class="large-7 medium-7 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                <h6><?php echo "{$row['pages4_text9']}"?></h6>
                                <p class="aboutInfo"><?php echo "{$row['pages4_text10']}"?></p>

                            </div>
                        </div>
                        <hr>
                        <div class="row donorSec">
                            <div class="large-4 medium-5 small-12 columns"><img src=<?php echo "{$row['pages4_img2']}"?> class="hopeImg" alt="recipient profile"></div>
                            <div class="large-7 medium-7 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                <h6><?php echo "{$row['pages4_text11']}"?></h6>
                                <p class="aboutInfo"><?php echo "{$row['pages4_text12']}"?></p>

                            </div>
                        </div>
                        <hr>
                        <div class="row donorSec">
                            <div class="large-4 medium-5 small-12 columns"><img src=<?php echo "{$row['pages4_img3']}"?> class="hopeImg" alt="waiting-list profile"></div>
                            <div class="large-7 medium-7 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                <h6><?php echo "{$row['pages4_text13']}"?></h6>
                                <p class="aboutInfo"><?php echo "{$row['pages4_text14']}"?></p>
                               </div>
                        </div>
                    </div>
                </section>
                <!-- ===================================================================================================
Tab 2 Ends
================================================================================================= -->
                <section class="tabs-panel" id="panel3" role="tabpanel" aria-hidden="true">
                    <h5 class="hide">Recipient - A Second Life</h5>
                     <div class="donorCon">
                        <div class="row donorSec">
                            <div class="large-4 medium-5 small-12 columns"><img src=<?php echo "{$row['pages4_img4']}"?> class="hopeImg donorCon" alt="giver profile"></div>
                            <div class="large-7 medium-7 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                <h6><?php echo "{$row['pages4_text15']}"?></h6>
                                <p class="aboutInfo"><?php echo "{$row['pages4_text16']}"?></p>

                            </div>
                        </div>
                        <hr>
                        <div class="row donorSec">
                            <div class="large-4 medium-5 small-12 columns"><img src=<?php echo "{$row['pages4_img5']}"?> class="hopeImg" alt="recipient profile"></div>
                            <div class="large-7 medium-7 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                <h6><?php echo "{$row['pages4_text17']}"?></h6>
                                <p class="aboutInfo"><?php echo "{$row['pages4_text18']}"?></p>

                            </div>
                        </div>
                        <hr>
                        <div class="row donorSec">
                            <div class="large-4 medium-5 small-12 columns"><img src=<?php echo "{$row['pages4_img6']}"?> class="hopeImg" alt="waiting-list profile"></div>
                            <div class="large-7 medium-7 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                <h6><?php echo "{$row['pages4_text19']}"?></h6>
                                <p class="aboutInfo"><?php echo "{$row['pages4_text20']}"?></p>
                                </div>
                        </div>
                    </div>
                </section>
                <!-- ===================================================================================================
Tab 3 Ends
================================================================================================= -->
                <section class="tabs-panel" id="panel4" role="tabpanel" aria-hidden="true">
                   <div class="hopeCon">
                        <h5 class="hide">Waiting on a Miracle</h5>
                        <div class="row hopeContents">
                            <div class="container">
                                <a id="left-button"><i class="fa fa-chevron-left arrow left-arrow" aria-hidden="true"></i></a>
                                <a id="right-button"><i class="fa fa-chevron-right arrow right-arrow" aria-hidden="true"></i></a>
                                <div id="slider-text" class="content content-mid transition">
                                    <div id="text-1" class="content-text">
                                        <div class="large-4 medium-5 small-12 columns"><img src=<?php echo "{$row['pages4_img7']}"?> alt="giver profile"></div>
                                        <section class="large-8 columns hopeConInfo wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                            <h5><?php echo "{$row['pages4_text21']}"?></h5>
                                            <p><?php echo "{$row['pages4_text22']}"?></p>
                                        </section>
                                    </div>
                                    <div id="text-2" class="content-text">
                                        <div class="large-4 medium-5 small-12 columns"><img src=<?php echo "{$row['pages4_img8']}"?> alt="receiver profile"></div>
                                        <section class="large-8 columns hopeConInfo wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                            <h5><?php echo "{$row['pages4_text23']}"?></h5>
                                            <p><?php echo "{$row['pages4_text24']}"?></p>
                                        </section>
                                    </div>
                                    <div id="text-3" class="content-text">
                                        <div class="large-4 medium-5 small-12 columns"><img src=<?php echo "{$row['pages4_img9']}"?> alt="waiting-list profile"></div>
                                        <section class="large-8 columns hopeConInfo wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                                            <h5><?php echo "{$row['pages4_text25']}"?></h5>
                                            <p><?php echo "{$row['pages4_text26']}"?></p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ===================================================================================================
Tab 4 Ends
================================================================================================= -->
<section class="tabs-panel" id="panel5" role="tabpanel" aria-hidden="true">
<h6 class="hide">Share - Share Your Story</h6>
                    <div class="promoVid">
                        <video class="small-centered large-centered columns" width="370" height="315" controls>
                            <source src=<?php echo "{$row['pages4_video']}"?> type="video/mp4">
                        </video>
                    </div>
                </section>
                <!-- ===================================================================================================
Tab 5 Ends
================================================================================================= -->
                <!--tab ends!-->
                <!-- ===================================================================================================
Story of Hope Ends
================================================================================================= -->
                <section class="shareComCon">
                    <h6 class="hide">Waiting for a life-saving organ transplant stats</h6>
                    <p><?php echo "{$row['pages4_text27']}"?></p>
                    <p><?php echo "{$row['pages4_text28']}"?></p>
                    <a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration?utm_source=so&utm_medium=keyword&utm_campaign=original" class="donateBtn-2"><span class="white">Share Your Story</span></a>
                </section>
                <!-- ===================================================================================================
infoCon
================================================================================================= -->
<section id="infoCon">
    <div class="row">
        <div class="large-3 large-offset-1 medium-5 small-12 columns"><img src=<?php echo "{$row['pages4_img9i']}"?> class="mockupImg" alt="mockup image with hand">
        </div>
        <div class="large-6 large-offset-1 medium-6 small-12 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
              <?php echo "<h5>{$row['pages4_title']}</h5>";?>
            <div class="wow fadeInUp animated" data-wow-animation-name="fadeInUp">
                <?php echo "<p class='moreinfo'>{$row['pages4_text12i']}</p>";?>
                  <?php echo "<p class='moreinfo-2'>{$row['pages4_text13i']}</p>";?>
                <div class="stores">
                    <a href="#"><?php echo "<img src=\"{$row['pages4_img10']}\" alt='app store'>"?>&nbsp;&nbsp;</a>
                    <a href="#"><?php echo "<img src=\"{$row['pages4_img11']}\" alt='google play'>"?></a>
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
          <?php echo "<img src=\"{$row['pages4_hand']}\" alt='holding hands icon'>"?>
        </div>
          <?php echo "<p class='donateTitle'>{$row['pages4_title2']}</p>";?>
          <?php echo "<a href='#' class='registerBtn-2'><span class='white'>{$row['pages4_text14i']}</span></a>";?>
    </section>
    <!-- Close Last Register Section-->
    <!-- Open Footer -->
    <footer>
        <div class="row full-width">
            <div class="small-12 medium-4 large-4 columns">
              <?php echo "<h6>{$row['pages4_foot1']}</h6>";?>
                <ul class="footer-links">
                    <li><a href="https://beadonor.ca/about-us">About beadonor.ca</a></li>
                    <li><a href="https://beadonor.ca/about-us">Success Stories</a></li>
                    <li><a href="https://beadonor.ca/about-us">Free Fundraising</a></li>
                    <li><a href="https://beadonor.ca/about-us">Fundraising Tips&amp;Ideas</a></li>
                </ul>
            </div>
            <div class="small-12 medium-4 large-4 columns">
                  <?php echo "<h6>{$row['pages4_foot2']}</h6>";?>
                <ul class="footer-links">
                    <li><a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration?utm_source=so&utm_medium=keyword&utm_campaign=original">About Beadonor.ca</a></li>
                    <li><a href="https://beadonor.ca/contact">Contact Us</a></li>
                    <li><a href="http://www.giftoflife.on.ca/en/media/default.htm">Media Relations</a></li>
                </ul>
            </div>
            <div class="small-12 medium-4 large-4 columns">
                <?php echo "<h6>{$row['pages4_foot3']}</h6>";?>
                <ul class="footer-links">
                    <li><a href="https://beadonor.ca/register">Register online with ServiceOntario</a></li>
                </ul>
            </div>
            <div class="small-12 medium-4 large-4 columns socialIcon">
                  <?php echo "<h6>{$row['pages4_foot4']}</h6>";?>
                <ul class="footer-links">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="small-12 medium-4 large-4 columns lastSlogan">
                <a href="http://www.giftoflife.on.ca/en/"><?php echo "<img src=\"{$row['pages4_img12']}\" alt='Trillium Gift of Life Network Ontario'>"?></a>
            </div>
            <div class="small-12 medium-4 large-4 columns blogSec">
                <h6 class="hide">Visit our blog</h6>
                <?php echo "<a class='blogBtn' href='#'>{$row['pages4_visit']}</a>";?>
            </div>
        </div>
        <!-- Close full-width-->
        <div class="handsIcon">
              <?php echo "<img src=\"{$row['pages4_hand']}\" alt='holding hands icon'>"?>
        </div>
        <div class="row columns copyright full-width">
            <h6 class="hide">Copyright</h6>
            <?php echo "<img src=\"{$row['pages4_img13']}\" class='small-12 large-offset-1 large-2 columns' alt='be a donor Logo'>"?>
            <?php echo "<p class='small-12 large-6 large-offset-2 large-5 columns'>{$row['pages4_copy']}</p>"?>
        </div>
    </footer>
                    <!-- Close Footer -->
                </div>
                <!-- ===================================================================================================
Footer
===============================================s================================================== -->
            </div>
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
