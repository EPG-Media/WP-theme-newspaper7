<?php
/**
 * Template Name: Brands
 */
get_header();
?>
<!--onecount_header-->
<div class="entry-content">
					<h1 class="page-title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
                    <?php //include staff links here ?>
					<?php engine_link_pages('before=<div class="page-links pagination">&after=</div>'); ?>
</div>
<!—onecount_footer-->
<?php
get_footer();?>