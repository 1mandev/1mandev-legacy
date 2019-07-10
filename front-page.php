<?php get_header(); ?>

<?php
  get_template_part( 'template-parts/mdev', 'hero' );
  get_template_part( 'template-parts/mdev', 'story' );
  get_template_part( 'template-parts/mdev', 'services' );
  get_template_part( 'template-parts/mdev', 'stack' );
  get_template_part( 'template-parts/mdev', 'pricing' );
  get_template_part( 'template-parts/mdev', 'marketplace' );
  get_template_part( 'template-parts/mdev', 'why' );
  get_template_part( 'template-parts/mdev', 'portfolios' );
  get_template_part( 'template-parts/mdev', 'testimonials' );
  get_template_part( 'template-parts/mdev', 'contact' ); 
?>

<?php get_footer(); ?>