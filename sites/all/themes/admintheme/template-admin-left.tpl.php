<?php
//$item = menu_get_item('admin');
//if ($item && $item['access']) {
//    $tree = menu_tree_all_data('management');
//    foreach ($tree as $key => $branch) {
//        if ($branch['link']['link_path'] !== 'admin') {
//            unset($tree[$key]);
//        }
//    }
//    $tree  = menu_tree_output($tree);    
//    echo render($tree);
//}
?>
<div class="banner-admin clearfix">
    <h2>SEQ Admin</h2>
</div>
<div class="left-menu-item">
    <ul>
        <li class="add-article"><a title="Add Article" href="/seqwater/node/add/article">Add Article</a></li>
        <li class="add-video"><a title="Add Video" href="#">Add Video</a></li>
        <li class="add-picture"><a title="Add Picture" href="#">Add Picture</a></li>
        <li class="add-gallery"><a title="Add Gallery" href="#">Add Gallery</a></li>
    </ul>
    <hr/>
    <ul>
        <li class="admin-page"><a href="/seqwater/admin">Admin page</a></li>
        <li class="content"><a href="/seqwater/admin/content">Content</a></li>
        <li class="structure"><a href="/seqwater/admin/structure">Structure</a></li>
        <li class="dashboard"><a href="/seqwater/admin/dashboard">Dashboard</a></li>
        <li class="help"><a href="/seqwater/admin/help">Help</a></li>
    </ul>
    <hr/>
    <ul>
        <li class="configuration"><a href="/seqwater/admin/config">Configuration</a></li>
        <li class="module"><a href="/seqwater/admin/modules">Modules</a></li>
        <li class="report"><a href="/seqwater/admin/reports">Reports</a></li>
        <li class="people"><a href="/seqwater/admin/people">People</a></li>
        <li class="appearance"><a href="/seqwater/admin/appearance">Appearance</a></li>        
    </ul>
    <hr/>
</div>
