<?php
/**
 * Designs and Plugins Feed
 *
 * @package WP Team Showcase and Slider
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<div class="wrap pap-wrap">
<h2><?php _e( 'How It Works', 'wp-team-showcase-and-slider' ); ?></h2>
	<style type="text/css">
		.wpos-pro-box .hndle{background-color:#0073AA; color:#fff;}
		.wpos-pro-box .postbox{background:#dbf0fa none repeat scroll 0 0; border:1px solid #0073aa; color:#191e23;}
		.postbox-container .wpos-list li:before{font-family: dashicons; content: "\f139"; font-size:20px; color: #0073aa; vertical-align: middle;}
		.pap-wrap .wpos-button-full{display:block; text-align:center; box-shadow:none; border-radius:0;}
		.pap-shortcode-preview{background-color: #e7e7e7; font-weight: bold; padding: 2px 5px; display: inline-block; margin:0 0 2px 0;}
		.upgrade-to-pro{font-size:18px; text-align:center; margin-bottom:15px;}
		.wpos-copy-clipboard{-webkit-touch-callout: all; -webkit-user-select: all; -khtml-user-select: all; -moz-user-select: all; -ms-user-select: all; user-select: all;}
		.wpos-new-feature{ font-size: 10px; margin-left:2px; color: #fff; font-weight: bold; background-color: #03aa29; padding:1px 4px; font-style: normal; }
	</style>

	<div class="post-box-container">
		<div id="poststuff">
			<div id="post-body" class="metabox-holder columns-2">

				<!--How it workd HTML -->
				<div id="post-body-content">
					<div class="metabox-holder">
						<div class="meta-box-sortables ui-sortable">
							<div class="postbox">
								<div class="postbox-header">
									<h2 class="hndle">
										<span><?php _e( 'How It Works - Display and Shortcode', 'wp-team-showcase-and-slider' ); ?></span>
									</h2>
								</div>
								<div class="inside">
									<table class="form-table">
										<tbody>
											<tr>
												<th>
													<label><?php _e('Getting Started', 'wp-team-showcase-and-slider'); ?>:</label>
												</th>
												<td>
													<ul>
														<li><?php _e('Step-1: This plugin create a Team Showcase tab in WordPress menu section', 'wp-team-showcase-and-slider'); ?></li>
														<li><?php _e('Step-2: Now, paste below shortcode in any post or page and your WP Team Showcase and Slider is ready !!!', 'wp-team-showcase-and-slider'); ?></li>
													</ul>
												</td>
											</tr>

											<tr>
												<th>
													<label><?php _e('All Shortcodes', 'wp-team-showcase-and-slider'); ?>:</label>
												</th>
												<td>
													<span class="wpos-copy-clipboard pap-shortcode-preview">[wp-team]</span> – <?php _e('Team Showcase Grid', 'wp-team-showcase-and-slider'); ?> <br />
													<span class="wpos-copy-clipboard pap-shortcode-preview">[wp-team-slider]</span> – <?php _e('Team Showcase Slider', 'wp-team-showcase-and-slider'); ?> <br />
												</td>
											</tr>
										</tbody>
									</table>
								</div><!-- .inside -->
							</div><!-- #general -->

							<div class="postbox">
								<div class="postbox-header">
									<h2 class="hndle">
										<span><?php _e( 'Gutenberg Support', 'wp-team-showcase-and-slider' ); ?></span>
									</h2>
								</div>
								<div class="inside">
									<table class="form-table">
										<tbody>
											<tr>
												<th>
													<label><?php _e('How it Work', 'wp-team-showcase-and-slider'); ?>:</label>
												</th>
												<td>
													<ul>
														<li><?php _e('Step-1. Go to the Gutenberg editor of your page.', 'wp-team-showcase-and-slider'); ?></li>
														<li><?php _e('Step-2. Search "Team" keyword in the Gutenberg block list.', 'wp-team-showcase-and-slider'); ?></li>
														<li><?php _e('Step-3. Add any block of Team and you will find its relative options on the right end side.', 'wp-team-showcase-and-slider'); ?></li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>
								</div><!-- .inside -->
							</div><!-- #general -->

							<div class="postbox">
								<div class="postbox-header">
									<h2 class="hndle">
										<span><?php _e( 'Need Support?', 'wp-team-showcase-and-slider' ); ?></span>
									</h2>
								</div>
								<div class="inside">
									<table class="form-table">
										<tbody>
											<tr>
												<td>
													<p><?php _e('Check plugin document for shortcode parameters and demo for designs.', 'wp-team-showcase-and-slider'); ?></p> <br/>
													<a class="button button-primary" href="https://docs.wponlinesupport.com/wp-team-showcase-and-slider/" target="_blank"><?php _e('Documentation', 'wp-team-showcase-and-slider'); ?></a>
													<a class="button button-primary" href="https://demo.wponlinesupport.com/team-showcase-and-slider-demo/" target="_blank"><?php _e('Demo for Designs', 'wp-team-showcase-and-slider'); ?></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div><!-- .inside -->
							</div><!-- #general -->

							<div class="postbox">
								<div class="postbox-header">
									<h2 class="hndle">
										<span><?php _e( 'Help to improve this plugin!', 'wp-team-showcase-and-slider' ); ?></span>
									</h2>
								</div>
								<div class="inside">
									<p>Enjoyed this plugin? You can help by rate this plugin <a href="https://wordpress.org/support/plugin/wp-team-showcase-and-slider/reviews/" target="_blank">5 stars!</a></p>
								</div><!-- .inside -->
							</div><!-- #general -->
						</div><!-- .meta-box-sortables ui-sortable -->
					</div><!-- .metabox-holder -->
				</div><!-- #post-body-content -->

				<!--Upgrad to Pro HTML -->
				<div id="postbox-container-1" class="postbox-container">
					<div class="metabox-holder wpos-pro-box">
						<div class="meta-box-sortables ui-sortable">
							<div class="postbox">

								<h3 class="hndle">
									<span><?php _e( 'Upgrate to Pro', 'wp-team-showcase-and-slider' ); ?></span>
								</h3>
								<div class="inside">
									<ul class="wpos-list">
										<li>Added 2 shortcodes with various parameters. [wp-team] – Grid Shortcode [wp-team-slider] – Slider Shortcode</li>
										<li>25 stunning and cool designs.</li>
										<li>Display team member in a grid view.</li>
										<li>Display team member in a slider view.</li>
										<li>Display team member details in a popup.</li>
										<li>2 popup designs for team members.</li>
										<li>2 popup theme (Light – Dark) for team members.</li>
										<li>WPBakery Page Builder Supports</li>
										<li>Gutenberg, Elementor, Beaver and SiteOrigin Page Builder Support. <span class="wpos-new-feature">New</span></li>
										<li>Divi Page Builder Native Support. <span class="wpos-new-feature">New</span></li>
										<li>WP Templating Features</li>
										<li>Slider RTL support.</li>
										<li>Display team showcase categories wise.</li>
										<li>Drag & Drop team members to display in your desired order.</li>
										<li>Strong shortcode parameters.</li>
										<li>Fully Responsive.</li>
										<li>100% Multilanguage.</li>
									</ul>
									<div class="upgrade-to-pro">Gain access to <strong>WP Team Showcase and Slider</strong> included in <br /><strong>Essential Plugin Bundle</div>
									<a class="button button-primary wpos-button-full" href="https://www.wponlinesupport.com/wp-plugin/wp-team-showcase-slider/?ref=WposPratik&utm_source=WP&utm_medium=Team-Showcase&utm_campaign=Upgrade-PRO" target="_blank"><?php _e('Go Premium ', 'wp-team-showcase-and-slider'); ?></a>
									<p><a class="button button-primary wpos-button-full" href="https://demo.wponlinesupport.com/prodemo/wp-team-showcase-and-slider/?utm_source=WP&utm_medium=Team-Showcase&utm_campaign=PRO-Demo" target="_blank"><?php _e('View PRO Demo ', 'wp-team-showcase-and-slider'); ?></a></p>
								</div><!-- .inside -->
							</div><!-- #general -->
						</div><!-- .meta-box-sortables ui-sortable -->
					</div><!-- .metabox-holder -->
				</div><!-- #post-container-1 -->
			</div><!-- #post-body -->
		</div><!-- #poststuff -->
	</div><!-- #post-box-container -->
</div>