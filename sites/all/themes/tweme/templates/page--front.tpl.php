<?php
/**
 * @file
 * Custom theme implementation to display a single Drupal page.
 */
?>

<!----------------------------------------- START MENU -------------------------------------->
    <div id="menu">
        <div id="main-menu">
            <div class="span3" id="logo"><a href="<?php echo $base_path;?>"><img src="<?php echo $base_path.path_to_theme()?>/assets/img/logo.png" title="Seqwater"/></a></div>
            <div id="menu-content">
                <div class="span11 list-menu">
                    <?php if ($page['main_menu']): ?>
                        <?php print render($page['main_menu']) ?>
                    <?php endif ?>

                         <ul class="extra-menu">
                             <li class="li-search-box"><a href="#" class="menu-main-name"><span class="menu-main-title search-images"></span></a></li>
                             <li><a href="#" class="menu-main-name"><span class="menu-main-title-call-center">CALL CENTER <b>1800 771 491</b></span></a></li>
                         </ul>
                </div>
            </div>
        </div>
    </div>
<!----------------------------------------- END MENU -------------------------------------->

    <?php if ($page['big_banner']): ?>
    <div id="header">
        <?php print render($page['big_banner']) ?>
    </div>
    <?php endif ?>
    <div class="header-overlay-blue"></div>
    <div class="header-overlay-tree"></div>

    <?php if ($page['search_form_seqwater']): ?>
        <div class="search-box span5">
                <?php print render($page['search_form_seqwater']) ?>
        </div>
        <div class="search-box-follow span5"></div>
    <?php endif ?>


<div id="wraper-content">
<!-- START RENDER PEOPLE BLOCK -->
<div id="people">
                <div class="title-block">
                    <div class="rotateTitle">WE</div>
                </div>
            <div class="container">
                        <div class="row">
                            <div class="span12">

                            <div id="showCarouselInLarge">
                                  <div class="carousel slide" id="myCarousel">
                                    <div class="carousel-inner">
                                      <div class="item active">
                                            <ul class="thumbnails">
                                                <li class="span4">
                                                    <div class="thumbnail">
                                                        <img class="img-circle" data-src="holder.js/140x140" src="sites/all/themes/tweme/assets/img/people1.jpg">
                                                    </div>
                                                    <p>JOHN,<br/>LOOK AFTER OUR DAMS</p>
                                                </li>
                                                <li class="span4">
                                                    <div class="thumbnail">
                                                        <img class="img-circle" data-src="holder.js/140x140" src="sites/all/themes/tweme/assets/img/people3.jpg">
                                                    </div>
                                                    <p>HELEN,<br/>LOOK AFTER OUR PARKS</p>
                                                </li>
                                                <li class="span4">
                                                    <div class="thumbnail">
                                                        <img class="img-circle" data-src="holder.js/140x140" src="sites/all/themes/tweme/assets/img/people2.jpg">
                                                    </div>
                                                    <p>BLAKE,<br/>ENGINEER PROJECT</p>
                                                </li>
                                            </ul>
                                      </div>
                                      <div class="item">
                                            <ul class="thumbnails">
                                                <li class="span4">
                                                    <div class="thumbnail">
                                                        <img class="img-circle" data-src="holder.js/140x140" src="sites/all/themes/tweme/assets/img/people6.jpg">
                                                    </div>
                                                    <p>TONY,<br/>ENGINEER PROJECT</p>
                                                </li>
                                                <li class="span4">
                                                    <div class="thumbnail">
                                                        <img class="img-circle" data-src="holder.js/140x140" src="sites/all/themes/tweme/assets/img/people7.jpg">
                                                    </div>
                                                    <p>DAVID,<br/>ENGINEER PROJECT</p>
                                                </li>
                                            </ul>
                                      </div>
                                    </div>
                                        <a data-slide="prev" href="#myCarousel" class="carousel-control-customize-left"><span class="carousel-narrow-left"></span></a>
                                        <a data-slide="next" href="#myCarousel" class="carousel-control-customize-right"><span class="carousel-narrow-right"></span></a>
                                  </div>
                              </div>
                              <div id="showCarouselInSmall">
                                          <div id="myCarousel3" class="carousel slide">
                                                <div class="carousel-inner">
                                                  <div class="item active">
                                                        <div class="thumbnail"><img class="img-circle" data-src="holder.js/140x140" src="sites/all/themes/tweme/assets/img/people1.jpg"><p>JOHN,<br/>LOOK AFTER OUR DAMS</p></div>
                                                  </div>
                                                  <div class="item">
                                                        <div class="thumbnail"><img class="img-circle" data-src="holder.js/140x140" src="sites/all/themes/tweme/assets/img/people3.jpg"><p>HELEN,<br/>LOOK AFTER OUR PARKS</p></div>
                                                  </div>
                                                  <div class="item">
                                                        <div class="thumbnail"><img class="img-circle" data-src="holder.js/140x140" src="sites/all/themes/tweme/assets/img/people2.jpg"><p>BLAKE,<br/>ENGINEER PROJECT</p></div>
                                                  </div>
                                                  <div class="item">
                                                        <div class="thumbnail"><img class="img-circle" data-src="holder.js/140x140" src="sites/all/themes/tweme/assets/img/people6.jpg"><p>TONY,<br/>ENGINEER PROJECT</p></div>
                                                  </div>
                                                  <div class="item">
                                                        <div class="thumbnail"><img class="img-circle" data-src="holder.js/140x140" src="sites/all/themes/tweme/assets/img/people7.jpg"><p>DAVID,<br/>ENGINEER PROJECT</p></div>
                                                  </div>
                                                </div>
                                                <a data-slide="prev" href="#myCarousel3" class="carousel-control-customize-left"><span class="carousel-narrow-left"></span></a>
                                                <a data-slide="next" href="#myCarousel3" class="carousel-control-customize-right"><span class="carousel-narrow-right"></span></a>
                                          </div>
                              </div>

                            </div>
                        </div>
                    </div>
