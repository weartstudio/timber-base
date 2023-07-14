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
            wp_enqueue_script( 'uikit', THEME_URI . '/assets/js/uikit.min.js', [], '3.7.0', true );
            wp_enqueue_script( 'uikit-icons', THEME_URI . '/assets/js/uikit-icons.min.js', [], '3.7.0', true );

            // theme js
            wp_enqueue_script( 'theme-js', THEME_URI . '/assets/js/main.js', [], '1.0', true  );

            // theme style
            $cssTimestamp = filemtime(get_template_directory() . '/assets/css/style.min.css');
            wp_enqueue_style( 'theme-css', THEME_URI . '/assets/css/style.min.css', [], $cssTimestamp );

            // Google fonts
            wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap', [], null );
            // fontAwesome
            wp_enqueue_style( 'fontawesome-fonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', [], null );

        }
    }

}

AssetsHandler::getInstance();