<div class="left-menu">
    <?php
        $path = drupal_get_path("theme", "admintheme");
        include $path.'/template-admin-left.tpl.php';
    ?>
</div>

<div class="content-right">
    <div id="branding" class="clearfix">
        <!-- notification-->
        <div class="notification">
            <span class="notification1" title="Waiting approve(5)"></span>
            <span class="notification2" title="News change(2)"></span>
            <span><a href="/seqwater/user/logout">Logout</a></span>
        </div>
        <!-- end - notification-->
        
        <?php print $breadcrumb; ?>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
            <h1 class="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print render($primary_local_tasks); ?>        
    </div>

    <div id="page">    
        <?php if ($secondary_local_tasks): ?>
            <div class="tabs-secondary clearfix"><?php print render($secondary_local_tasks); ?></div>
        <?php endif; ?>

        <div id="content" class="clearfix">
            <div class="element-invisible"><a id="main-content"></a></div>
            <?php if ($messages): ?>
                <div id="console" class="clearfix"><?php print $messages; ?></div>
            <?php endif; ?>
            <?php if ($page['help']): ?>
                <div id="help">
                    <?php print render($page['help']); ?>
                </div>
            <?php endif; ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>     
            <?php print render($page['content']); ?>
        </div>

        <div id="footer">
            <?php print $feed_icons; ?>      
        </div>
    </div>
</div>