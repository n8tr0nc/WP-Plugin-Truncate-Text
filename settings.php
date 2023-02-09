<?php
// Create menu item and page
function truncate_text_settings_menu() {
  add_options_page( 'Truncate Text Settings', 'Truncate Text', 'manage_options', 'truncate-text-settings', 'truncate_text_settings_page' );
}
add_action( 'admin_menu', 'truncate_text_settings_menu' );

// Settings page
function truncate_text_settings_page() {
  if ( !current_user_can( 'manage_options' ) ) {
    wp_die( 'You do not have sufficient permissions to access this page.' );
  }
  ?>
  <div class="wrap">
    <h1>Truncate Text Settings</h1>
    <form action="options.php" method="post">
      <?php
      settings_fields( 'truncate-text-settings' );
      do_settings_sections( 'truncate-text-settings' );
      submit_button();
      ?>
    </form>
  </div>
  <?php
}

// Register plugin settings
function truncate_text_register_settings() {
  register_setting( 'truncate-text-settings', 'truncate-text-limit' );
  add_settings_section( 'truncate-text-section', 'Truncate Text Settings', 'truncate_text_section_callback', 'truncate-text-settings' );
  add_settings_field( 'truncate-text-limit', 'Truncate Limit', 'truncate_text_limit_callback', 'truncate-text-settings', 'truncate-text-section' );
}
add_action( 'admin_init', 'truncate_text_register_settings' );

// Settings section callback
function truncate_text_section_callback() {
  echo '<p>Enter the limit for truncating text</p>';
}

// Settings field callback
function truncate_text_limit_callback() {
  $limit = esc_attr( get_option( 'truncate-text-limit' ) );
  echo '<input type="text" name="truncate-text-limit" value="' . $limit . '" />';
}
