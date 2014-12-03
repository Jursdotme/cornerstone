<?php



function secondthought_customizer_css()
{
  ?>
  <style type="text/css">
  html {
    font-size: <?php echo get_theme_mod( 'paragraph_font_size' ) . "px";?>;
    line-height: <?php echo get_theme_mod( 'paragraph_line_height' );?>;
    color: <?php echo get_theme_mod( 'paragraph_color' );?>;
  }

  p {
    margin-bottom: <?php echo get_theme_mod( 'paragraph_spacing' ) . "px";?>;
  }

  a {
    color: <?php echo get_theme_mod( 'link_color' );?>;
  }

  a:hover {
    color: <?php echo get_theme_mod( 'link_color_hover' );?>;
  }

  <?php
  $arr = array('h1', 'h2', 'h3', 'h4', 'h5', 'h6');
  foreach ($arr as &$value) {
    ?>

    <?php echo $value; ?> {
      font-size: <?php echo get_theme_mod( $value . '_font_size' ) . "px";?>;
      line-height: <?php echo get_theme_mod( $value . '_line_height' );?>;
      margin-bottom: <?php echo get_theme_mod( $value . '_spacing' ) . "px";?>;
      color: <?php echo get_theme_mod( $value . '_color' );?>;
    }

    <?php
  }
  // $arr is now array(2, 4, 6, 8)
  unset($value); // break the reference with the last element
  ?>

  body {
    background-color:<?php echo kirki_get_rgba(get_theme_mod( 'my_setting_color' ), get_theme_mod( 'my_setting_opacity' ));?>;
    background-image: url(<?php echo get_theme_mod( 'my_setting_image' );?>);
    background-repeat: <?php echo get_theme_mod( 'my_setting_repeat' );?>;
    background-size: <?php echo get_theme_mod( 'my_setting_size' );?>;
    background-attachment: <?php echo get_theme_mod( 'my_setting_attach' );?>;
    background-position: <?php echo get_theme_mod( 'my_setting_position' );?>;
  }

  </style>
  <?php
}
add_action('wp_head', 'secondthought_customizer_css');

/**
* Create the sections
*/
function my_custom_sections( $wp_customize ) {

  $wp_customize->add_panel( 'navigation_panel', array(
    'priority' => 200,
    'title' => __('Navigation', 'secondthought'),
    'description' => 'dds',
  ) );

  $wp_customize->add_panel( 'typography_panel', array(
    'priority' => 200,
    'title' => __('Typography', 'secondthought'),
    'description' => __('Edit typographic settings on the site with these fancy controls', 'secondthought'),
  ) );

  $wp_customize->add_section( 'paragraph_section', array(
    'priority' => 200,
    'title'    => __('Body copy', 'secondthought'),
    'panel'    => 'typography_panel'
  ) );

  $arr = array('1', '2', '3', '4', '5', '6');
  foreach ($arr as &$value) {
    $wp_customize->add_section( 'h' . $value . '_section', array(
      'priority' => 201,
      'title'    => __('Heading ' . $value, 'secondthought'),
      'panel'    => 'typography_panel'
      ) );
  }
  // $arr is now array(2, 4, 6, 8)
  unset($value); // break the reference with the last element

  $wp_customize->add_section( 'link_section', array(
    'priority' => 200,
    'title'    => __('Link colors', 'secondthought'),
    'panel'    => 'typography_panel'
    ) );

  $wp_customize->add_panel( 'page_setup_panel', array(
    'priority' => 200,
    'title' => __('Page Setup', 'secondthought'),
    'description' => 'dsds',
  ) );

  $wp_customize->add_section( 'background_section', array(
    'priority' => 200,
    'title'    => __('Background', 'secondthought'),
    'panel'    => 'page_setup_panel'
  ) );

  $wp_customize->add_section( 'margin_section', array(
    'priority' => 200,
    'title'    => __('Page margins', 'secondthought'),
    'panel'    => 'page_setup_panel'
  ) );

  $wp_customize->add_section( 'layout_section', array(
    'priority' => 200,
    'title'    => __('Page layout', 'secondthought'),
    'panel'    => 'page_setup_panel'
  ) );

  // Edit the defaul settings from wordpress
  $wp_customize->get_section( 'nav' )   -> panel = 'navigation_panel';
  $wp_customize->get_section( 'nav' )   -> title = __('Navigation Placement', 'seconthought');

  }
  add_action( 'customize_register', 'my_custom_sections' );

  /**
  * Create the settings
  */
  function my_custom_setting( $controls ) {

    // Typography settings (Font sizes, line-height, link-colors etc)
    require_once( get_template_directory() . '/functions/customizer_settings/typography_settings.php' );

    // Page settings ( background image, margins etc.)
    require_once( get_template_directory() . '/functions/customizer_settings/page_settings.php' );

    // Page settings ( background image, margins etc.)
    require_once( get_template_directory() . '/functions/customizer_settings/layout_settings.php' );


    return $controls;


  }
  add_filter( 'kirki/controls', 'my_custom_setting' );
