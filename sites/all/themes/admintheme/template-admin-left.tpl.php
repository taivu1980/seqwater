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
        <li><a href="/?q=node/add/article">Add Article</a></li>
        <li><a href="#">Add Video</a></li>
        <li><a href="#">Add Picture</a></li>
        <li><a href="#">Add Gallery</a></li>
    </ul>
    <hr/>
    <ul>
        <li><a href="/?q=admin">Admin page</a></li>
        <li><a href="/?q=admin/content">Content</a></li>
        <li><a href="/?q=admin/structure">Structure</a></li>
        <li><a href="/?q=admin/dashboard">Dashboard</a></li>
        <li><a href="/?q=admin/help">Help</a></li>
    </ul>
    <hr/>
    <ul>
        <li><a href="/?q=admin/config">Configuration</a></li>
        <li><a href="/?q=admin/modules">Modules</a></li>
        <li><a href="/?q=admin/reports">Reports</a></li>
        <li><a href="/?q=admin/people">People</a></li>
        <li><a href="/?q=admin/appearance">Appearance</a></li>        
    </ul>
    <hr/>
</div>
