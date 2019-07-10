<?php

function mdev_req_post_type()
{

  $portfolio_config = array(
    'public'         => true,
    'label'          => __('Portfolios', 'textdomain'),
    'singular_name'  => __('Portfolio', 'textdomain'),
    'menu_name'      => __('Portfolios', 'textdomain'),
    'menu_icon'      => 'dashicons-portfolio',
  );

  register_post_type('portfolios', $portfolio_config);


  $testimonials_config = array(
    'public'    => true,
    'label'          => __('Testimonials', 'textdomain'),
    'singular_name'  => __('Testimonial', 'textdomain'),
    'menu_name'      => __('Testimonials', 'textdomain'),
    'menu_icon' => 'dashicons-format-status',
  );

  register_post_type('testimonials', $testimonials_config);
}

add_action('init', 'mdev_req_post_type');
