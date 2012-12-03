      <section class="colophon content">
        <footer class="wrapper">
          <aside>
            <h3>Address</h3>
            <address><span>Physical Address:</span> 1810 E Ainsworth St., Pasco, WA 99301</address>
            <address><span>Postal Address:</span> PO Box 1050, Pasco, WA 99301-1050</address>
            <p class="phone"><span>Phone:</span> 509-547-7761</p>
            <p class="phone"><span>Fax:</span> 509-547-2194</p>
          </aside>
          <aside>
            <h3>Contact</h3>
            <ul>
              <li><a href="#">Customer Support</a></li>
              <li><a href="#">Accounting</a></li>
              <li><a href="<?php echo home_url('/general-information'); ?>">General Information</a></li>
            </ul>
          </aside>
          <a href="<?php echo home_url('/'); ?>" class="logo">
            <img src="<?php bloginfo('template_url'); ?>/images/footer_logo.png" alt="Mid-Columbia Warehouses Logo Graphic" />
          </a><!-- /.logo -->
        </footer><!-- /.wrapper -->
      </section><!-- /.colophon -->
      <footer class="credits wrapper">
          <p>&copy 2012 <?php bloginfo('name'); ?>  Brought to you by <a href="#">Rockwalla IT.</a></p>
          <?php wp_footer(); ?>
      </footer><!-- /.credits  -->
    </div><!-- /.page -->
  </body>
</html>
