<section class="section-testimonials" id="testimonials">
  <div class="section__box">
    <h2 class="section__box--intro">Testimonials &mdash; What People say</h2>
    <i class="section__box--icon md-anim-smallSlideDownUp md-anim-infinity md-anim-delay md-anim-easeInOut fa fa-arrow-circle-down"></i>
    <p class="section__box--text">We're constantly collecting our customers' feedback. We tried our best to meet the satisfaction of our customer. Surprisingly, they do speak for us. Here are some.</p>
  </div>
  <div class="testimonial-carousel">
    <?php
    $testimonials = new WP_Query(
      array(
        'post_per_page' => -1,
        'post_type' => 'testimonials',
        'orderby' => 'date',
        'order' => 'DESC'
      )
    );
    while ($testimonials->have_posts()) :
      $testimonials->the_post();
      ?>
      <div class="testimonial-wrapper">
        <div class="testimonial">
          <div class="testimonial__content">
            <div class="testimonial__comment">
              <?php the_content(); ?>
            </div>
            <div class="testimonial__author">
              <img src="<?php echo get_field('client_image'); ?>" alt="Author image">
              <div class="testimonial__author--detail">
                <h2><?php the_field('client_name'); ?></h2>
                <p><?php the_field('client_designation'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile;
    wp_reset_query(); ?>
    <!-- end of testimonial-wrapper -->
  </div>
  <!-- end of testimonial-carousel -->
</section>
<!-- end of section-testimonials -->