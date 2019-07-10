<footer class="footer">
  <div class="footer__box">
    <div class="footer__box--about">
      <div class="fabout__image">
        <img src="<?php echo get_theme_file_uri('/assets/img/logo-colordark.png') ?>" alt="Site Footer Logo">
      </div>
      <div class="fabout__info">
        <h3 class="fabout__info--title">1MANDEV.COM</h3>
        <p class="fabout__info--details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam magnam qui, facilis praesentium sed tempora quaerat veniam? Architecto pariatur accusantium unde dicta obcaecati. Possimus, laudantium omnis debitis molestias porro quas!</p>
      </div>
    </div>
    <div class="footer__box--menu-1">
      <ul class="fmenu">
        <li><a href="#">Serives</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Why Us</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Testimonials</a></li>
      </ul>
    </div>
    <div class="footer__box--menu-2">
      <ul class="fmenu">
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms & Conditions</a></li>
      </ul>
    </div>
    <div class="footer__box--social">
      <ul class="fsocial">
        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fab fa-github-square"></i></a> </li>
      </ul>
    </div>
  </div>
  <div class="footer__copyright">
    <p>&copy; All rights reserved by <a href="http://1mandev.com">1ManDev.com</a></p>
  </div>
</footer>

<!-- ========== Twak Script ========== -->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5c7a80e0a726ff2eea5a40c0/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<?php wp_footer(); ?>
</body>
</html>