<?php

function bg_all_thumbnails()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'bg_add_thumbnails');

