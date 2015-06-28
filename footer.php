<?php get_sidebar(); ?>

</div>
<!-- End Middle -->

<!-- Begin Links -->
<div id="foot-contain">
<div id="menu-footer">
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
</div>
<div id="footer">
	<p class="alignright">&copy; 2014 - <?php echo date("Y"); ?> <a href="<?php get_site_url(); ?>"><?php bloginfo('name'); ?></a>. All rights reserved.</p>
</div>
</div>
<!-- End Links --> 

<!-- Begin Analytics -->

<!-- End Analytics -->

<!--[if lt IE 9]>
<script language="JavaScript" type="text/javascript">
alert("It appears that you are using an outdated version of Internet Explorer that does not support HTML5 or CSS3.")
</script><![endif]-->

<!-- Begin WP Footer -->
<?php wp_footer(); ?>
<!-- End WP Footer -->

</body>
</html>