<?php
 if ( ! defined( 'ABSPATH' ) ) exit;
class wpsm_servicebox {
	private static $instance;
    public static function forge() {
        if (!isset(self::$instance)) {
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }
	
	private function __construct() {
		add_action('admin_enqueue_scripts', array(&$this, 'wpsm_servicebox_admin_scripts'));
        if (is_admin()) {
			add_action('init', array(&$this, 'wpsm_servicebox_register_cpt'), 1);
			add_action('add_meta_boxes', array(&$this, 'wpsm_servicebox_meta_boxes_group'));
			add_action('admin_init', array(&$this, 'wpsm_servicebox_meta_boxes_group'), 1);
			add_action('save_post', array(&$this, 'add_servicebox_meta_box_save'), 9, 1);
			add_action('save_post', array(&$this, 'servicebox_settings_meta_box_save'), 9, 1);
		}
    }
	
	// admin scripts
	public function wpsm_servicebox_admin_scripts(){
		if(get_post_type()=="wpsm_servicebox_r"){
			
			wp_enqueue_media();
			wp_enqueue_script('jquery-ui-datepicker');
			//color-picker css n js
			wp_enqueue_style( 'wp-color-picker' );
			wp_enqueue_script( 'wpsm_service_b-color-pic', wpshopmart_service_box_directory_url.'assets/js/color-picker.js', array( 'wp-color-picker' ), false, true );
			wp_enqueue_style('wpsm_service_b-panel-style', wpshopmart_service_box_directory_url.'assets/css/panel-style.css');			  
			wp_enqueue_style('wpsm_service_b_remodal-css', wpshopmart_service_box_directory_url .'assets/modal/remodal.css');
			wp_enqueue_style('wpsm_service_b_remodal-default-theme-css', wpshopmart_service_box_directory_url .'assets/modal/remodal-default-theme.css');
			 
			  
			//font awesome css
			wp_enqueue_style('wpsm_service_b-font-awesome', wpshopmart_service_box_directory_url.'assets/css/font-awesome/css/font-awesome.min.css');
			wp_enqueue_style('wpsm_service_b_bootstrap', wpshopmart_service_box_directory_url.'assets/css/bootstrap.css');
			wp_enqueue_style('wpsm_service_b_font-awesome-picker', wpshopmart_service_box_directory_url.'assets/css/fontawesome-iconpicker.css');
			wp_enqueue_style('faq_jquery-css', wpshopmart_service_box_directory_url .'assets/css/ac_jquery-ui.css');
			
			//line editor
			wp_enqueue_style('wpsm_service_b_line-edtor', wpshopmart_service_box_directory_url.'assets/css/jquery-linedtextarea.css');
			wp_enqueue_script( 'wpsm_service_b-line-edit-js', wpshopmart_service_box_directory_url.'assets/js/jquery-linedtextarea.js');
			
			wp_enqueue_script( 'wpsm_service_b-bootstrap-js', wpshopmart_service_box_directory_url.'assets/js/bootstrap.js');
			
			//tooltip
			wp_enqueue_style('wpsm_service_b_tooltip', wpshopmart_service_box_directory_url.'assets/tooltip/darktooltip.css');
			wp_enqueue_script( 'wpsm_service_b-tooltip-js', wpshopmart_service_box_directory_url.'assets/tooltip/jquery.darktooltip.js');
			// settings
			wp_enqueue_style('wpsm_service_b_settings-css', wpshopmart_service_box_directory_url.'assets/css/settings.css');
			wp_enqueue_script('wpsm_service_b_font-icon-picker-js', wpshopmart_service_box_directory_url.'assets/js/fontawesome-iconpicker.js',array('jquery'));
			wp_enqueue_script('wpsm_service_b_call-icon-picker-js', wpshopmart_service_box_directory_url.'assets/js/call-icon-picker.js',array('jquery'), false, true);
			wp_enqueue_script('wpsm_service_b_remodal-min-js',wpshopmart_service_box_directory_url.'assets/modal/remodal.min.js',array('jquery'), false, true);
	
		
			}
	}
	
	public function wpsm_servicebox_register_cpt(){
		require_once('cpt-reg.php');
		add_filter( 'manage_edit-wpsm_servicebox_r_columns', array(&$this, 'wpsm_servicebox_r_panels_columns' )) ;
		add_action( 'manage_wpsm_servicebox_r_posts_custom_column', array(&$this, 'wpsm_servicebox_r_manage_columns' ), 10, 2 );
	}
	
	function wpsm_servicebox_r_panels_columns( $columns ){
        $columns = array(
            'cb' => '<input type="checkbox" />',
            'title' => __( 'ServiceBox' ),
            'shortcode' => __( 'ServiceBox Shortcode' ),
            'date' => __( 'Date' )
        );
        return $columns;
    }

    function wpsm_servicebox_r_manage_columns( $column, $post_id ){
        global $post;
        switch( $column ) {
          case 'shortcode' :
            echo '<input style="width:225px" type="text" value="[WPSM_SERVICEBOX id='.$post_id.']" readonly="readonly" />';
            break;
          default :
            break;
        }
    }
	
	// metaboxes
	public function wpsm_servicebox_meta_boxes_group(){
		add_meta_box('add_wpsm_service_b_design', __('Select Design', wpshopmart_service_box_text_domain), array(&$this, 'wpsm_add_servicebox_design_function'), 'wpsm_servicebox_r', 'normal', 'low' );
		add_meta_box('add_wpsm_service_b', __('Add Service Box Panel', wpshopmart_service_box_text_domain), array(&$this, 'wpsm_add_servicebox_meta_box_function'), 'wpsm_servicebox_r', 'normal', 'low' );
		add_meta_box ('wpsm_service_b_shortcode', __('Service Box Shortcode', wpshopmart_service_box_text_domain), array(&$this, 'wpsm_pic_servicebox_shortcode'), 'wpsm_servicebox_r', 'normal', 'low');
		add_meta_box ('wpsm_service_help', __('Support & Docs', wpshopmart_service_box_text_domain), array(&$this, 'wpsm_add_servicebox_help'), 'wpsm_servicebox_r', 'normal', 'low');
		
		add_meta_box ('wpsm_service_more_pro', __('More Pro Plugin From Wpshopmart', wpshopmart_service_box_text_domain), array(&$this, 'wpsm_pic_serviceboxc_more_pro'), 'wpsm_servicebox_r', 'normal', 'low');
		add_meta_box('wpsm_service_b_rateus', __('Rate Us If You Like This Plugin', wpshopmart_service_box_text_domain), array(&$this, 'wpsm_add_servicebox_rateus_meta_box_function'), 'wpsm_servicebox_r', 'side', 'low');
		add_meta_box('wpsm_service_b_setting', __('Service Box Settings', wpshopmart_service_box_text_domain), array(&$this, 'wpsm_add_servicebox_setting_meta_box_function'), 'wpsm_servicebox_r', 'side', 'low');
		add_meta_box('wpsm_service_b_features', __('Pro Version Features', wpshopmart_service_box_text_domain), array(&$this, 'wpsm_service_b_features_function'), 'wpsm_servicebox_r', 'side', 'low');
	
	}
	
	public function wpsm_add_servicebox_design_function(){
		require_once('design.php');
	}
	
	public function wpsm_add_servicebox_meta_box_function($post){
		require_once('add-service-box.php');
	}
	
	public function wpsm_pic_servicebox_shortcode(){
		require_once('custom-css.php');
	
	}	
	
	public function wpsm_add_servicebox_setting_meta_box_function($post){
		require_once('settings.php');
	}
	
	public function add_servicebox_meta_box_save($PostID) {
		require('data-post/servicebox-save-data.php');
    }
	
	public function servicebox_settings_meta_box_save($PostID){
		require('data-post/servicebox-settings-save-data.php');
	}
	public function wpsm_add_servicebox_help(){
		require_once('help.php');
	}
	
	public function wpsm_add_servicebox_rateus_meta_box_function(){
		
		?>
		<style>
			#wpsm_service_b_rateus{
				background:#dd3333;
				text-align:center
			}
			.handle-order-higher, .handle-order-lower{
				display:none;
			}
			#wpsm_service_b_rateus .hndle , #wpsm_service_b_rateus .handlediv{
			display:none;
			}
			#wpsm_service_b_rateus h1{
			    color: #fff;
				border-bottom: 1px dashed rgba(255, 255, 255,0.9);
				padding-bottom: 10px;
			}
			 #wpsm_service_b_rateus h3 {
				color:#fff;
				font-size:15px;
			}
			#wpsm_service_b_rateus .button-hero{
				background: #efda4a;
				color: #312c2c;
				box-shadow: none;
				text-shadow: none;
				font-weight: 500;
				font-size: 22px;
				border: 1px solid #efda4a;
			}
			.wpsm-rate-us{
			text-align:center;
			}
			.wpsm-rate-us span.dashicons {
				width: 40px;
				height: 40px;
				font-size:20px;
				color:#fff !important;
			}
			.wpsm-rate-us span.dashicons-star-filled:before {
				content: "\f155";
				font-size: 40px;
			}
		</style>
		   <h1>Follow Us On</h1>
		   <h3>Youtube To Grab Free Web design Course & WordPress Help/Tips </h3>
			<a href="https://www.youtube.com/c/wpshopmart" target="_blank"><img style="width:200px;height:auto" src="<?php echo wpshopmart_service_box_directory_url.'assets/images/youtube.png'; ?>" /></a>
			<a href="https://www.youtube.com/c/wpshopmart?sub_confirmation=1" target="_blank" class="button button-primary button-hero ">Subscribe Us Now</a>
			
			<?php
	}
	public function wpsm_pic_serviceboxc_more_pro(){
		require_once('more-pro.php');
	}
	
		public function wpsm_service_b_features_function(){
		?><style>
		.pro-button-div .btn-danger{    font-size: 19px;
    color: #fff;
    background-color: #01c698 !important;
    border-color: #01c698 !important;
    border-radius: 1px;
    margin-right: 10px;
    margin-top: 0px;
	width:100%;
	text-decoration:none;
	margin-bottom:10px;
	
		}
		.pro-button-div .btn-success{    font-size: 19px;
    color: #fff;
    background-color: #673ab7 !important;
    border-color: #673ab7 !important;
    border-radius: 1px;
    margin-right: 10px;
    margin-top: 0px;
	width:100%;
	text-decoration:none;
	
		}
		.pro-list li i{
		margin-right:10px;	
		}
		</style>
			<ul class="pro-list">
				<li> <i class="fa fa-check"></i> 55+ Grid Templates </li>
				<li> <i class="fa fa-check"></i> 50+ Slider Templates </li>
				<li> <i class="fa fa-check"></i> Touch Carousel Slider</li>
				<li> <i class="fa fa-check"></i> Individual Color Scheme</li>
				<li> <i class="fa fa-check"></i> Section Background image </li>
				<li> <i class="fa fa-check"></i> Custom Image icon</li>
				<li><i class="fa fa-check"></i> 10+ Column Layout</li>
				<li> <i class="fa fa-check"></i> 500+ Glyphicon Icons Support</li>
				<li> <i class="fa fa-check"></i> 500+ Dashicons Icon Support</li>								
				<li> <i class="fa fa-check"></i> 1000+ Font Awesome Icon Support</li>								
				<li> <i class="fa fa-check"></i> Set Auto Height</li>	
				<li> <i class="fa fa-check"></i> Transparent Animation</li>				
				<li> <i class="fa fa-check"></i> Service Widget Pack</li>
				<li> <i class="fa fa-check"></i> 500+ Google Fonts </li>
				<li> <i class="fa fa-check"></i> Border Color Customization </li>
				<li> <i class="fa fa-check"></i> Unlimited Color Scheme </li>
				<li> <i class="fa fa-check"></i> Custom Css </li>
				<li> <i class="fa fa-check"></i> High Priority Support</li>
				<li> <i class="fa fa-check"></i>Life Time Access</li>
				<li> <i class="fa fa-check"></i> All Browser Compatible </li>	
			</ul>
			<div class="pro-button-div">
				<a class="btn btn-danger btn-lg " href="https://wpshopmart.com/plugins/service-showcase-pro-plugin-wordpress/" target="_blank">Check Pro Version</a><a class="btn btn-success btn-lg " href="https://wpshopmart.com/plugins/service-showcase-pro-plugin-wordpress/" target="_blank">Service Pro Demo</a>
			</div>				
		<?php
	}
	
}
global $wpsm_servicebox;
$wpsm_servicebox = wpsm_servicebox::forge();
 ?>