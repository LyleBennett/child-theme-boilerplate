<?php
// Example to add custom shortcodes to the theme '[child_shortcode attr1="custom-value" ]'
add_shortcode('child_shortcode', 'child_shortcode_function');

function child_shortcode_function($atts) {
    $atts = shortcode_atts(array(
        'attr1' => 'default value',
        'attr2' => 'default value',
    ), $atts);

    //get attr1 by using $atts['attr1']...

    return '<p>This is a child theme shortcode.</p>';
}
