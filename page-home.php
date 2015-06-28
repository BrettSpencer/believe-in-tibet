<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>


<!-- Begin Content -->
<div id="content">

    <!-- Begin Spotlight -->
    <div id="spotlight">
    <?php add_flexslider(); ?>
    </div>
    <!-- End Spotlight -->
    
    <!-- Begin SEO Text -->    
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<article class="page" id="post-<?php the_ID(); ?>">
    <?php the_content(); ?>
	</article>
	<?php endwhile; ?>
	<?php endif; ?>
    <!-- End SEO Text -->
    
    
</div>
<!-- End Content -->

<?php get_footer();?>