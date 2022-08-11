<footer>
  <div class="container top">
    <div class="subscribe" id="contact">
      <h2>Subscribe newsletter</h2>
      <p> Get our nesws letter</p>
      <div class="input flex">
        <input type="email" placeholder="Your Email address">
        <button class="flex1">
          <span>Subscribe</span>
          <i class="fas fa-arrow-circle-right"></i>
        </button>
      </div>
    </div>

    <div class="content grid  top">
      <div class="box">
        <div class="logo">
          <img src="<?php echo get_theme_file_uri('/images/logo1.png') ?>" alt="">
        </div>
        <div class="social flex">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-youtube"></i>
        </div>
      </div>

      <div class="box">
        <h2>Quick Links</h2>
        <ul>
          <li><i class="fas fa-angle-double-right"></i>Home</li>
          <li><i class="fas fa-angle-double-right"></i>Contact</li>
        </ul>
      </div>

      <div class="box">
        <h2>Services</h2>
        <ul>
          <li><i class="fas fa-angle-double-right"></i>Rides</li>
          <li><i class="fas fa-angle-double-right"></i>Membership</li>

        </ul>
      </div>

      <div class="box">
        <h2>Services</h2>
        <div class="icon flex">
          <div class="i">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div class="text">
            <h3>Address</h3>
            <p>Kampala, Uganda</p>
          </div>
        </div>
        <div class="icon flex">
          <div class="i">
            <i class="fas fa-phone"></i>
          </div>
          <div class="text">
            <h3>Phone</h3>
            <p>+256 88888888</p>
          </div>
        </div>
        <div class="icon flex">
          <div class="i">
            <i class="far fa-envelope"></i>
          </div>
          <div class="text">
            <h3>Email</h3>
            <p>support@nextlevel.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>