<?php

// Resources example to add custom redirects to the theme
// add_action('template_redirect', 'resources_redirect', 1);
// function resources_redirect() {
//     if(!is_singular('resources') && is_post_type_archive('resources')) {
//         $url = get_home_url().'/resources/guides-insights/';
//         wp_redirect( $url );
//         exit;
//     }
// }