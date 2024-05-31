<?php

/**
 * Helper class for child theme functions.
 *
 * @class FLChildTheme
 */
final class FLChildTheme {

    /**
	 * Enqueues scripts and styles.
	 *
     * @return void
     */
    static public function enqueue_scripts()
    {
	    wp_enqueue_style( 'fl-child-theme', FL_CHILD_THEME_URL . '/style.css' );
	    wp_enqueue_style( 'fl-child-theme', FL_CHILD_THEME_URL . '/plugins-all.min.css' );
	    wp_enqueue_script( 'fl-child-theme', FL_CHILD_THEME_URL . '/gallery.js' );
	    wp_enqueue_script( 'fl-child-theme', FL_CHILD_THEME_URL . '/imagesloaded.min.js' );
	    wp_enqueue_script( 'fl-child-theme', FL_CHILD_THEME_URL . '/masonry.min.js' );
	    wp_enqueue_script( 'fl-child-theme', FL_CHILD_THEME_URL . '/quest-and-plugins.js' );
	    wp_enqueue_script( 'fl-child-theme', FL_CHILD_THEME_URL . '/freewall.js' );   
    }
}
