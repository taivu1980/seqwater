<?php
/**
 * @file
 *   Default theme implementation for Scald File Render.
 */
?>
<img src="<?php print file_create_url($vars['thumbnail_source']); ?>" class="scald-file-icon"/>
<a href="<?php print file_create_url($vars['file_source']); ?>">
  <?php print $vars['file_title']; ?>
</a>
