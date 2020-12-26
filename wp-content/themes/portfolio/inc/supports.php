<?php

/**
 * Add post thumbnails
 */
function calbarThemeSupports()
{
    add_theme_support('post-thumbnails');
}
add_action('init', 'calbarThemeSupports');