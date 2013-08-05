<?php
/**
 * @file
 * Custom theme implementation to display a single Drupal page.
 */
?>
<div id="wrapper">

	<div class="container">
		<?php if ($page['top_menu']): ?>
		  <div id="top_menu" class="top_menu">
		    <?php print render($page['top_menu']); ?>
		  </div>
		<?php endif; ?>
	</div>

	<!-- Navbar -->
	<div id="navbar" class="navbar navbar-medium navbar-inverse navbar-static-top">
		<div class="navbar-inner container">
			        <?php print $navbar_toggler ?>
					<?php print $navbar_brand ?>

			        <?php if ($page['main_menu']): ?>
					<nav class="nav-collapse collapse main-menu" role="navigation">
			        	<?php print render($page['main_menu']); ?>
			      	</nav>
					<?php endif ?>
		</div>
	</div>


	<?php if ($page['featured']): ?>
	<!-- Featured -->
	<div id="featured" class="container-wrapper hidden-phone">
	  <div class="container">
	    <?php print render($page['featured']) ?>
	  </div>
	</div>
	<?php endif ?>

	<?php if ($preface): ?>
	<!-- Header -->
	<header id="header" class="container-wrapper">
	  <div class="container">
	    <?php print $preface ?>
	  </div>
	</header>
	<?php endif ?>


	<!-- Main -->
	<div id="main">
	  <div class="container">
	    <?php print $messages ?>
	    <div class="row row-toggle">
	      <?php if ($has_sidebar_first): ?>
	      <!-- Sidebar first -->
	      <aside id="sidebar-first" class="sidebar span3 hidden-phone">
	        <?php print render($page['sidebar_first']) ?>
	        <?php print render($page['sidebar_first_affix']) ?>
	      </aside>
	      <?php endif ?>
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

</div>

	<div id="safe-secure-sustainable-wrapper">
		<div class="container">
			<div id="safe-secure-sustainable"></div>
		</div>
	</div>



<!-- Footer -->
<footer id="footer" class="container-wrapper">


	<?php if ($page['main_footer']): ?>
	<div id="main-footer" class="container">
	    <?php print render($page['main_footer']); ?>
	</div>
	<?php endif; ?>


	<?php if ($page['footer_copyright']): ?>
	<div id="footer-copyright" class="container">
		<?php print render($page['footer_copyright']); ?>
	</div>
	<?php endif;?>


</footer>
