<?php
/**
 * `wp-team` Shortcode
 * 
 * @package WP Team Showcase and Slider
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function get_wp_tsas_showcase( $atts, $content = null ) {
	// setup the query
	extract(shortcode_atts(array(
		'limit'			=> -1,
		'category'		=> '',
		'design'		=> 'design-1',
		'grid'			=> 3,
		'popup'			=> 'true',
		'order'			=> 'DESC',
		'orderby'		=> 'date',
		'extra_class' 	=> '',
		'className'		=> '',
		'align'			=> '',
	), $atts, 'wp-team'));

	$shortcode_designs 	= tsas_designs();
	$limit 				= ! empty( $limit ) 				? $limit 						: -1;
	$category 			= ! empty( $category ) 				? explode(',', $category) 		: '';
	$design 			= ($design && (array_key_exists(trim($design), $shortcode_designs))) ? trim($design) : 'design-1';
	$gridcol 			= ! empty( $grid ) 					? $grid 						: 3;
	$order 				= ( strtolower( $order ) == 'asc' ) ? 'ASC' 						: 'DESC';
	$orderby 			= ! empty( $orderby )				? $orderby						: 'date';
	$teampopup 			= ( $popup == 'false' ) 			? 'false' 						: 'true';
	$popup_class		= ( $teampopup == "true" ) 			? 'tsas-enable-popup'			: '';
	$align				= ! empty( $align )					? 'align'.$align				: '';
	$extra_class 		= $extra_class .' '. $align .' '. $className;
	$extra_class 		= wp_tsas_sanitize_html_classes( $extra_class );
	$lazyload			= '';

	// Popup Configuration
	$popup_id	= wp_tsas_get_unique();
	$popup_conf	= compact('teampopup');	

	// Shortcode design file
	$design_file_path 	= WP_TSAS_DIR . '/templates/designs/' . $design . '.php';
	$design_file 		= (file_exists($design_file_path)) ? $design_file_path : '';

	/***** Enqueus Required Script *****/
	// First Dequeue if grid shortcode is placed before the slider shortcode
	wp_dequeue_script( 'tsas-public-script' );
	wp_enqueue_script( 'wpos-magnific-popup-jquery' );
	wp_enqueue_script( 'tsas-public-script' );

	ob_start();

	//defualt variable 
	$post_type = 'team_showcase_post';

	// argument wp query
	$args = array ( 
	'post_type'      => $post_type,
	'orderby'        => $orderby,
	'order'          => $order,
	'posts_per_page' => $limit,
	);

	if( $category != "" ){
		$args['tax_query'] = array( array( 'taxonomy' => 'tsas-category', 'field' => 'term_id', 'terms' => $category) );
    }

    // Wp Query
	$query = new WP_Query( $args );

		global $post;
		$post_count	= $query->post_count;
		$count		= 0;
		$i			= 1;
		if ( $query->have_posts() ) { ?> 

			<div class="wp-tsas-wrp <?php echo $popup_class; ?> <?php echo $extra_class; ?>" id="tsas-wrp-<?php echo $popup_id; ?>">
		  		<div class="wp_teamshowcase_grid <?php echo $design; ?>">
					<?php
						while ( $query->have_posts() ) : $query->the_post();
			            	$count++;

			            	// first class and last class
			            	$css_class	="team-grid";
			            	if( $count % $grid == 1 ){
								$css_class .= ' tsas-first';
							} elseif ( $count == $grid ) {
								$count = 0;
								$css_class .= ' tsas-last';
							}

							// Grid class variables
							if ( is_numeric( $gridcol ) ) {
								if($gridcol == 1){
									$per_row = 12;
								}
								else if($gridcol == 2){
									$per_row = 6;
								}
								else if($gridcol == 3){
									$per_row = 4;
								}
								else if($gridcol == 4){
									$per_row = 3;
								}
								 else{
			                        $per_row = $gridcol;
			                    }
								$class = 'wp-tsas-medium-'.$per_row.' wp-tsas-columns';
							}

							// Include shortcode html file
							if( $design_file ) {
								include( $design_file );
							}

							//Popup file  
							if( $teampopup == "true" ) {
								include(WP_TSAS_DIR. '/templates/popup/popup-design-1.php');
							}
							$i++;
			            endwhile;
					?>
				</div>
			</div>
		<?php	}
    wp_reset_postdata();
	return ob_get_clean();
}
// grid shortcode action
add_shortcode('wp-team','get_wp_tsas_showcase');