<!-- wrapper -->

<?php
// define page layout
if( get_theme_mod( 'page_layout' ) == 0 ) {

  $layout = 'one-column';

} elseif( get_theme_mod( 'page_layout' ) == 1 ) {

  $layout = 'two-column sidebar-left';

} elseif( get_theme_mod( 'page_layout' ) == 2 ) {

  $layout = 'two-column';
  
} ?>

<?php if( get_theme_mod( 'page_margins' ) == 1 ) { ?>

  <?php
    // Define and convert content background to rgba
    $wrapper_background = kirki_get_rgba( get_theme_mod( 'content_background_color' ), get_theme_mod( 'content_background_opacity' ) );

    // Define content background shadow
    if( get_theme_mod( 'content_shadow' ) == 0 ) {
      $content_shadow = 'content_shadow_0';
    } elseif( get_theme_mod( 'content_shadow' ) == 1 ) {
      $content_shadow = 'content_shadow_1';
    } elseif( get_theme_mod( 'content_shadow' ) == 2 ) {
      $content_shadow = 'content_shadow_2';
    } elseif( get_theme_mod( 'content_shadow' ) == 3 ) {
      $content_shadow = 'content_shadow_3';
    }

  ?>

  <body <?php body_class($layout); ?>>
    <div class="wrapper limit-width <?php echo $content_shadow; ?>" style="background-color: <?php echo $wrapper_background; ?>;">
<?php } else { ?>
  <body <?php body_class($layout); ?>>
    <div class="wrapper">
<?php } ?>
