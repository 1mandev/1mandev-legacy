<section class="section-contact" id="contact-us">
  <div class="section__box">
    <h2 class="section__box--intro">Contact us &mdash; Let's Talk About The Project</h2>
    <i class="section__box--icon md-anim-smallSlideDownUp md-anim-infinity md-anim-delay md-anim-easeInOut fa fa-arrow-circle-down"></i>
    <p class="section__box--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem tempora tempore
      quos maiores totam. Possimus laboriosam quo, quis fugiat omnis dolore tempora accusantium error, earum
      repellendus officiis minus non veritatis.</p>
  </div>

  <?php echo do_shortcode('[contact-form-7 id="6" title="CONTACT US (Homepage)"]'); ?>

  <div class="source">
    <a href="tel:+8801722893129" class="source__item">
      <div>
        <svg class="source__item--icon">
          <use xlink:href="<?php echo get_theme_file_uri('/assets/icon/sprite.svg#icon-ionicons_svg_md-call'); ?>"></use>
        </svg>
      </div>
      <div class="source__item--info">
        <p>call now</p>
        <h4>+880 1722 893129</h4>
      </div>
    </a>

    <a href="mailto:contact@1mandev.com" class="source__item">
      <div>
        <svg class="source__item--icon">
          <use xlink:href="<?php echo get_theme_file_uri('/assets/icon/sprite.svg#icon-ionicons_svg_md-mail'); ?>"></use>
        </svg>
      </div>
      <div class="source__item--info">
        <p>email us</p>
        <h4 class="small">contact@1mandev.com</h4>
      </div>
    </a>

    <a href="callto:1mandev.com" class="source__item">
      <div>
        <svg class="source__item--icon">
          <use xlink:href="<?php echo get_theme_file_uri('/assets/icon/sprite.svg#icon-skype'); ?>"></use>
        </svg>
      </div>
      <div class="source__item--info">
        <p>skype</p>
        <h4>1mandev</h4>
      </div>
    </a>
  </div>
</section>