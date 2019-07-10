<section class="section-portfolio">
  <div class="section__box">
    <h2 class="section__box--intro">portfolio &mdash; made with love</h2>
    <i class="section__box--icon md-anim-smallSlideDownUp md-anim-infinity md-anim-delay md-anim-easeInOut fa fa-arrow-circle-down"></i>
    <p class="section__box--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem tempora tempore
      quos maiores totam. Possimus laboriosam quo, quis fugiat omnis dolore tempora accusantium error, earum
      repellendus officiis minus non veritatis.</p>
  </div>
  <div class="portfolio-carousel">

    <?php
    $portfolios = new WP_Query(
      array(
        'post_per_page' => -1,
        'post_type' => 'portfolios',
        'orderby' => 'date',
        'order' => 'DESC'
      )
    );
    while ($portfolios->have_posts()) :
      $portfolios->the_post();
      ?>

      <div class="portfolio-wrapper">
        <div class="portfolio">
          <div class="portfolio__content">
            <figure class="portfolio__gallery">
              <img src="<?php echo get_field('project_image'); ?>" alt="portfolio image" class="portfolio__photo">
            </figure>

            <div class="portfolio__description">
              <div class="portfolio__description--main">
                <a href="#"><?php the_title(); ?></a>
                <p>
                  <?php the_content(); ?>
                </p>
              </div>

              <div class="portfolio__description--stack">
                <h4>stack used</h4>
                <?php $stacks = get_field('stacks');
                foreach ($stacks as $stack) : ?>
                  <span><?php echo $stack; ?></span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <div class="portfolio__info">
            <div class="portfolio__info--topic">
              <div class="portfolio__info--icon-wrapper">
                <svg class="portfolio__info--icon">
                  <use xlink:href="<?php echo get_theme_file_uri('/assets/icon/sprite.svg#icon-ionicons_svg_md-time'); ?>"></use>
                </svg>
              </div>
              <div class="portfolio__info--text">
                <h4>Est. Time</h4>
                <p><?php the_field('project_time') ?> Days</p>
              </div>
            </div>

            <div class="portfolio__info--topic">
              <div class="portfolio__info--icon-wrapper">
                <svg class="portfolio__info--icon">
                  <use xlink:href="<?php echo get_theme_file_uri('/assets/icon/sprite.svg#icon-ionicons_svg_md-card') ?>"></use>
                </svg>
              </div>
              <div class="portfolio__info--text">
                <h4>Est. Cost</h4>
                <p>$<?php the_field('project_cost') ?></p>
              </div>
            </div>

            <div class="portfolio__info--topic">
              <div class="portfolio__info--icon-wrapper">
                <svg class="portfolio__info--icon">
                  <use xlink:href="<?php echo get_theme_file_uri('/assets/icon/sprite.svg#icon-heart-outlined') ?>"></use>
                </svg>
              </div>
              <div class="portfolio__info--text">
                <h4>Client Rating</h4>
                <p> <?php the_field('client_rating') ?> / 5</p>
              </div>
            </div>

            <div class="portfolio__info--topic">
              <div class="portfolio__info--icon-wrapper">
                <a href="<?php echo get_field('project_url'); ?>" target="_blank">
                  <svg class="portfolio__info--icon">
                    <use xlink:href="<?php echo get_theme_file_uri('/assets/icon/sprite.svg#icon-external-link-symbol'); ?>"></use>
                  </svg>
                </a>
              </div>
              <div class="portfolio__info--text">
                <a href="<?php echo get_field('project_url'); ?>" target="_blank">visit website</a>
              </div>
            </div>
          </div>
          <!-- end of portfolio info -->
        </div>
        <!-- end of portfolio -->
      </div>

    <?php endwhile;
    wp_reset_query(); ?>
    <!-- end of portfolio-wrapper -->
  </div>
  <!-- end of portfolio-carousel -->
</section>