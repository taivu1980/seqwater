
<div id="admin-header">
	<?php //if (!empty($page['admin_header'])) print render($page['admin_header']) ?>
	<div class="main-admin-header">

	<div style="float: left;">
	<img src="<?php echo $base_path.path_to_theme()?>/images/notifition.jpeg" title="Notifications" style="width: 40px;height: 40px;" align="left"/>
	<div class="bubble-content">
		<div class="point"></div>
		<p>5</p>
	</div></div>

	<div style="float: left;">
	<img src="<?php echo $base_path.path_to_theme()?>/images/notifition.jpeg" title="Notifications" style="width: 40px;height: 40px;" align="left"/>
	<div class="bubble-content">
		<div class="point"></div>
		<p>5</p>
	</div></div>

		<div class="right menu-admin-user">
	  	<?php if (!$overlay && isset($secondary_menu)) : ?>
    		<?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('class' => 'links secondary-menu'))) ?>
  		<?php endif; ?>
  		</div>
	</div>
</div>

<div id='branding'><div class='limiter clearfix'>
  <div class='breadcrumb clearfix'><?php print $breadcrumb ?></div>
</div></div>

<div id='page-title'><div class='limiter clearfix'>
  <div class='tabs clearfix'>
    <?php if ($primary_local_tasks): ?>
      <ul class='primary-tabs links clearfix'><?php print render($primary_local_tasks) ?></ul>
    <?php endif; ?>
  </div>
  <?php print render($title_prefix); ?>
  <h1 class='page-title <?php print $page_icon_class ?>'>
    <?php if (!empty($page_icon_class)): ?><span class='icon'></span><?php endif; ?>
    <?php if ($title) print $title ?>
  </h1>
  <?php if ($action_links): ?>
    <ul class='action-links links clearfix'><?php print render($action_links) ?></ul>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
</div></div>

<?php if ($show_messages && $messages): ?>
<div id='console'><div class='limiter clearfix'><?php print $messages; ?></div></div>
<?php endif; ?>

<div id='page'><div id='main-content' class='limiter clearfix'>
  <?php if ($page['help']) print render($page['help']) ?>
  <div id='content' class='page-content clearfix'>
    <?php if (!empty($page['content'])) print render($page['content']) ?>
  </div>
</div></div>

<div id='footer' class='clearfix'>
  <?php if ($feed_icons): ?>
    <div class='feed-icons clearfix'>
      <label><?php print t('Feeds') ?></label>
      <?php print $feed_icons ?>
    </div>
  <?php endif; ?>
</div>
