<?php


function shortcode_func($atts = array(), $content = null) {

  extract(shortcode_atts(array(
     'header' => 'Heading'
    ), $atts));

    return '<div><h5><span>'.$header.'</span></h5><p>'.$content.'</p></div>';

}

// add_shortcode('sampleshortcode', 'shortcode_func');
?>
