<?php
/**
 * @file
 * Scald Video player template
 * Created by SylvainM, cmi75
 * Thanks to defr
 */
?>
<video id="video-js-<?php echo $vars['atom']->sid; ?>" class="video-js vjs-default-skin" width="<?php echo $vars['video_width']; ?>" height="<?php echo $vars['video_height']; ?>" poster="<?php echo file_create_url($vars['thumbnail']); ?>">
  <source src="<?php echo file_create_url($vars['video_uri']); ?>" type="<?php echo $vars['video_type']; ?>" />
</video>
<script>
  videojs("video-js-<?php echo $vars['atom']->sid; ?>", { "controls": true, "autoplay": false, "preload": "auto" });
</script>
