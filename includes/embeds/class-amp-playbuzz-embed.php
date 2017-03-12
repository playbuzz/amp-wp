<?php

require_once( AMP__DIR__ . '/includes/embeds/class-amp-base-embed-handler.php' );

class AMP_Playbuzz_Embed_Handler extends AMP_Base_Embed_Handler {

    public function register_embed() {

    }

    public function unregister_embed() {

    }

    public function get_scripts() {
        return array(
            'amp-playbuzz' => 'https://cdn.ampproject.org/v0/amp-playbuzz-0.1.js'
        );
    }

    public function add_related_posts( $content ) {

        return $content;
    }

}