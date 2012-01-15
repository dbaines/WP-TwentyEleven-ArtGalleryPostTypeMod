<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>
<div class="homepageSliderWrapper">
	<ul class="homepageSlider">
   		<?php 
	        // Setting your slide counts
	        $slideCount = 5;
	        // Create an array of the latest posts
	        $artworkArray = array( 
	        	'numberposts' => $slideCount,
	        	'post_type' => 'artwork'
	        );
	        // get_posts on our array
	        $latestArtwork = get_posts( $artworkArray );
	        // Start the loop using our array of 5 artwork posts
	        foreach($latestArtwork as $post) : setup_postdata($post); 
	        	// Grab the featured image and chuck it in to a variable
                $SliderImage = get_the_post_thumbnail( $post->ID, "Large Slider" );
	            // Fallback image for ones without images
	            if(!$SliderImage) {
	                $SliderImage = "<img src='".get_bloginfo("template_url")."/images/slider_fallback.jpg' alt='".get_the_title()."' />";
	            }
        	?>
	        <li>
	            <?php echo $SliderImage; ?>
	            <hgroup>
                <h2>
                    <a href="?post_type=artwork&artTrigger=<?php the_id(); ?>" title="View <?php the_title(); ?>"><?php the_title(); ?></a>
                </h2><br />
                <h3><?php the_date(); ?></h3>
            	</hgroup>
	        </li>    
        <?php 
        // End The Loop
        endforeach; 
    ?>
	</ul>
</div>
<?php get_footer(); ?>