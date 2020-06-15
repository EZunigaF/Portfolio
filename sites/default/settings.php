<?php

/ Relative path.
$settings['default_content_deploy_content_directory'] = '../content';
// Absolute path.
$settings['default_content_deploy_content_directory'] = '/var/dcd/content';

global $content_directories;
$content_directories['sync'] = $app_root.'/../content/sync';

// #ddev-generated: Automatically generated Drupal settings file.
if (file_exists($app_root . '/' . $site_path . '/settings.ddev.php') && getenv('IS_DDEV_PROJECT') == 'true') {
  include $app_root . '/' . $site_path . '/settings.ddev.php';

}

