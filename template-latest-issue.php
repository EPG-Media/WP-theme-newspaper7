<?php
/*
Template Name: Latest Issue
*/
?>
<?php get_header(); ?>
<div class="content-wrap">
    <div class="content" style="width:945px;">
        <?php tie_breadcrumbs() ?>
        
        <?php if ( ! have_posts() ) : ?>
		
            <div id="post-0" class="post not-found post-listing">
                <h1 class="post-title"><?php _e( 'Not Found', 'tie' ); ?></h1>
                <div class="entry">
                    <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'tie' ); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </div>
        <?php endif; ?>
        
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
        <?php 
            if( function_exists('bp_current_component') && bp_current_component() ) $current_id = get_queried_object_id();
            else $current_id = $post->ID;
            $get_meta = get_post_custom( $current_id );
            
            if( !empty( $get_meta['tie_review_position'][0] ) ){
                $review_position = $get_meta['tie_review_position'][0] ;
                $rv = $tie_reviews_attr;
            }
            
            $post_width = $get_meta["tie_sidebar_pos"][0];
            if( $post_width == 'full' ){
                if(tie_get_option( 'columns_num' ) == '2c') $content_width = 955;
                else $content_width = 1160;
            }
        ?>
        <?php //Above Post Banner
        if( empty( $get_meta["tie_hide_above"][0] ) ){
            if( !empty( $get_meta["tie_banner_above"][0] ) ) echo '<div class="ads-post">' .htmlspecialchars_decode($get_meta["tie_banner_above"][0]) .'</div>';
            else tie_banner('banner_above' , '<div class="ads-post">' , '</div>' );
        }
        ?>
        
        <article <?php if( !empty( $rv['review'] ) ) echo $rv['review']; post_class('post-listing post'); ?>>
            <?php //get_template_part( 'includes/post-head' ); // Get Post Head template ?>

            <div class="post-inner">
                <!-- <h1 class="name post-title entry-title" itemprop="itemReviewed" itemscope itemtype="http://schema.org/Thing"><span itemprop="name"><?php the_title(); ?></span></h1> -->
                <p class="post-meta"></p>
                <div class="clear"></div>
                <div class="entry">
                	<table align="right" style="width:100%;border:none;background:none;">
                		<tbody>
							
                		<tr>
                            <td class="current-issue-top-buttons"><a href="https://itunes.apple.com/us/app/rider-magazine-motorcycling/id909025591?ls=1&amp;mt=8">
                					<img class="alignnone size-full wp-image-338" title="iTunes App" src="http://ridermagazine.com/wp-content/uploads/2016/05/itunes.jpg" alt="iTunes App" />
                				</a></td>
                            <td class="current-issue-top-buttons"><a href="https://play.google.com/store/apps/details?id=com.magazinecloner.rider" class="current-issue-top-buttons">
                					<img class="alignnone size-full wp-image-338" title="Android App" src="http://ridermagazine.com/wp-content/uploads/2016/05/android.jpg" alt="Android App" />
                				</a></td>
                            <td class="current-issue-top-buttons"><a href="https://w1.buysub.com/pubs/AC/RDR/68650.jsp?cds_page_id=68650&cds_mag_code=RDR&id=1463494260079&lsid=61380911000026897&vid=1&cds_response_key=TRZ17MORE_target%3Dblank">
                					<img class="alignnone size-full wp-image-338" title="Subscribe Now" src="http://ridermagazine.com/wp-content/uploads/2016/05/subscribe-now.jpg" alt="Subscribe Now" />
                				</a></td>
                			<td class="current-issue-top-buttons"><a href="https://w1.buysub.com/pubs/AC/RDR/login_singlemag_noCAPTCHA.jsp?cds_page_id=68438&amp;cds_mag_code=RDR">
                					<img class="alignnone size-full wp-image-337" title="Customer Service" src="http://ridermagazine.com/wp-content/uploads/2016/05/cust-service.jpg" alt="Customer Service" />
                				</a></td>
                			<td class="current-issue-top-buttons"><a href="https://w1.buysub.com/pubs/AC/RDR/68650.jsp?cds_page_id=68650&cds_mag_code=RDR&id=1463494260079&lsid=61380911000026897&vid=1&cds_response_key=TRZ17MORE_target%3Dblank">
                					<img class="alignnone size-full wp-image-336" title="Rider Magazine Renewal" src="http://ridermagazine.com/wp-content/uploads/2016/05/renew-sub.jpg" alt="Renew Rider Subscription" />
                				</a></td>
                		</tr>
                		</tbody>
                	</table>

                    <?php if( !empty( $review_position ) && ( $review_position == 'top' || $review_position == 'both'  ) ) tie_get_review('review-top'); ?>

                    <?php the_content(); ?>
                    <div style="float:right;">
                    	<?php the_post_thumbnail( 'full' ); ?>
                    </div>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'tie' ), 'after' => '</div>' ) ); ?>
                    
                    <?php if( !empty( $review_position ) && ( $review_position == 'bottom' || $review_position == 'both' ) ) tie_get_review('review-bottom'); ?>

                    <?php edit_post_link( __( 'Edit', 'tie' ), '<span class="edit-link">', '</span>' ); ?>
                    
                    <table style="margin: auto; width:100%;border:none;background:none;">
                    	<tbody>
                    	<tr>
                    		<td><a href="https://w1.buysub.com/pubs/AC/RDR/68650.jsp?cds_page_id=68650&cds_mag_code=RDR&id=1463494260079&lsid=61380911000026897&vid=1&cds_response_key=TRZ17MORE_target%3Dblank">
                    				<img class="alignnone size-full wp-image-337" title="Subscribe Now" src="http://ridermagazine.com/wp-content/uploads/2016/05/subscribe-now.jpg" alt="Subscribe Now" width="170" height="24" />
                    			</a></td>
                    		<td><a href="/more-magazines/">
                    				<img class="alignnone size-full wp-image-338" title="More Magazines" src="http://ridermagazine.com/wp-content/uploads/2016/05/more-mags.jpg" alt="More Magazines" width="170" height="24" />
                    			</a></td>
                    		<td><a href="https://w1.buysub.com/servlet/ConvertibleGateway?cds_mag_code=RDR&amp;cds_page_id=68650">
                    				<img class="alignnone size-full wp-image-336" title="Rider Magazine Gift Subscription" src="http://ridermagazine.com/wp-content/uploads/2016/05/gift-subscription.jpg" alt="Gift Subscription" width="170" height="24" />
                    			</a></td>
                    		<td><a href="https://w1.buysub.com/pubs/AC/RDR/68650.jsp?cds_page_id=68650&cds_mag_code=RDR&id=1463494260079&lsid=61380911000026897&vid=1&cds_response_key=TRZ17MORE_target%3Dblank">
                    				<img class="alignnone size-full wp-image-337" title="Rider Subscription Renewal" src="http://ridermagazine.com/wp-content/uploads/2016/05/renew-sub.jpg" alt="Renew Rider Subscription" width="170" height="24" />
                    			</a></td>
                    	</tr>
                    	</tbody>
                    </table>

                </div><!-- .entry /-->  
                <span style="display:none" class="updated"><?php the_time( 'Y-m-d' ); ?></span>
                <?php if ( get_the_author_meta( 'google' ) ){ ?>
                <div style="display:none" class="vcard author" itemprop="author" itemscope itemtype="http://schema.org/Person"><strong class="fn" itemprop="name"><a href="<?php the_author_meta( 'google' ); ?>?rel=author">+<?php echo get_the_author(); ?></a></strong></div>
                <?php }else{ ?>
                <div style="display:none" class="vcard author" itemprop="author" itemscope itemtype="http://schema.org/Person"><strong class="fn" itemprop="name"><?php the_author_posts_link(); ?></strong></div>
                <?php } ?>
                
            </div><!-- .post-inner -->
        </article><!-- .post-listing -->
        <?php endwhile; ?>
        
        <?php //Below Post Banner
        if( empty( $get_meta["tie_hide_below"][0] ) ){
            if( !empty( $get_meta["tie_banner_below"][0] ) ) echo '<div class="ads-post">' .htmlspecialchars_decode($get_meta["tie_banner_below"][0]) .'</div>';
            else tie_banner('banner_below' , '<div class="ads-post">' , '</div>' );
        }
        ?>
    </div><!-- .content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