</div>
<!-- END RENDER PEOPLE BLOCK -->



<!-- START RENDER live BLOCK -->
<div id="live">
        <div class="title-block">
                <div class="rotateTitle">LIVE</div>
        </div>
    <div class="container">
        <div class="row-fluid">
            <div class="span4">
                    <div class="live-description center">
                            <div class="span6"><i class="flood-image right"></i></div>
                            <div class="span6 title-live">FLOOD STORAGE</div>
                    </div>
                    <div class="live-main-content">
                        <div class="live-content span12">
                            <div class="span6 live-content-left">FLOOD STORAGE VOLUME (ML)</div><div class="span6 live-content-right">1,450,000</div>
                        </div>
                        <div class="live-content span12">
                            <div class="span6 live-content-left">FLOOD STORAGE CAPACITY</div><div class="span6 live-content-right">0%</div>
                        </div>
                        <div class="live-content span12">
                            <div class="span6 live-content-left">AVAIABLE FLOOD STORAGE</div><div class="span6 live-content-right">100%</div>
                        </div>
                        <div class="live-content span12">
                            <div class="span6 live-content-left">LASTEST OBSERVATION</div><div class="span6 live-content-right-customize">29/07/2013 00:00 AM</div>
                        </div>
                    </div>
                    <div class="center">
                        <span class="live-btn-more-text"><a href="http://previous.seqwater.com.au/public/dam-levels#CT_Footer">MORE DETAIL</a></span>
                    </div>
            </div>

            <div class="span4 live-border">
                    <div class="live-description center">
                            <div class="span6"><i class="dam-image right"></i></div>
                            <div class="span6 title-live">DAM LEVEL</div>
                    </div>
                    <div class="live-main-content">
                        <div class="live-content span12">
                            <div class="span6 live-content-left">FULL SUPPLY CAPACITY (ML)</div><div class="span6 live-content-right">2,220,181</div>
                        </div>
                        <div class="live-content span12">
                            <div class="span6 live-content-left">CURRENT CAPACITY (ML)</div><div class="span6 live-content-right">2,195,413</div>
                        </div>
                        <div class="live-content span12">
                            <div class="span6 live-content-left">FULL</div><div class="span6 live-content-right">98.9%</div>
                        </div>
                        <div class="live-content span12">
                            <div class="span6 live-content-left">LASTEST OBSERVATION</div><div class="span6 live-content-right-customize">29/07/2013 00:00 AM</div>
                        </div>
                    </div>
                    <div class="center">
                        <span class="live-btn-more-text"><a href="http://previous.seqwater.com.au/public/dam-levels">VIEW ALL DAMS</a></span>
                    </div>
            </div>

            <div class="span4">
                    <div class="live-description-customize">
                            <div class="span2"><i class="news-image"></i></div>
                            <div class="span10 title-live">NEWS UPDATE</div>
                    </div>

                    <?php if ($page['live_update_news_block_home_page']): ?>
                        <?php print render($page['live_update_news_block_home_page']) ?>
                    <?php endif ?>

                    <!-- <div class="live-content-news span12">
                        <div class="live-content-new"><div class="live-news-update-button">NEWS</div><div class="news-update-date">29 January 2013</div></div>
                        <div class="news-update-information">Seqwater consumption and security update</div>
                    </div>
                    <div class="live-content-news span12">
                        <div class="live-content-new"><div class="live-news-update-button">NEWS</div><div class="news-update-date">29 January 2013</div></div>
                        <div class="news-update-information">Water security and consumption update</div>
                    </div>
                    <div class="live-content-news span12">
                        <div class="live-content-new"><div class="live-media-button">MEDIA</div><div class="news-update-date">29 January 2013</div></div>
                        <div class="news-update-information">Seqwater water security and consumption update</div>
                    </div>
                    <div class="live-content-news span12">
                        <div class="live-content-new"><div class="live-alerts-button">ALERTS</div><div class="news-update-date">29 January 2013</div></div>
                        <div class="news-update-information">Seqwater partners with universities and industry in research programs</div>
                    </div>
                    <div class="live-content-news span12">
                        <div class="live-content-new"><div class="live-news-update-button">NEWS</div><div class="news-update-date">29 January 2013</div></div>
                        <div class="news-update-information">Seqwater dam releases update</div>
                    </div> -->
            </div>
        </div>
   </div>
