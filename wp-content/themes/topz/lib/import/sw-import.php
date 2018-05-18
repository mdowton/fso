<?php

function sw_import_files() { 
  return array(
    array(
      'import_file_name'             => 'Demo Homepage 1',
      'page_title'                   => 'Home Page',
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/widgets.json',
      'local_import_revslider'       => array( 
        'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/slideshow-1.zip',
        'slide2' => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/video_bg.zip' 
      ),
      'local_import_options'         => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/theme_options.txt',
          'option_name' => 'topz_theme',
          ),
        ),
      'menu_locate'                  => array(
        'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
        ),
      'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-1/screenshot.png',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'topz' ),
      'preview_url'                  => 'http://demo.wpthemego.com/themes/sw_topz/',
      ),

array(
  'import_file_name'             => 'Demo Homepage 2',
  'page_title'                   => 'Home Page 2',
  'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/demo-content.xml',
  'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/widgets.json',
  'local_import_revslider'       => array( 
        'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/slideshow-2.zip'
      ),
  'local_import_options'         => array(
    array(
      'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/theme_options.txt',
      'option_name' => 'topz_theme',
      ),
    ),
  'menu_locate'                  => array(
    'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
    ),
  'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-2/screenshot.png',
  'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'topz' ),
  'preview_url'                  => 'http://demo.wpthemego.com/themes/sw_topz/sport/',
  ),

array(
  'import_file_name'             => 'Demo Homepage 3',
  'page_title'                   => 'Home Page 3',
  'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-3/demo-content.xml',
  'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-3/widgets.json',
    'local_import_revslider'       => array( 
        'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-3/slideshow-3.zip' 
      ),
  'local_import_options'         => array(
    array(
      'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-3/theme_options.txt',
      'option_name' => 'topz_theme',
      ),
    ),
  'menu_locate'                  => array(
    'primary_menu' => 'Primary Menu',
    'vertical_menu' => 'Left Menu'   /* menu location => menu name for that location */
    ),
  'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-3/screenshot.png',
  'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'topz' ),
  'preview_url'                  => 'http://demo.wpthemego.com/themes/sw_topz/fashion/',
  ),

array(
  'import_file_name'             => 'Demo Homepage 4',
  'page_title'                   => 'Home Page 4',
  'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/demo-content.xml',
  'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/widgets.json',
    'local_import_revslider'       => array( 
        'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/slideshow-4.zip',
        'slide2' => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/video_bg_2.zip'  
      ),
  'local_import_options'         => array(
    array(
      'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/theme_options.txt',
      'option_name' => 'topz_theme',
      ),
    ),
  'menu_locate'                  => array(
    'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
    ),
  'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-4/screenshot.png',
  'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'topz' ),
  'preview_url'                  => 'http://demo.wpthemego.com/themes/sw_topz/food/',
  ),


);
}
add_filter( 'pt-ocdi/import_files', 'sw_import_files' );

