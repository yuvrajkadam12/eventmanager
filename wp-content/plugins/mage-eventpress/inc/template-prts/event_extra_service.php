<?php
if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.

add_action('mep_event_extra_service', 'mep_ev_extra_serv',10,2);
if (!function_exists('mep_ev_extra_serv')) {
    function mep_ev_extra_serv($post_id,$extra_service_label)
    {
        global $post, $product;
        $post_id                        = $post_id;
        $count                      = 1;
        $mep_events_extra_prices    = get_post_meta($post_id, 'mep_events_extra_prices', true) ? get_post_meta($post_id, 'mep_events_extra_prices', true) : array();
        $event_date                 = get_post_meta($post_id, 'event_start_date', true) . ' ' . get_post_meta($post_id, 'event_start_time', true);
        $mep_available_seat         = get_post_meta($post_id, 'mep_available_seat', true) ? get_post_meta($post_id, 'mep_available_seat', true) : 'on';
        ob_start();
       
        if (sizeof($mep_events_extra_prices) > 0) {
           
            require(mep_template_file_path('single/extra_service_list.php'));
        }
        $content = ob_get_clean();
        $event_meta = get_post_custom($post_id);
        echo apply_filters('mage_event_extra_service_list', $content, $post_id, $event_meta,$event_date);
    }
}
