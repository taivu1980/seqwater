<?php
/**
 * @file
 * Custom theme implementation to display a single Drupal page.
 */
$categoryName = null;
?>

<!----------------------------------------- START MENU -------------------------------------->
    <div id="vituar-menu-second-template"></div>
    <div id="menu-second-template">
        <div id="main-menu">
        	<div class="span3" id="logo"><a href="<?php echo $base_path;?>"><img src="<?php echo $base_path.path_to_theme()?>/assets/img/logo-second-template.png" title="Seqwater"/></a></div>
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

    <div class="params"></div>
<!----------------------------------------- END MENU -------------------------------------->


    <div id="header" class="header-second-style">
			<img src="<?php echo $base_path.path_to_theme()?>/assets/img/dam.jpg" alt="">
            <?php
            		$active_trail = menu_get_active_trail();
            		if(isset($active_trail[1]["map"][1]->field_category["und"][0]["taxonomy_term"]->name)):
            ?>
			            <div id="pitch-second-template" class="span7">
			                    <ul>
			                        <li class="pitch1-second-template span5">
			                        <a href="#"><?php
			                             $categoryName = $active_trail[1]["map"][1]->field_category["und"][0]["taxonomy_term"]->name;
			                             echo $categoryName;
			                        ?></a></li>
			                    </ul>
			            </div>
			        <?php else:?>
			        	<?php if(strlen(menu_get_active_title()) <= 19): ?>
						<div id="pitch-second-template" class="span7">
                    		<ul>
                        		<li class="pitch1-second-template span5"><a href="#"><?php echo menu_get_active_title();?></a></li>
                    		</ul>
            			</div>
            			<?php endif;?>
            		<?php endif;?>
	</div>
	<div class="header-overlay-blue"></div>
	<div class="header-overlay-tree"></div>

	<?php if ($page['search_form_seqwater']): ?>
	    <div class="search-box span5">
			    <?php print render($page['search_form_seqwater']) ?>
        </div>
        <div class="search-box-follow span5"></div>
    <?php endif ?>


	<!-- Main -->
	<div id="main" class="main-second-style">

	  <div class="container">

	    <div class="row row-toggle">
	      <!-- Content -->
	      <section id="content" class="span9">
	      <!-- ---------------------- start show breadcumb in second tempalte ---------------------- -->
	     <div id="breadcumb-second-template">
	        <div class="image-control-breadcumb"><i class="icon-home-image"></i></div>
	        <a href="<?php echo $base_path;?>">Home /</a>
			<?php if(!empty($categoryName)):?>
				<a href="?q=taxonomy/term/<?php echo $active_trail[1]["map"][1]->field_category["und"][0]["taxonomy_term"]->tid;?>"><?php echo $categoryName;?></a>
			<?php else:?>
				<span><?php echo menu_get_active_title();?></span>
			<?php endif;?>
	     </div>
		 <!-- ---------------------- end show breadcumb in second tempalte ---------------------- -->

	     <?php if ($tabs): ?>
            <div class="tabs">
                <?php print render($tabs); ?>
            </div>
         <?php endif; ?>

	     <?php if ($title && !empty($categoryName)): ?>
         <h1 class="title" id="page-title">
            <?php print $title; ?>
         </h1>
         <?php endif; ?>

	        <?php print render($page['content']) ?>
	        <?php print $feed_icons; ?>
	      </section>

	      <!-- Sidebar second -->
	      <aside id="sidebar-second" class="sidebar span3 hidden-phone">
	       <?php if ($has_sidebar_second): ?>
	            <?php print render($page['sidebar_second']) ?>
	       <?php endif ?>

	       <?php if($page['sidebar_second_affix']):?>
	            <?php print render($page['sidebar_second_affix']) ?>
	       <?php endif ?>
	       <div class="region region-sidebar-second second-template-service">
	           <a href="http://seqwgm.qld.gov.au/bulk-water-quality/customer-confidence-report-bulk-water" target="_blank">
	              <img alt="" src="<?php echo $base_path.path_to_theme()?>/assets/img/service1.jpg">
	           </a>
	           <a href="http://www.previous.seqwater.com.au/public/node/338" target="_blank">
	              <img alt="" src="<?php echo $base_path.path_to_theme()?>/assets/img/service2.jpg">
	           </a>
	           <a href="http://www.previous.seqwater.com.au/public/source-store-treat-supply/dams/wivenhoe-dam" target="_blank">
	              <img alt="" src="<?php echo $base_path.path_to_theme()?>/assets/img/service3.jpg">
	           </a>
	       </div>
	      </aside>

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

<div id="powered-by">
<div class="container">
    <div class="span12 center">
         Powered by Drupal  <img alt="" src="<?php echo $base_path.path_to_theme()?>/assets/img/powered-blue-80x15.png">
    </div>
</div>
</div>

<script type="text/javascript">
ResizeHeightSiderBar();
</script>


