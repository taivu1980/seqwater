Scald Video is a scald provider to host your videos in your drupal site.

INSTALL
- Download videojs library: http://www.videojs.com/ and copy it in /sites/all/libraries
- Enable module (https://drupal.org/documentation/install/modules-themes/modules-7)

- Accepts video files .mp4, .webm and .ogv. To be tested: webm or ogv file in browser that don't support it (IE, Opera, Safari). Maybe we have to choose to upload only mp4 files, as it is supported in all browsers (html5 or flash fallback).
- Uses videojs (http://www.videojs.com/) as default player: html5, flash fallback

TODO
- tests/debug
- code clean
- add admin page with options (preload, autoplay, controls...etc.)
- videos transcoding: mp4, webm (see https://drupal.org/project/ffmpeg_wrapper & https://drupal.org/project/video)
- responsive
