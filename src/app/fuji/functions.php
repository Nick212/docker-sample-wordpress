<?php
if(function_exists('register_sidebar'))
register_sidebar(array(
  'before_widget' => '<div class="widgets">',
  'after_widget' => '</div>',
  'before_title' => '<h2>',
  'after_title' => '</h2>',
));


  add_theme_support('post-thumbnails');



  register_nav_menus(
    array(
    'menu_principal' => __( 'First Menu', 'menu_principal' )
    )
  );

  /** Add post_thumbnails suport.*/
  add_theme_support( 'post-thumbnails' );

  /*** Add feed link.*/
  add_theme_support( 'automatic-feed-links' );

  /** Support Custom Header. */
  $default = array(
    'width'         => 0,
    'height'        => 0,
    'flex-height'   => false,
    'flex-width'    => false,
    'header-text'   => false,
    'default-image' => '',
    'uploads'       => true,
  );
  add_theme_support( 'custom-header', $default );

  /** Support Custom Background.*/
  $defaults = array(
    'default-color' => '',
    'default-image' => '',
  );
  add_theme_support( 'custom-background', $defaults );

  /*** Add support for infinite scroll.*/
  add_theme_support(
    'infinite-scroll',
    array(
      'type'           => 'scroll',
      'footer_widgets' => false,
      'container'      => 'content',
      'wrapper'        => false,
      'render'         => false,
      'posts_per_page' => get_option( 'posts_per_page' )
      )
    );

    function register_my_menus() {
      register_nav_menu( 'menu_principal', 'First Menu' );
    }
    add_action( 'init', 'register_my_menus' );