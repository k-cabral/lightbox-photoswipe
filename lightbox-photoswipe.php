<?php
/*
Plugin Name: Lightbox with PhotoSwipe (K Mod)
Plugin URI: https://github.com/k-cabral/lightbox-photoswipe
Description: Lightbox with PhotoSwipe
Version: 5.7.2
Author: Arno Welzel + k-cabral (mods)
Text Domain: lightbox-photoswipe
*/
use LightboxPhotoSwipe\LightboxPhotoSwipe;

defined('ABSPATH') or die();

require(__DIR__ . '/vendor/autoload.php');

// Initialize plugin

$lightbox_photoswipe = new LightboxPhotoSwipe(__FILE__);
