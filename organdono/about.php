
<?php
    require_once("admin/phpscripts/init.php");
    require_once("admin/phpscripts/read.php");
    $tbl = "tbl_pages2";
    $col = "pages2_id";
    $id = "1";

    $getInfo = getSingle($tbl,$col,$id);
    $row = mysqli_fetch_array($getInfo)
?>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Organ Donor | About Donation</title>
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
        <h1 class="hide">About Organ Donation</h1>
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
                  <?php echo "<img src=\"{$row['pages2_logo']}\" alt='logo' class='menu-text'>";?>
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
                        <?php echo "<img src=\"{$row['pages2_logo']}\" alt='logo' class='title-bar-title'>";?>
                    </div>
                    <div class="title-bar-right">
                        <a class="registerBtnTop" href="https://www.ontario.ca/page/organ-and-tissue-donor-registration?utm_source=so&utm_medium=keyword&utm_campaign=original"><span class="white">Donate</span></a>
                    </div>
                </div>
            </div>
            <!-- ===================================================================================================
  Main Header - About Donation
  ================================================================================================= -->
            <section class="mainHeader row">
                <div class="large-offset-2 large-6 columns wow fadeInLeft animated" data-wow-animation-name="fadeInLeft">
                    <?php echo "<h3>{$row['pages2_title']}</h3>"?>
                    <br>
                    <?php echo "<p class='mainHeaderDesc'>{$row['pages2_text']}</p>"?>
                </div>
            </section>
            <!-- ===================================================================================================
  About Donation Ends
  ================================================================================================= -->
            <!-- ===================================================================================================
  About Donation Ends
  ================================================================================================= -->
            <section class="donateCon">
                <h4 class="hide">Waiting for a life-saving organ transplant stats</h4>
                <?php echo "<p class='moreinfo-3'>{$row['pages2_text2']}</p>"?>
                <a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration?utm_source=so&utm_medium=keyword&utm_campaign=original" class="donateBtn-2"><span class="white">donate</span></a>
            </section>
            <!-- ===================================================================================================
  Stats Information Icons
  ================================================================================================= -->
            <section class="row small-12 large-6 columns statsInfoCon wow fadeInUp animated" data-wow-animation-name="fadeInUp">
                <h5 class="hide">Organ Donation stats information</h5>
                <div class="small-12 large-4 medium-4 columns">
                  <?php echo "<img src=\"{$row['pages2_img1']}\" class='svgIcon' alt='people icon'>";?>
                  <?php echo "<p>{$row['pages2_text3']}</p>"?>

                </div>
                <div class="small-12 large-4 medium-4 columns">
                  <?php echo "<img src=\"{$row['pages2_img2']}\" class='svgIcon' alt='one two three icon'>";?>
                  <?php echo "<p>{$row['pages2_text4']}</p>"?>
                </div>
                <div class="small-12 large-4 medium-4 columns">
                    <?php echo "<img src=\"{$row['pages2_img3']}\" class='svgIcon' alt='85 icon'>";?>
                  <?php echo "<p>{$row['pages2_text5']}</p>"?>
                </div>
            </section>
            <!-- ===================================================================================================
  Stats Information Icons Ends
  ================================================================================================= -->
            <!-- ===================================================================================================
  Restore sight Information Icons
  ================================================================================================= -->
            <section class="statsInfoCon-2 wow fadeInUp animated" data-wow-animation-name="fadeInUp">
                <h5 class="hide">Organ Donation Stats Information</h5>
                <div class="row">
                  <?php echo "<p class='moreinfo-3'>{$row['pages2_text6']}</p>"?>
                    <div class="medium-4 columns">
                        <a href="#!"><?php echo "<img src=\"{$row['pages2_img6']}\" id='organ-1' class='svgIcon' alt='people icon'>";?></a>
                    </div>
                    <div class="medium-4 columns">
                        <a href="#!"><?php echo "<img src=\"{$row['pages2_img5']}\" id='organ-2' class='svgIcon' alt='one two three icon'>"?></a>
                    </div>
                    <div class="medium-4 columns">
                        <a href="#!"><?php echo "<img src=\"{$row['pages2_img4']}\" id='organ-3' class='svgIcon' alt='85 icon'>"?></a>
                    </div>
                </div>
                <div class-"row">
                <?php echo "<p class='moreinfo-3'>{$row['pages2_text7']}</p>"?>
                <div/>

                <p id="iconTitle" class="moreinfo-4">Restore Sight to 2 People</p>
            </section>
            <!-- ===================================================================================================
  Restore sight Information Icons Ends
  ================================================================================================= -->
            <!-- ===================================================================================================
  infoCon
  ================================================================================================= -->
  <section id="infoCon">
      <div class="row">
          <div class="large-3 large-offset-1 medium-5 small-12 columns"><img src=<?php echo "{$row['pages2_img9']}"?> class="mockupImg" alt="mockup image with hand">
          </div>
          <div class="large-6 large-offset-1 medium-6 small-12 columns wow fadeInRight animated" data-wow-animation-name="fadeInRight">
                <?php echo "<h5>{$row['pages2_title3']}</h5>";?>
              <div class="wow fadeInUp animated" data-wow-animation-name="fadeInUp">
                  <?php echo "<p class='moreinfo'>{$row['pages2_text12']}</p>";?>
                    <?php echo "<p class='moreinfo-2'>{$row['pages2_text13']}</p>";?>
                  <div class="stores">
                      <a href="#"><?php echo "<img src=\"{$row['pages2_img10']}\" alt='app store'>"?>&nbsp;&nbsp;</a>
                      <a href="#"><?php echo "<img src=\"{$row['pages2_img11']}\" alt='google play'>"?></a>
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
            <?php echo "<img src=\"{$row['pages2_hand']}\" alt='holding hands icon'>"?>
          </div>
            <?php echo "<p class='donateTitle'>{$row['pages2_title4']}</p>";?>
            <?php echo "<a href='#' class='registerBtn-2'><span class='white'>{$row['pages2_text14']}</span></a>";?>
      </section>
      <!-- Close Last Register Section-->
      <!-- Open Footer -->
      <footer>
          <div class="row full-width">
              <div class="small-12 medium-4 large-4 columns">
                <?php echo "<h6>{$row['pages2_foot1']}</h6>";?>
                  <ul class="footer-links">
                      <li><a href="https://beadonor.ca/about-us">About beadonor.ca</a></li>
                      <li><a href="https://beadonor.ca/about-us">Success Stories</a></li>
                      <li><a href="https://beadonor.ca/about-us">Free Fundraising</a></li>
                      <li><a href="https://beadonor.ca/about-us">Fundraising Tips&amp;Ideas</a></li>
                  </ul>
              </div>
              <div class="small-12 medium-4 large-4 columns">
                    <?php echo "<h6>{$row['pages2_foot2']}</h6>";?>
                  <ul class="footer-links">
                      <li><a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration?utm_source=so&utm_medium=keyword&utm_campaign=original">About Beadonor.ca</a></li>
                      <li><a href="https://beadonor.ca/contact">Contact Us</a></li>
                      <li><a href="http://www.giftoflife.on.ca/en/media/default.htm">Media Relations</a></li>
                  </ul>
              </div>
              <div class="small-12 medium-4 large-4 columns">
                  <?php echo "<h6>{$row['pages2_foot3']}</h6>";?>
                  <ul class="footer-links">
                      <li><a href="https://beadonor.ca/register">Register online with ServiceOntario</a></li>
                  </ul>
              </div>
              <div class="small-12 medium-4 large-4 columns socialIcon">
                    <?php echo "<h6>{$row['pages2_foot4']}</h6>";?>
                  <ul class="footer-links">
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  </ul>
              </div>
              <div class="small-12 medium-4 large-4 columns lastSlogan">
                  <a href="http://www.giftoflife.on.ca/en/"><?php echo "<img src=\"{$row['pages2_img12']}\" alt='Trillium Gift of Life Network Ontario'>"?></a>
              </div>
              <div class="small-12 medium-4 large-4 columns blogSec">
                  <h6 class="hide">Visit our blog</h6>
                  <?php echo "<a class='blogBtn' href='#'>{$row['pages2_visit']}</a>";?>
              </div>
          </div>
          <!-- Close full-width-->
          <div class="handsIcon">
                <?php echo "<img src=\"{$row['pages2_hand']}\" alt='holding hands icon'>"?>
          </div>
          <div class="row columns copyright full-width">
              <h6 class="hide">Copyright</h6>
              <?php echo "<img src=\"{$row['pages2_img13']}\" class='small-12 large-offset-1 large-2 columns' alt='be a donor Logo'>"?>
              <?php echo "<p class='small-12 large-6 large-offset-2 large-5 columns'>{$row['pages2_copy']}</p>"?>
          </div>
      </footer>
                <!-- Close Footer -->
        </div>
    </div>
    <!-- close wrapper, no more content after this
  ============================================================== -->
    <!-- Open About Informartion Section-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/foundation.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/svgIcon.js"></script>

    <script>
    $(document).foundation();
    </script>
  </body>

  </html>
