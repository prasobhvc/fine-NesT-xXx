<?php
/**
 *	Kalium WordPress Theme
 *
 *	Laborator.co
 *	www.laborator.co
 */

the_post();

$item_type = get_field( 'item_type' );

// Custom Item Link Redirect
if ( get_field( 'item_linking' ) == 'external' ) {
	
	$launch_link_href = get_field( 'launch_link_href' );
	
	if ( $launch_link_href ) {
		
		if ( $launch_link_href != '#' ) {
			wp_redirect( $launch_link_href );
		} else { 
			// Disabled item links, will redirect to closest next/previous post
			$include_categories  = get_data('portfolio_prev_next_category') ? true : false;
			
			$prev = get_next_post($include_categories, '', 'portfolio_category');
			$next = get_previous_post($include_categories, '', 'portfolio_category');
			
			if( ! empty( $next ) ) {
				wp_redirect( get_permalink( $next ) );
			} else if( ! empty( $prev ) ) {
				wp_redirect( get_permalink( $prev ) );
			}
		}
		
		die();
	}
}

// Disable Lightbox
if ( get_data( 'portfolio_disable_lightbox' ) ) {
	add_filter( 'body_class', create_function( '$classes', '$classes[] = "lightbox-disabled"; return $classes;' ) );
}

get_header();
?>

<div class="container default-margin password-protected-portfolio-item">
        <div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h2><?php the_title(); ?></h2>
                <?php echo the_content(); ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="client-adress">
                    <?php if( have_rows('client_information') ): ?>

                        <div class="panel panel-default">  
                            <div class="panel-heading">Clients Lists</div> 
                            <div class="panel-body">
                                    <div class="clt-info-head hidden-xs hidden-sm">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3">Name</div>
                                            <div class="col-xs-12 col-sm-3">Phone Number</div>
                                            <div class="col-xs-12 col-sm-3">Email Address</div>
                                            <div class="col-xs-12 col-sm-3">Address</div>
                                        </div>
                                    </div>
                                    <div class="clt-info-body">
                                        <?php while( have_rows('client_information') ): the_row(); 
                                                // vars
                                            $name = get_sub_field('client_name');
                                            $phone = get_sub_field('client_phone');
                                            $email = get_sub_field('client_email');
                                            $address = get_sub_field('client_address');
                                        ?>
                                        <div class="clt-info-list">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-3">
                                                    <span><?php echo $name; ?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <label class="hidden-md hidden-lg">Phone :</label>
                                                    <span><?php echo $phone; ?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <label class="hidden-md hidden-lg">Email :</label>
                                                    <span><?php echo $email; ?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <label class="hidden-md hidden-lg">Address</label><br class="hidden-md hidden-lg">
                                                    <span><?php echo $address; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>  
                                        
                                    </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
		<div class="row works-gallery">
            <?php 
                $images = get_field('gallery');

                if( $images ): ?>
                    <div id="slider" class="lightbox2">
                        <div class="slides">
                            <?php foreach( $images as $image ): ?>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                                    <div class="thumbnail hidden-xs hidden-sm">
                                      <a href="<?php echo $image['sizes']['large']; ?>" rel="lightbox[roadtrip]"  style="height: 180px; overflow:hidden; display:block">
                                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />
                                    </a>
                                   </div>
                                    <div class="thumbnail hidden-md hidden-lg">
                                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />
                                   </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>