</div>
<!-- END RENDER live BLOCK -->



<!-- START RENDER play BLOCK -->
<div id="play">
    <div class="title-block">
         <div class="rotateTitle">PLAY</div>
    </div>
    <div class="container">
        <div class="row-fluid">
        <?php if ($page['play_block_home_page']): ?>
             <?php print render($page['play_block_home_page']) ?>
        <?php endif ?>
        </div>
   </div>
</div>
<!-- END RENDER play BLOCK -->



<!-- START RENDER work BLOCK -->
<div id="work">
    <div class="title-block">
          <div class="rotateTitle">WORK</div>
    </div>
    <div class="container">
        <div class="row-fluid">
            <?php if ($page['work_block_home_page']): ?>
                <?php print render($page['work_block_home_page']) ?>
            <?php endif ?>
        </div>
   </div>
</div>
<!-- END RENDER work BLOCK -->



<!-- START RENDER service BLOCK -->
<div id="services">
<div class="container">
    <div class="row">
        <div class="span12">
            <h1 id="service-header" class="section-header">
                <span class="line"></span> <span> SOURCE, STORE, SUPPLY </span> <span
                    class="line"></span>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="span12">
            <div id="service-description">We manage more than $9 Billion of
                traditional and climate-resilient water supply asserts to ensure a
                consistent, high-quality supply for the people of south east
                queensland. These assets include:</div>
        </div>
    </div>
    <div class="row " style="margin-top:30px;">
        <div class="span1"></div>
        <div class="span5" id="service-description-detail">
            <ul>
                <li>26 DAMS AND 47 WEIRS</li>
                <li>46 WATER TREAMENT PLANTS</li>
                <li>A 600-KILOMETRE BULK SUPPLY PIPELINE NETWORK</li>
                <li>THE GOLD COAST DESALINATION PLANT & THE WESTERN CORRIDOR
                    RECYCLED WATER SCHEME</li>
                <li>ASSOCIATED PUMP STATIONS AND BALANCE TANKS. AND SOME OUR
                    OTHER MAJOR OPERATIONAL</li>
                <li>IRRIGATION CUSTOMERS</li>
                <li>PLANNING AND DEMAND MANAGEMENT</li>
                <li>RECREATION</li>
            </ul>
        </div>
        <div class="span5 offset1" id="service-description-gallery">
            <div class="table">
                <div>
                    <div><img src="sites/all/themes/tweme/assets/img/su4.jpg" class="img-border" /></div>
                    <div><img src="sites/all/themes/tweme/assets/img/store.jpg" /></div>
                    <div><img src="sites/all/themes/tweme/assets/img/source.jpg" /></div>
                </div>

                <div>
                    <div><img src="sites/all/themes/tweme/assets/img/supply.jpg" class="img-border"/></div>
                    <div><img src="sites/all/themes/tweme/assets/img/su3.jpg" class="img-border" /></div>
                    <div></div>
                </div>

                <div>
                    <div><img src="sites/all/themes/tweme/assets/img/su2.jpg" class="img-border" /></div>
                    <div><img src="sites/all/themes/tweme/assets/img/su1.jpg" class="img-border" /></div>
                    <div><img src="sites/all/themes/tweme/assets/img/su5.jpg" class="img-border" /></div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- END RENDER service BLOCK -->



