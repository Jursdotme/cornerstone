<?php
// Page Settings
// Page Background
$controls[] = array(
  'type'         => 'background',
  'setting'      => 'my_setting',
  'label'        => __( 'Background', 'secondthought' ),
  'description'  =>   __( 'Set background color of image.', 'secondthought' ),
  'section'      => 'background_section',
  'default'      => array(
    'color'    => '#ffffff',
    'image'    => null,
    'repeat'   => 'repeat',
    'size'     => 'inherit',
    'attach'   => 'inherit',
    'position' => 'left-top',
    'opacity'  => 100,
  ),
  'priority' => 3,
  'output' => 'body',
);

// Page Margins
$controls[] = array(
  'type'     => 'radio',
  'mode'     => 'image',
  'setting'  => 'page_margins',
  'label'    => __( 'Page margins', 'secondthought' ),
  'section'  => 'margin_section',
  'priority' => 1,
  'default'  => 0,
  'choices'  => array(
    0 => get_template_directory_uri() . '/functions/kirki/assets/images/1c.png',
    1 => get_template_directory_uri() . '/functions/kirki/assets/images/3cm.png',
  ),
);

// Page Background color
$controls[] = array(
  'type'     => 'color',
  'setting'  => 'content_background_color',
  'label'    => __( 'Content background color', 'secondthought' ),
  'section'  => 'margin_section',
  'default'  => '#fff',
  'priority' => 1,
);

// Page Opacity
$controls[] = array(
  'type'     => 'slider',
  'setting'  => 'content_background_opacity',
  'label'    => __( 'Content background opacity', 'secondthought' ),
  'section'  => 'margin_section',
  'default'  => 0,
  'priority' => 1,
  'choices'  => array(
  'min'  => 1,
  'max'  => 100,
  'step' => 1,
  ),
  );

  // Page Margins
  $controls[] = array(
  'type'     => 'radio',
  'mode'     => 'image',
  'setting'  => 'content_shadow',
  'label'    => __( 'Margin shadow', 'secondthought' ),
  'section'  => 'margin_section',
  'priority' => 1,
  'default'  => 0,
  'choices'  => array(
  0 => get_template_directory_uri() . '/img/customizer/shadow_0.jpg',
  1 => get_template_directory_uri() . '/img/customizer/shadow_1.jpg',
  2 => get_template_directory_uri() . '/img/customizer/shadow_2.jpg',
  3 => get_template_directory_uri() . '/img/customizer/shadow_3.jpg',
  ),
  );
