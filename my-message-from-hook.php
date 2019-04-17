<?php

/*
Plugin Name: My message from hook
Plugin URI: #
Description: Show a message in single template 
Author: Mario Bondici 
Version: 1.0
Author URI: #
*/

 
add_filter( 'the_content', 'my_message_from_hook_the_content' );
function my_message_from_hook_the_content( $content ) {
 
    // Don't proceed with this function if we're not viewing a single post.
    if ( ! is_single() ) {
        return $content;
    }
 
    // First, define the message to be displayed.
    $html .= '<p>';
        $html .= 'Questo è un messaggio generato da un gancio.';
    $html .= '</p>';
 
    // Now prepend it to the content.
    $content = $html .= $content;
 
    return $content;
}