<!-- START RENDER education BLOCK -->
<div id="education">
<div class="container">
    <div class="row">
        <div class="span12">
            <h1 class="section-header">
                <span class="line"></span> <span> Educate </span> <span class="line"></span>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="span5 education-img-container">
            <div id="education3-img" class="circle"></div>
            <div id="education4-img" class="circle"></div>
            <div id="education1-img" class="circle">
                <div class="binoculars"></div>
                <div class="education-img-text">LEARNING</div>
            </div>

            <div id="education2-img" class="circle">
                <div class="tour"></div>
                <div class="education-img-text">TOUR</div>
            </div>
        </div>
        <div class="span7">
            <div class="row-fluid">
                <div class="span12">
                    <div class="education-description">SEQWater recognises the
                        importance of education and offers a range of activities and tours
                        to increase understaning of the urban water cycle in an
                        unpredictable climate</div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span4"></div>
                <div class="span8">
                    <div class="educate-items">
                        <a class="link-ads" href="http://www.seqwater.com.au/education/seqwater-learning-centre">
                        <div class="educate-item">
                            <span class="arrow" ></span>
                            <div>SEQWATER LEARNING CENTER</div>
                        </div></a>
                        <a class="link-ads" href="http://www.seqwater.com.au/schools/water-grid-asset-tours">
                        <div class="educate-item"><span class="arrow" ></span>
                            <div>SITE TOURS</div>
                        </div></a>
                        <a class="link-ads" href="http://www.seqwater.com.au/public/virtual-tours">
                        <div class="educate-item"><span class="arrow" ></span>
                            <div>VIRTUAL TOUR SUITE</div>
                        </div></a>
                        <a class="link-ads" href="http://www.seqwater.com.au/education/water-island-game">
                        <div class="educate-item"><span class="arrow" ></span>
                            <div>WATER ISLAND GAME</div>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<!-- END RENDER education BLOCK -->




