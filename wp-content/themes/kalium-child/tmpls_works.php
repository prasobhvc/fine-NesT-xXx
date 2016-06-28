<?php 
/** 
* Template Name: Works Archive page 
*
*/

get_header(); ?>

<div class="container">

    <div class="portfolio-title-holder">
        <div class="pt-column">
            <?php while (have_posts()) : the_post(); ?>
            <div class="section-title no-bottom-margin">
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            </div>
            <?php endwhile;?>
        </div>

        <div class="pt-column">
            <div class="works-filter product-filter">
                <?php
                //list terms in a given taxonomy (useful as a widget for twentyten)
                $taxonomy = 'work-categories';
                $tax_terms = get_terms($taxonomy);
                ?>
                <ul>
                    <li class="all  active">
                        <a href="" data-term="*">All</a>
                    </li>
                    <?php
                        foreach ($tax_terms as $tax_term) {
                            $tax_slug=$tax_term->slug;
                            echo '<li class='.$tax_slug.'>'. '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" data-term="' . $tax_slug . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-container">
        <div class="row">
            <div id="isotope-portfolio-items" class="portfolio-holder portfolio-type-1" style="position: relative; height: 386.391px;">
                <?php 
                query_posts(array( 
                    'post_type' => 'our-works',
                    'showposts' => 10 
                ) );  
                ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php 
                        $terms = wp_get_post_terms($post->ID, "work-categories");
                        foreach ($terms as $termid) { 
                            $taxonomies[$post->ID][] = $termid->slug;
                        }
                        $tax_class = implode(" ",$taxonomies[$post->ID]);
                ?>
                
                <div class="isotope-item with-padding sm-half-padding-lr grid-three animated-eye-icon" data-terms="<?php echo $tax_class; ?>" style="position: absolute; left: 0px; top: 0px;">
                    <div class="product-box wow fadeInLab animated" style="visibility: visible; animation-name: fadeInLab;">
                        <div class="photo do-lazy-load-on-shown" style="overflow:hidden">
                            <a href="<?php the_permalink() ?>">
                                <style>.arel-1 {
                                        padding-top: 83.168317% !important;

                                    }</style>	<span class="image-placeholder arel-1">
                                <?php
                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                                    $url = $thumb[0];
                                ?>
                                    <img src="<?php echo $url; ?>" alt="<?php the_title(); ?>" style="height: 300px !important; width: auto">
                                </span>

                                <span class="on-hover opacity-yes distanced">
                                    <i class="icon icon-basic-eye"></i>
                                </span>
                            </a>
                        </div>

                        <div class="info">
                            <h3>
                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                            </h3>
<!--                            <p><?php echo get_the_excerpt(); ?></p>-->
                        </div>
                    </div>
                </div>	
                <?php $tax_class=""; ?>
                <?php endwhile;?>


            </div>

        </div>
    </div>

</div>
<?php get_footer(); ?>