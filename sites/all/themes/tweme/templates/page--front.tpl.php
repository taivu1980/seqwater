<?php
/**
 * @file
 * Custom theme implementation to display a single Drupal page.
 */
?>

<!----------------------------------------- START MENU -------------------------------------->
    <div id="menu">
        <div id="main-menu">
        	<div class="span3" id="logo"><a href="/"><img src="sites/all/themes/tweme/assets/img/logo.png" title="Seqwater"/></a></div>
        	<div id="menu-content">
                <div class="span10 list-menu">
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

	    <div class="search-box span5">
            <form class="form-search" method="get" action="">
                <input class="span5 search-text" type="text" placeholder="SEARCH..." name="name">
            </form>
        </div>
        <div class="search-box-follow span5"></div>


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
                            <a class="title-live" href="#"><i class="flood-image"></i>FLOOD STORAGE</a>
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
                        <span class="live-btn-more-text">MORE DETAIL</span>
                    </div>
            </div>

            <div class="span4 live-border">
                    <div class="live-description center">
                            <a class="title-live" href="#"><i class="dam-image"></i>DAM LEVEL</a>
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
                        <span class="live-btn-more-text">VIEW ALL DAMS</span>
                    </div>
            </div>

            <div class="span4">
                    <div class="live-description-customize">
                            <div class="span2"><i class="news-image"></i></div>
                            <div class="span10 title-live">NEWS UPDATE</div>
                    </div>
                    <div class="live-content-news span12">
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
                    </div>
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
            <div class="span4 play-content-1">
                  <div class="thumbnail">
                        <img class="" src="sites/all/themes/tweme/assets/img/play3.jpg">
                        <p>"Last week, the Eash Queenland primary students visited the Borumba dam and had participated in rowing activity."</p>
                        <div class="btn-more-detail-hp"><span class="btn-more-text-hp">MORE DETAIL</span></div>
                  </div>
            </div>
            <div class="span4 play-content-2">
                <div class="thumbnail">
                        <img class="" src="sites/all/themes/tweme/assets/img/play2.jpg">
                        <p>"Next Sunday, a BBQ is organised by the South East Queenland council to celebrate the completion of the maintenance/upgrade work for the Gold Creek dam..."</p>
                        <div class="btn-more-detail-hp"><span class="btn-more-text-hp">MORE DETAIL</span></div>
                  </div>
            </div>
            <div class="span4">
                <div class="thumbnail">
                        <img class="" src="sites/all/themes/tweme/assets/img/play1.jpg">
                        <p>"Next week, the Eash Queenland primary students visited the Borumba dam and had participated in rowing activity."</p>
                        <div class="btn-more-detail-hp"><span class="btn-more-text-hp">MORE DETAIL</span></div>
                  </div>
            </div>
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
            <div class="span4">
                        <div class="span12 work-title">Water Recycling Centre of Excellence Opens in Brisbane</div>
                        <div class="span12 work-content">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="sites/all/themes/tweme/assets/img/work2.jpg">
                                </a>
                                <div class="media-body">
                                    <p class="media-heading">A new Centre of Excellence that will lead the way in developing new water technology was opened today in Brisbane by the Minister for Climate Change, Energy Efficiency and Water, Senator Penny Wong.</p>
                                </div>
                            </div>
                        </div>
                        <div class="btn-more-detail-hp"><span class="btn-more-text-hp">MORE DETAIL</span></div>
            </div>

            <div class="span4">
                        <div class="span12 work-title">Desal plant ramps up to supply quality drinking water</div>
                        <div class="span12 work-content">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="sites/all/themes/tweme/assets/img/work3.jpg">
                                </a>
                                <div class="media-body">
                                    <p class="media-heading">The Gold Coast Desalination plant at Tugun has increased output and is helping to ensure a continued supply of high quality drinking water for South East Queensland.</p>
                                </div>
                            </div>
                        </div>
                        <div class="btn-more-detail-hp"><span class="btn-more-text-hp">MORE DETAIL</span></div>
            </div>

            <div class="span4">
                        <div class="span12 work-title">Tugun barge successfully refloated</div>
                        <div class="span12 work-content">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="sites/all/themes/tweme/assets/img/work1.jpg">
                                </a>
                                <div class="media-body">
                                    <p class="media-heading">The service barge that washed up on Tugun Beach yesterday following extreme weather on the Gold Coast was successfully refloated last night (Wednesday 11 August) and is making its way to Brisbane.</p>
                                </div>
                            </div>
                        </div>
                        <div class="btn-more-detail-hp"><span class="btn-more-text-hp">MORE DETAIL</span></div>
            </div>
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
                        <div class="educate-item">
                            <span class="arrow" ></span>
                            <div>SEQWATER LEARNING CENTER</div>
                        </div>
                        <div class="educate-item"><span class="arrow" ></span>
                            <div>SITE TOURS</div>
                        </div>
                        <div class="educate-item"><span class="arrow" ></span>
                            <div>VIRTUAL TOUR SUITE</div>
                        </div>
                        <div class="educate-item"><span class="arrow" ></span>
                            <div>WATER ISLAND GAME</div>
                        </div>
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
            <div id="ads1-popover" class="ads-popover">
                <div></div>
                <span>REGISTER FOR DAM RELEASE ALERTS</span>
            </div>
            <div class="ads-description">Seqwater provides a free Dam Release
                Notification service which can provide subscribers with
                notifications by email, SMS / text messages to mobile phones or
                recorded messages to telephone landlines</div>
        </div>

        <div class="span4 ">
            <div id="ads2-img" class="circle"><div></div></div>
            <div id="ads2-popover" class="ads-popover">
                <div></div>
                <span> CHECK YOUR WATER QUALITY </span>
            </div>
            <div class="ads-description">**THE CUSTOMER CONFIDENCE REPORT IS
                CURRENTLY DOWN**</div>
        </div>

        <div class="span4">
            <div id="ads3-img" class="circle"><div></div></div>
            <div id="ads3-popover" class="ads-popover">
                <div></div>
                <span>OPERATIONAL SAFETY CAMERA</span>
            </div>
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