<!-- START RENDER ads BLOCK -->
<div id="ads">
<div class="container">
    <div class="row">
        <div class="span4 ">
            <div id="ads1-img" class="circle">
                <div></div>
            </div>
            <a class="link-ads" href="http://www.previous.seqwater.com.au/public/node/338" target="_blank">
                <div id="ads1-popover" class="ads-popover">
                    <div></div>
                    <span>REGISTER FOR DAM RELEASE ALERTS</span>
                </div>
            </a>
            <div class="ads-description">Seqwater provides a free Dam Release
                Notification service which can provide subscribers with
                notifications by email, SMS / text messages to mobile phones or
                recorded messages to telephone landlines</div>
        </div>

        <div class="span4 ">
            <div id="ads2-img" class="circle"><div></div></div>
            <a class="link-ads" href="http://seqwgm.qld.gov.au/bulk-water-quality/customer-confidence-report-bulk-water" target="_blank">
                <div id="ads2-popover" class="ads-popover">
                   <div></div>
                   <span> CHECK YOUR WATER QUALITY </span>
                </div>
            </a>
            <div class="ads-description">**THE CUSTOMER CONFIDENCE REPORT IS
                CURRENTLY DOWN**</div>
        </div>

        <div class="span4">
            <div id="ads3-img" class="circle"><div></div></div>
            <a class="link-ads" href="http://www.previous.seqwater.com.au/public/source-store-treat-supply/dams/wivenhoe-dam" target="_blank">
                <div id="ads3-popover" class="ads-popover">
                    <div></div>
                    <span>OPERATIONAL SAFETY CAMERA</span>
                </div>
            </a>
            <div class="ads-description">As the viewing platform Wivenhoe Dam
                remains closed for safety reasons, members of the public wishing to
                observe gate release operations may do so online via the Operational
                Safety Camera</div>
        </div>
    </div>
</div>
</div>
<!-- END RENDER ads BLOCK -->
</div>

<!-- START RENDER footer BLOCK -->
<div id="footer">
<div class="container">
    <div class="row">
    <div class="span12">
        <div class="span4 footer-item">
            <div class="right-line"><div class="right-sub-line">
                <div class="footer-header">CONTACT THE SEQWATER CALL CENTER</div>
                <div>
                    <p>
                        <span class="phone-number">(07) 3035 5500</span> (MONDAY TO
                        FRIDAY, 8.30AM TO 5.00PM)
                    </p>
                    <p>
                        <span class="phone-number">1800 737 928</span> (AFTER HOURS AND ON
                        WEEKENDS)
                    </p>
                    <p>EMAIL: COMMUNICATIONS@SEQWATER.COM.AU</p>
                    <p>MAIL: PO BOX 16146</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        CITY EAST QLD 400</p>

                </div>
                <div class="footer-bottom">
                    WATER RELEASE HOTLINE: <span class="phone-number">1800 613
                        122</span>
                </div>
            </div></div>
        </div>
        <div class="span4 footer-item ">
            <div class="right-line"><div class="right-sub-line">
                <div class="footer-header">IRRIGATION CUSTOMER BILLING
                    ENQUIRIES:</div>
                <div>
                    <p>
                        <span class="phone-number">1800 077 005</span> (MONDAY TO FRIDAY,
                        8.30AM TO 5.00PM)
                    </p>
                    <p>EMAIL: IRRIGATORQUESTIONS@SEQWATER.COM.AU</p>
                    <p>MAIL: PO BOX 16146</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        CITY EAST QLD 4002</p>

                </div>
                <div class="footer-bottom">
                    FOLLOW US: <span class="facebook-icon"></span> <span
                        class="twitter-icon"></span> <span class="rss-icon"></span>
                </div>
            </div></div>
        </div>
        <div class="line"></div>
        <div class="span4 footer-item">
            <div class="footer-header" style="text-decoration: none;">CONTACT</div>
            <div>
                <form>
                    <fieldset>
                        <label class="text"> <input type="text" placeholder="NAME">
                        </label> <label class="email"> <input type="email"
                            placeholder="EMAIL">
                        </label> <label> <textarea rows="4" placeholder="MESSAGE"></textarea>
                        </label>
                        <div class="footer-bottom">
                            <button type="submit" class="btn send-input">SEND</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
<!-- END RENDER footer BLOCK -->

<div id="powered-by">
<div class="container">
    <div class="span12 center">
         Powered by Drupal  <img alt="" src="<?php echo $base_path.path_to_theme()?>/assets/img/powered-blue-80x15.png">
    </div>
</div>
</div>

<?php
$date = new DateTime();
$timestamp = $date->getTimestamp();
?>
<script type="text/javascript" src="<?php echo $base_path.path_to_theme()?>/assets/js/common.js?t=<?php echo $timestamp;?>"></script>

