<?php
if (!defined('ABSPATH')) {
  die;
} // Cannot access pages directly.

add_action('mep_event_expire_text', 'mep_event_display_expire_text');
if (!function_exists('mep_event_display_expire_text')) {
  function mep_event_display_expire_text()
  {
    ob_start();
?>
    <span class=event-expire-btn>
      <?php echo mep_get_option('mep_event_expired_text', 'label_setting_sec', __('Sorry, this event is expired and no longer available.', 'mage-eventpress'));  ?>
    </span>
  <?php
    echo ob_get_clean();
  }
}

add_action('mep_event_no_seat_text', 'mep_event_display_no_seat_text');
if (!function_exists('mep_event_display_no_seat_text')) {
  function mep_event_display_no_seat_text()
  {
    ob_start();
  ?>
    <span class=event-expire-btn>
      <?php echo mep_get_option('mep_no_seat_available_text', 'label_setting_sec', __('Sorry, There Are No Seats Available', 'mage-eventpress'));  ?>
    </span>
<?php
    echo ob_get_clean();
  }
}
