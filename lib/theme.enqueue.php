<?php

Class AssetsHandler extends Singleton
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', array( $this, 'addScriptsStyles' ) );
    }

    public function addScriptsStyles(){
        if(!is_admin()) {

            // UI kit js
            wp_enqueue_script( 'uikit', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.16.22/js/uikit.min.js', [], '3.16.22', true );
            wp_enqueue_script( 'uikit-icons', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.16.22/js/uikit-icons.min.js', [], '3.16.22', true );

            // theme js
            wp_enqueue_script( 'theme-js', THEME_URI . '/assets/js/main.js', [], '1.0', true  );

            // theme style
            $cssTimestamp = filemtime(get_template_directory() . '/assets/css/style.min.css');
            wp_enqueue_style( 'theme-css', THEME_URI . '/assets/css/style.min.css', [], $cssTimestamp );

        }
    }

}

AssetsHandler::getInstance();