<?php
// Typography settings
// Paragraph settings
$controls[] = array(
  'type'     => 'slider',
  'transport' => 'postMessage',
  'setting'  => 'paragraph_font_size',
  'label'    => __( 'Font size', 'secondthought' ),
  'section'  => 'paragraph_section',
  'default'  => 16,
  'priority' => 1,
  'choices'  => array(
    'min'  => 10,
    'max'  => 25,
    'step' => 1,
  ),
);
$controls[] = array(
  'type'     => 'slider',
  'transport' => 'postMessage',
  'setting'  => 'paragraph_line_height',
  'label'    => __( 'Line height', 'secondthought' ),
  'section'  => 'paragraph_section',
  'default'  => 1.5,
  'priority' => 1,
  'choices'  => array(
    'min'  => 1,
    'max'  => 3,
    'step' => 0.1,
  ),
);
$controls[] = array(
  'type'     => 'slider',
  'transport' => 'postMessage',
  'setting'  => 'paragraph_spacing',
  'label'    => __( 'Space below', 'secondthought' ),
  'section'  => 'paragraph_section',
  'default'  => 25,
  'priority' => 1,
  'choices'  => array(
    'min'  => 1,
    'max'  => 60,
    'step' => 1,
  ),
);
$controls[] = array(
  'type'     => 'color',
  'setting'  => 'paragraph_color',
  'label'    => __( 'Color', 'secondthought' ),
  'section'  => 'paragraph_section',
  'default'  => '#222',
  'priority' => 1,
  );

  $arr = array('1', '2', '3', '4', '5', '6');
  foreach ($arr as &$value) {

    $controls[] = array(
    'type'     => 'slider',
    'transport' => 'postMessage',
    'setting'  => 'h' . $value . '_font_size',
    'label'    => __( 'Font size', 'secondthought' ),
    'section'  => 'h' . $value . '_section',
    'default'  => 32,
    'priority' => 1,
    'choices'  => array(
    'min'  => 10,
    'max'  => 120,
    'step' => 1,
    ),
    );
    $controls[] = array(
    'type'     => 'slider',
    'transport' => 'postMessage',
    'setting'  => 'h' . $value . '_line_height',
    'label'    => __( 'Line height', 'secondthought' ),
    'section'  => 'h' . $value . '_section',
    'default'  => 1.5,
    'priority' => 1,
    'choices'  => array(
    'min'  => 1,
    'max'  => 3,
    'step' => 0.1,
    ),
    );
    $controls[] = array(
    'type'     => 'slider',
    'transport' => 'postMessage',
    'setting'  => 'h' . $value . '_spacing',
    'label'    => __( 'Space below', 'secondthought' ),
    'section'  => 'h' . $value . '_section',
    'default'  => 25,
    'priority' => 1,
    'choices'  => array(
    'min'  => 1,
    'max'  => 60,
    'step' => 1,
    ),
    );
    $controls[] = array(
    'type'     => 'color',
    'setting'  => 'h' . $value . '_color',
    'label'    => __( 'Color', 'secondthought' ),
    'section'  => 'h' . $value . '_section',
    'default'  => '#222',
    'priority' => 1,
    'transport' => 'postMessage',
    );
  }
  // $arr is now array(2, 4, 6, 8)
  unset($value); // break the reference with the last element

  // Link colors
  $controls[] = array(
  'type'     => 'color',
  'setting'  => 'link_color',
  'label'    => __( 'Link color', 'secondthought' ),
  'section'  => 'link_section',
  'default'  => '#CE2922',
  'priority' => 1,
  );
  $controls[] = array(
  'type'     => 'color',
  'setting'  => 'link_color_hover',
  'label'    => __( 'Link color on hover', 'secondthought' ),
  'section'  => 'link_section',
  'default'  => '#af1c1c',
  'priority' => 1,
  );
