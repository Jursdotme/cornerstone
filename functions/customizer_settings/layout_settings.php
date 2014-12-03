<?php
// Page Layout
$controls[] = array(
  'type'     => 'radio',
  'mode'     => 'image',
  'setting'  => 'page_layout',
  'label'    => __( 'Page Layout', 'secondthought' ),
  'section'  => 'layout_section',
  'priority' => 1,
  'default'  => 0,
  'choices'  => array(
    0 => get_template_directory_uri() . '/functions/kirki/assets/images/1c.png',
    1 => get_template_directory_uri() . '/functions/kirki/assets/images/2cl.png',
    2 => get_template_directory_uri() . '/functions/kirki/assets/images/2cr.png',
  ),
);
