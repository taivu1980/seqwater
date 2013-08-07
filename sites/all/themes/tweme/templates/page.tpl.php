<?php
/**
 * @file
 * Custom theme implementation to display a single Drupal page.
 */
?>

<!----------------------------------------- START MENU -------------------------------------->
    <div id="menu">
        <div id="main-menu">
        	<div class="span3" id="logo"><a href="/"><img src="../sites/all/themes/tweme/assets/img/logo.png" title="Seqwater"/></a></div>
        	<div id="menu-content">
                <div class="span10 list-menu">
			        <?php if ($page['main_menu']): ?>
			            <?php print render($page['main_menu']) ?>
					<?php endif ?>
                </div>
            </div>
        </div>
    </div>
<!----------------------------------------- END MENU -------------------------------------->


    <div id="header" class="header-second-style">
			<img style="height:445px; width:100%" src="../sites/all/themes/tweme/assets/img/dam.jpg" alt="">
	</div>

	    <div class="search-box span5">
            <form class="form-search" method="get" action="">
                <input class="span5 search-text" type="text" placeholder="SEARCH..." name="name">
            </form>
        </div>
        <div class="search-box-follow span5"></div>


	<!-- Main -->
	<div id="main" class="main-second-style">
	  <div class="container">
	    <?php print $messages ?>
	    <div class="row row-toggle">
	      <!-- Content -->
	      <section id="content" class="span<?php print $content_cols ?>">
	        <?php print render($page['content']) ?>
	      </section>
	      <?php if ($has_sidebar_second): ?>
	      <!-- Sidebar second -->
	      <aside id="sidebar-second" class="sidebar span3 hidden-phone">
	        <?php print render($page['sidebar_second']) ?>
	        <?php print render($page['sidebar_second_affix']) ?>
	      </aside>
	      <?php endif ?>
	    </div>
		</div>
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