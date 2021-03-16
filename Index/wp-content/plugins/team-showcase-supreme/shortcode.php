<?php

global $wpdb;
$style_table = $wpdb->prefix . 'wpm_6310_style';
$icon_table = $wpdb->prefix . 'wpm_6310_icons';
$member_table = $wpdb->prefix . 'wpm_6310_member';
$category_table = $wpdb->prefix . 'wpm_6310_category';

$categoryData = $wpdb->get_results("SELECT * FROM $category_table order by serial asc", ARRAY_A);
$styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $ids), ARRAY_A);
if(!$styledata || $styledata == '') return;
$styleTemplate = (int) substr($styledata['style_name'], -2);
$allStyle = explode("|", $styledata['css']);
$allSlider = explode("|", $styledata['slider']);


$members = [];
if($styledata['memberid']){
   $memList = explode('||##||', $styledata['memberid']);
   if($memList[0]){
      $idExist = explode(',', $memList[0]);
      if($idExist){
         $tempId = '';
         foreach ($idExist as $ie) {
            if (trim($ie) != '') {
               if ($tempId != '') {
                  $tempId .= ',';
               }
               $tempId .= $ie;
            }
         }
         if ($tempId == '') {
            return;
         }
         $members = $wpdb->get_results("SELECT * FROM $member_table WHERE id in ({$tempId}) ORDER BY name asc", ARRAY_A);
      }
      else{
         return;
      }
   }
   else{
      return;
   }
}
else{
   return;
}

$rows = explode("@@##@@", $allStyle[0]);
$desktop_row = $rows[0];
$tablet_row = isset($rows[1]) ? $rows[1] : 1;
$mobile_row = isset($rows[2]) ? $rows[2] : 1;

$loading = get_option( 'wpm_6310_loading_icon');
if(!$loading){
  $loading = 'https://www.wpmart.org/wp-content/uploads/2020/08/loading.gif';
}

if (file_exists(wpm_6310_plugin_url . "output/{$styledata['style_name']}.php")) {
   $fonts = '';
   if(isset($allSlider[22])){
      $fonts .= '|' . (isset($allSlider[22])?str_replace("+", " ", $allSlider[22]):'Amaranth');
   } else {
      $fonts .= '|' . 'Amaranth';
   }
   if(isset($allSlider[77])){
      $fonts .= '|' . (isset($allSlider[77])?str_replace("+", " ", $allSlider[77]):'Amaranth');
   } else {
      $fonts .= '|' . 'Amaranth';
   }
   if(isset($allSlider[112])){
      $fonts .= '|' . (isset($allSlider[112])?str_replace("+", " ", $allSlider[112]):'Amaranth');
   } else {
      $fonts .= '|' . 'Amaranth';
   }
   wp_enqueue_style('wpm-font-awesome-5-0-13', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');
   wp_enqueue_style('wpm-font-awesome-4-07', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
   wp_enqueue_style("wpm-google-font-{$ids}", "https://fonts.googleapis.com/css?family={$allStyle['17']}|{$allStyle['23']}{$fonts}");
   if ($allSlider[0]) {
      wp_enqueue_style('wpm-wpm-6310-owl-carousel', plugins_url('assets/css/owl.carousel.min.css', __FILE__));
      wp_enqueue_script('wpm-wpm-6310-owl-carousel-js', plugins_url('assets/js/owl.carousel.min.js', __FILE__), array('jquery'), TRUE);
   }

   $broken = get_option( 'wpm_6310_broken_status');
   $grid_broken = ($broken == 1) ? 1 : 0;

   echo "<div 
            class='wpm_main_template wpm_main_template_{$ids}'
            wpm-6310-carousel-styleName='{$styledata['style_name']}'
            wpm-6310-carousel-itemPerRow='{$desktop_row}'
            wpm-6310-carousel-itemPerRow-tablet='{$tablet_row}'
            wpm-6310-carousel-itemPerRow-mobile='{$mobile_row}'
            wpm-6310-carousel-id='{$ids}'
            wpm-6310-carousel-active='{$allSlider[0]}'
            wpm-6310-carousel-autoPlay='{$allSlider[2]}'
            wpm-6310-carousel-nav='{$allSlider[3]}'
            wpm-6310-carousel-dot='{$allSlider[11]}'
            wpm-6310-carousel-navText='{$allSlider[4]}'
            wpm-6310-category-active='". (isset($allSlider[101])?$allSlider[101]:0) ."'
            wpm-6310-search-active='". ((isset($allSlider[86]) && $allSlider[86]>0)?1:0) ."'
            wpm-6310-item-margin='".((isset($allSlider[127])?$allSlider[127]:15) * 2) ."'
   >";
   include wpm_6310_plugin_url . "output/{$styledata['style_name']}.php";

   echo "</div>";

   wp_enqueue_script('wpm-6310-common-output-js', plugins_url('assets/js/wpm-common-output.js', __FILE__), array('jquery'), TRUE);

   if ($styledata['memberorder']) {
      echo "<style type='text/css'>" . $styledata['memberorder'] . "</style>";
   }
   wpm_version_status();
}
