<?php
if (!defined('ABSPATH'))
   exit;

if (!empty($_POST['submit']) && $_POST['submit'] == 'Save' && $_POST['style'] != '') {
   $nonce = $_REQUEST['_wpnonce'];
   if (!wp_verify_nonce($nonce, 'wpm-nonce-field')) {
      die('You do not have sufficient permissions to access this page.');
   } else {
      $name = sanitize_text_field($_POST['style_name']);
      $style_name = sanitize_text_field($_POST['style']);

      if ($_POST['style'] == 'template-01') {
        $css = "3||0|0|rgba(255, 0, 0, 1)||nai|rgba(255, 255, 255, 1)|0|4|rgba(0, 0, 0, 0.4)|18|rgb(0, 0, 0)|rgb(0, 100, 0)||100|uppercase|Shanti|26|14|rgb(152, 152, 152)|100|capitalize|Shanti|20|rgb(0, 100, 0)|35|35|1||0|0|rgba(255, 255, 255, 1)|1";
        $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 100, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 100, 0)|100|100|none|none||||||0|10|||||||||0|0|||||||||5|10|4||||||||0|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(80, 80, 80, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(15, 189, 47, 0.83)|rgba(0, 99, 17, 1)|rgb(255, 255, 255)|rgba(255, 255, 255, 0.8)|100|Amaranth|30|30|4|15|left|3||||||||center|15";
     } else if ($_POST['style'] == 'template-02') {
        $css = "3||0|2|rgba(172, 19, 14, 1)||nai|rgba(51, 52, 62, 1)|0|0|rgba(255, 3, 3, 0.93)|18|rgb(255, 255, 255)|||500|uppercase|Shanti|24|14|rgb(255, 255, 255)|200|capitalize|Shanti|18||35|35|1||0|65|1";
        $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 0, 0)|rgb(190, 190, 190)|rgb(0, 0, 0)|rgb(255, 255, 255)|100|100|none|none||||||0|0|||||||||0|5|||||||||0|0|4||||||||0|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
     } else if ($_POST['style'] == 'template-03') {
        $css = "3|scale(1.05)|0|0|rgba(255, 0, 0, 1)||nai|rgba(255, 255, 255, 1)|0|2|rgba(43, 42, 42, 0.25)|16|rgb(39, 39, 39)|rgb(0, 100, 0)||600|uppercase|Shanti|22|14|rgb(152, 152, 152)|100|capitalize|Shanti|20|rgb(0, 100, 0)|35|35|1||0|0|rgba(255, 255, 255, 1)|1";
        $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 100, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 100, 0)|100|100|none|none||||||0|10|||||||||0|0|||||||||5|5|4||||||||0|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
     } else if ($_POST['style'] == 'template-04') {
        $css = "3||0|0|rgba(29, 124, 207, 1)||nai|rgba(74, 74, 74, 0.65)|0|1|rgba(29, 124, 207, 0.83)|18|rgb(255, 255, 255)|rgba(31, 125, 207, 1)|rgba(31, 125, 207, 1)|600|uppercase|Shanti|24|14|rgb(255, 255, 255)|200|capitalize|Shanti|24||35|35|1||1|1";
        $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|100|100|capitalize|capitalize||||||||||||||||||||||||||0|0|4||||||||0|0|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|capitalize|center|0|15|100|capitalize|capitalize||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
     } else if ($_POST['style'] == 'template-05') {
        $css = "3|50%|0|2|rgba(168, 3, 0, 1)||nai|rgba(61, 61, 61, 1)|0|0|rgba(145, 0, 0, 1)|20|rgb(255, 255, 255)|||600|uppercase|Shanti|24|14|rgb(255, 255, 255)|200|capitalize|Shanti|20||35|35|1||1|70|1";
        $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 0, 0)|rgb(255, 205, 210)|rgb(0, 0, 0)|rgb(255, 205, 210)|100|100|none|none||||||0|5|||||||||0|10|||||||||0|0|4||||||||0|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
     } else if ($_POST['style'] == 'template-06') {
        $css = "3|wpm_6310_eff_nul|0|2|rgba(148, 0, 0, 1)||nai|rgba(25, 25, 25, 0.8)|0|0|rgba(143, 0, 0, 1)|18|rgb(255, 255, 255)|||500|uppercase|Shanti|24|14|rgb(255, 255, 255)|100|capitalize|Shanti|20||35|35|1||0|1";
        $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 0, 0)|rgb(190, 190, 150)|rgb(0, 0, 0)|rgb(190, 190, 150)|100|100|none|none||||||0|0|||||||||0|15|||||||||10|0|4||||||||0|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
     } else if ($_POST['style'] == 'template-07') {
        $css = "3||0|2|rgba(158, 0, 0, 1)||nai|rgba(255, 255, 255, 1)|0|0|rgba(245, 0, 0, 1)|18|rgb(0, 0, 0)|||700|capitalize|Shanti|28|14|rgb(0, 0, 0)|100|capitalize|Shanti|18||35|35|1||1|1";
        $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|100|100|capitalize|capitalize||||||||||||||||||||||||||||4||||||||0|0|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|capitalize|center|0|15|100|capitalize|capitalize||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
     } else if ($_POST['style'] == 'template-08') {
        $css = "3||0|2|rgba(244, 54, 98, 1)||nai|rgba(54, 206, 214, 1)|0|0|rgba(84, 0, 0, 1)|18|rgb(41, 41, 41)|||600|uppercase|Shanti|24|14|rgb(187, 187, 187)|200|capitalize|Shanti|22||35|35|1||10|rgba(255, 255, 255, 1)|rgb(244, 54, 98)|1";
        $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(244, 54, 98)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(244, 54, 98)|100|100|none|none||||||20|0|||||||||||||||||||||4||||||||0|12|14|20|rgb(0, 0, 0)|rgb(255, 255, 255)|Shanti|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
     } else if ($_POST['style'] == 'template-09') {
        $css = "3||0|0|rgba(230, 126, 34, 1)||nai|rgba(39, 39, 39, 1)|0|0|rgba(84, 0, 0, 1)|18|rgb(255, 255, 255)|||600|uppercase|Shanti|24|14|rgb(187, 187, 187)|200|capitalize|Shanti|22||35|35|1||10|0|rgba(39, 39, 39, 1)|1";
        $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(230, 126, 34)|rgb(187, 187, 187)|rgb(187, 187, 187)|rgb(230, 126, 34)|100|100|none|none||||||20|0|||||||||0|10|||||||||10|10|4||||||||1|12|14|20|rgb(255, 255, 255)|rgb(255, 255, 255)|Shanti|100|none|center|0|10|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
     } else if ($_POST['style'] == 'template-10') {
        $css = "3||0|1|rgba(235, 97, 82, 0.89)||nai|rgba(255, 255, 255, 1)|0|0|rgba(235, 97, 82, 0.89)|18|rgb(38, 38, 38)|||normal|uppercase|Shanti|24|14|rgb(234, 97, 83)|200|capitalize|Shanti|20||35|35|1||1|rgba(255, 255, 255, 1)|1";
        $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(234, 97, 83)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(234, 97, 83)|100|100|none|none||||||15|5|||||||||0|15|||||||||||4||||||||0|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
     }

      $members = $wpdb->get_results('SELECT * FROM ' . $member_table . ' ORDER BY name ASC', ARRAY_A);
      $membersId = "";
      foreach ($members as $member) {
         if ($membersId) {
            $membersId .= ",";
         }
         $membersId .= $member['id'];
      }

      $wpdb->query($wpdb->prepare("INSERT INTO {$style_table} (name, style_name, css, slider, memberid) VALUES ( %s, %s, %s, %s, %s )", array($name, $style_name, $css, $slider,  $membersId)));
      $redirect_id = $wpdb->insert_id;

      if ($redirect_id == 0) {
         $url = admin_url("admin.php?page=wpm-team-showcase");
      } else if ($redirect_id != 0) {
         $url = admin_url("admin.php?page=wpm-template-01-10&styleid=$redirect_id");
      }
      echo '<script type="text/javascript"> document.location.href = "' . $url . '"; </script>';
      exit;
   }
}

//Load Image
$arr = array(
  'https://www.wpmart.org/wp-content/uploads/2020/04/1.jpg',
  'https://www.wpmart.org/wp-content/uploads/2020/04/2.jpg',
  'https://www.wpmart.org/wp-content/uploads/2020/04/3.jpg',
  'https://www.wpmart.org/wp-content/uploads/2020/04/4.jpg',
  'https://www.wpmart.org/wp-content/uploads/2020/04/5.jpg'
);

$icons = array(
   '<li><a href="https://www.linkedin.com" class="open_in_new_tab_class wpm-social-link-linkedin" title="Linkedin" target="_blank" id=""><i class="fab fa-linkedin-in"></i></a></li>',
   '<li><a href="https://www.facebook.com" class="open_in_new_tab_class wpm-social-link-facebook" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>',
   '<li><a href="https://www.youtube.com" class="open_in_new_tab_class wpm-social-link-youtube" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>',
   '<li><a href="https://www.twitter.com" class="open_in_new_tab_class wpm-social-link-twitter" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>',
   '<li><a href="https://www.google.com" class="open_in_new_tab_class wpm-social-link-google" title="Google Plus" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>',
   '<li><a href="https://www.pinterest.com" class="open_in_new_tab_class wpm-social-link-pinterest" title="Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>',
   '<li><a href="https://www.whatsapp.com" class="open_in_new_tab_class wpm-social-link-whatsapp" title="Whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a></li>'
);
?>
<div class="wpm-6310">
  <h1>Select Template</h1>

  <!-- Temaplate 01 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_01">
          <img src="<?php echo $arr[0] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_01_caption">
              <div class="wpm_6310_team_style_01_designation">Web Developer</div>
              <div class="wpm_6310_team_style_01_title">Adam Smith</div>
              <div class="wpm-custom-fields-01">
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01">Fax</div>
                    <div class="wpm-custom-fields-list-content-01">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-01">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-01">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_01_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_01_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_01">
          <img src="<?php echo $arr[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_01_caption">
              <div class="wpm_6310_team_style_01_designation">Web Developer</div>
              <div class="wpm_6310_team_style_01_title">Adam Smith</div>
              <div class="wpm-custom-fields-01">
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01">Fax</div>
                    <div class="wpm-custom-fields-list-content-01">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-01">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-01">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_01_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_01_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_01">
          <img src="<?php echo $arr[3] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_01_caption">
              <div class="wpm_6310_team_style_01_designation">Web Developer</div>
              <div class="wpm_6310_team_style_01_title">Adam Smith</div>
              <div class="wpm-custom-fields-01">
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01">Fax</div>
                    <div class="wpm-custom-fields-list-content-01">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-01">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-01">
                    <div class="wpm-custom-fields-list-label-01"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-01">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_01_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_01_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 1 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-01">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 02 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_02">
          <div class="wpm_6310_team_style_02_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_02_team_content">
            <div class="wpm_6310_team_style_02_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_02_designation">Sales Agent</div>
              <div class="wpm_6310_team_style_02_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_02_social">
              <?php
                     shuffle($icons);
                     for ($i = 0; $i < 4; $i++) {
                        echo $icons[$i];
                     }
                     ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_02">
          <div class="wpm_6310_team_style_02_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_02_team_content">
            <div class="wpm_6310_team_style_02_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_02_designation">Sales Agent</div>
            <div class="wpm-custom-fields-02">
              <div class="wpm-custom-fields-list-02">
                  <div class="wpm-custom-fields-list-label-02">Fax</div>
                  <div class="wpm-custom-fields-list-content-02">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-02">
                  <div class="wpm-custom-fields-list-label-02"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-02">1588100157</div>
              </div>
            </div>
            <ul class="wpm_6310_team_style_02_social">
              <?php
                     shuffle($icons);
                     for ($i = 0; $i < 4; $i++) {
                        echo $icons[$i];
                     }
                     ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_02">
          <div class="wpm_6310_team_style_02_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_02_team_content">
            <div class="wpm_6310_team_style_02_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_02_designation">Sales Agent</div>
            <div class="wpm_6310_team_style_02_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_02_social">
              <?php
                     shuffle($icons);
                     for ($i = 0; $i < 4; $i++) {
                        echo $icons[$i];
                     }
                     ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 2 <small>(3 Effects)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-02">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 03 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_03">
          <img src="<?php echo $arr[0] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_03_caption">
              <div class="wpm_6310_team_style_03_designation">Web Developer</div>
              <div class="wpm_6310_team_style_03_title">Adam Smith</div>
              <div class="wpm-custom-fields-03">
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03">Fax</div>
                    <div class="wpm-custom-fields-list-content-03">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-03">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-03">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_03_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_03_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_03">
          <img src="<?php echo $arr[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_03_caption">
              <div class="wpm_6310_team_style_03_designation">Web Developer</div>
              <div class="wpm_6310_team_style_03_title">Adam Smith</div>
              <div class="wpm-custom-fields-03">
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03">Fax</div>
                    <div class="wpm-custom-fields-list-content-03">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-03">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-03">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_03_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_03_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_03">
          <img src="<?php echo $arr[2] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_03_caption">
              <div class="wpm_6310_team_style_03_designation">Web Developer</div>
              <div class="wpm_6310_team_style_03_title">Adam Smith</div>
              <div class="wpm-custom-fields-03">
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03">Fax</div>
                    <div class="wpm-custom-fields-list-content-03">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-03">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-03">
                    <div class="wpm-custom-fields-list-label-03"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-03">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_03_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_03_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 3 <small>(3 Effects)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-03">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 04 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_04">
          <img src="<?php echo $arr[0] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_04_caption">
              <div class="wpm_6310_team_style_04_designation">CEO</div>
              <div class="wpm_6310_team_style_04_title">Adam Smith</div>
              <ul class="wpm_6310_team_style_04_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>
          <div class="wpm_6310_team_style_04_overlay"></div>
          <div class="wpm_6310_team_style_04_icon">
            <i class="fas fa-plus-circle"></i>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_04">
          <img src="<?php echo $arr[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_04_caption">
              <div class="wpm_6310_team_style_04_designation">Sales Agent</div>
              <div class="wpm_6310_team_style_04_title">Adam Smith</div>
              <ul class="wpm_6310_team_style_04_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>
          <div class="wpm_6310_team_style_04_overlay"></div>
          <div class="wpm_6310_team_style_04_icon">
            <i class="fas fa-plus-circle"></i>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_04">
          <img src="<?php echo $arr[2] ?>" class="wpm-image-responsive" alt="Team Showcase">
          <figcaption>
            <div class="wpm_6310_team_style_04_caption">
              <div class="wpm_6310_team_style_04_designation">Support Manager</div>
              <div class="wpm_6310_team_style_04_title">Adam Smith</div>
              <ul class="wpm_6310_team_style_04_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>
          <div class="wpm_6310_team_style_04_overlay"></div>
          <div class="wpm_6310_team_style_04_icon">
            <i class="fas fa-plus-circle"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 4 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-04">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 05 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_05">
          <div class="wpm_6310_team_style_05_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_05_team_content">
            <div class="wpm_6310_team_style_05_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_05_designation">Sales Agent</div>
            <div class="wpm_6310_team_style_05_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_05_social">
              <?php
                     shuffle($icons);
                     for ($i = 0; $i < 4; $i++) {
                        echo $icons[$i];
                     }
                     ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_05">
          <div class="wpm_6310_team_style_05_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_05_team_content">
            <div class="wpm_6310_team_style_05_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_05_designation">Sales Agent</div>
            <div class="wpm-custom-fields-05">
              <div class="wpm-custom-fields-list-05">
                  <div class="wpm-custom-fields-list-label-05"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-05">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-05">
                  <div class="wpm-custom-fields-list-label-05"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-05">1588100157</div>
              </div>
            </div>
            <ul class="wpm_6310_team_style_05_social">
              <?php
                     shuffle($icons);
                     for ($i = 0; $i < 4; $i++) {
                        echo $icons[$i];
                     }
                     ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_05">
          <div class="wpm_6310_team_style_05_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_05_team_content">
            <div class="wpm_6310_team_style_05_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_05_designation">Sales Agent</div>
            <div class="wpm_6310_team_style_05_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_05_social">
              <?php
                     shuffle($icons);
                     for ($i = 0; $i < 4; $i++) {
                        echo $icons[$i];
                     }
                     ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 5 <small>(3 Effects)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-05">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 06 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_06">
          <div class="wpm_6310_team_style_06_pic">
            <img src="<?php echo $arr[0] ?>" class="img-responsive" alt="team showcase supreme">
            <figcaption>
              <div class="wpm_6310_team_style_06_content">
                <div class="wpm_6310_team_style_06_designation">Marketing Head</div>
                <div class="wpm_6310_team_style_06_title">Connor Charles</div>
                <div class="wpm-custom-fields-06">
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06">Fax</div>
                    <div class="wpm-custom-fields-list-content-06">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-06">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-06">1588100157</div>
                  </div>
                </div>
                <div class="wpm_6310_team_style_06_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <ul class="wpm_6310_team_style_06_social">
                  <?php
                           shuffle($icons);
                           for ($i = 0; $i < 4; $i++) {
                              echo $icons[$i];
                           }
                           ?>
                </ul>
              </div>
            </figcaption>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_06">
          <div class="wpm_6310_team_style_06_pic">
            <img src="<?php echo $arr[1] ?>" class="img-responsive wpm_6310_team_style_06_top_right"
              alt="team showcase supreme">
            <figcaption>
              <div class="wpm_6310_team_style_06_content">
                <div class="wpm_6310_team_style_06_designation">Marketing Head</div>
                <div class="wpm_6310_team_style_06_title">Connor Charles</div>
                <div class="wpm-custom-fields-06">
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06">Fax</div>
                    <div class="wpm-custom-fields-list-content-06">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-06">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-06">1588100157</div>
                  </div>
                </div>
                <div class="wpm_6310_team_style_06_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <ul class="wpm_6310_team_style_06_social">
                  <?php
                           shuffle($icons);
                           for ($i = 0; $i < 4; $i++) {
                              echo $icons[$i];
                           }
                           ?>
                </ul>
              </div>
            </figcaption>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_06">
          <div class="wpm_6310_team_style_06_pic">
            <img src="<?php echo $arr[2] ?>" class="img-responsive wpm_6310_team_style_06_top_left"
              alt="team showcase supreme">
            <figcaption>
              <div class="wpm_6310_team_style_06_content">
                <div class="wpm_6310_team_style_06_designation">Marketing Head</div>
                <div class="wpm_6310_team_style_06_title">Connor Charles</div>
                <div class="wpm-custom-fields-06">
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06">Fax</div>
                    <div class="wpm-custom-fields-list-content-06">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-06">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-06">
                    <div class="wpm-custom-fields-list-label-06"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-06">1588100157</div>
                  </div>
                </div>
                <div class="wpm_6310_team_style_06_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <ul class="wpm_6310_team_style_06_social">
                  <?php
                           shuffle($icons);
                           for ($i = 0; $i < 4; $i++) {
                              echo $icons[$i];
                           }
                           ?>
                </ul>
              </div>
            </figcaption>
          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 6 <small>(11 Effects)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-06">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 07 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_07">
          <img src="<?php echo $arr[0] ?>" class="img-responsive" alt="team showcase supreme">
          <figcaption>
            <div class="wpm_6310_team_style_07_content">
              <div class="wpm_6310_team_style_07_title">Connor Charles</div>
              <div class="wpm_6310_team_style_07_designation">Marketing Head</div>
              <ul class="wpm_6310_team_style_07_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 3; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>

        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_07">
          <img src="<?php echo $arr[1] ?>" class="img-responsive" alt="team showcase supreme">
          <figcaption>
            <div class="wpm_6310_team_style_07_content">
              <div class="wpm_6310_team_style_07_title">Connor Charles</div>
              <div class="wpm_6310_team_style_07_designation">Marketing Head</div>
              <ul class="wpm_6310_team_style_07_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 3; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>

        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_07">
          <img src="<?php echo $arr[2] ?>" class="img-responsive" alt="team showcase supreme">
          <figcaption>
            <div class="wpm_6310_team_style_07_content">
              <div class="wpm_6310_team_style_07_title">Connor Charles</div>
              <div class="wpm_6310_team_style_07_designation">Marketing Head</div>
              <ul class="wpm_6310_team_style_07_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 3; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </figcaption>

        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 7 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-07">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 08 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_08">
          <div class="wpm_6310_team_style_08_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_08_team_content">
            <div class="wpm_6310_team_style_08_title">JHON</div>
            <div class="wpm_6310_team_style_08_border"></div>
            <div class="wpm_6310_team_style_08_designation">Web Desginer</div>
            <div class="wpm-custom-fields-08">
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08">Fax</div>
                <div class="wpm-custom-fields-list-content-08">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-08">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-08">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_08_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_08_social">
              <?php
                     shuffle($icons);
                     for ($i = 0; $i < 4; $i++) {
                        echo $icons[$i];
                     }
                     ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_08">
          <div class="wpm_6310_team_style_08_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_08_team_content">
            <div class="wpm_6310_team_style_08_title">JHON</div>
            <div class="wpm_6310_team_style_08_border"></div>
            <div class="wpm_6310_team_style_08_designation">Web Desginer</div>
            <div class="wpm-custom-fields-08">
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08">Fax</div>
                <div class="wpm-custom-fields-list-content-08">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-08">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-08">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_08_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_08_social">
              <?php
                     shuffle($icons);
                     for ($i = 0; $i < 4; $i++) {
                        echo $icons[$i];
                     }
                     ?>
            </ul>

          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_08">
          <div class="wpm_6310_team_style_08_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_08_team_content">
            <div class="wpm_6310_team_style_08_title">JHON</div>
            <div class="wpm_6310_team_style_08_border"></div>
            <div class="wpm_6310_team_style_08_designation">Web Desginer</div>
            <div class="wpm-custom-fields-08">
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08">Fax</div>
                <div class="wpm-custom-fields-list-content-08">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-08">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-08">
                <div class="wpm-custom-fields-list-label-08"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-08">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_08_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_08_social">
              <?php
                     shuffle($icons);
                     for ($i = 0; $i < 4; $i++) {
                        echo $icons[$i];
                     }
                     ?>
            </ul>

          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 8 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-08">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 09 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_09">
          <div class="wpm_6310_team_style_09_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_09_team_content">
            <div class="wpm_6310_team_style_09_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_09_designation">Sales Agent</div>
            <div class="wpm-custom-fields-09">
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09">Fax</div>
                <div class="wpm-custom-fields-list-content-09">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-09">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-09">1588100157</div>
              </div>
            </div>
            <p class="wpm_6310_team_style_09_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <ul class="wpm_6310_team_style_09_social">
              <?php
                     shuffle($icons);
                     for ($i = 0; $i < 4; $i++) {
                        echo $icons[$i];
                     }
                     ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_09">
          <div class="wpm_6310_team_style_09_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_09_team_content">
            <div class="wpm_6310_team_style_09_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_09_designation">Sales Agent</div>
            <div class="wpm-custom-fields-09">
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09">Fax</div>
                <div class="wpm-custom-fields-list-content-09">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-09">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-09">1588100157</div>
              </div>
            </div>
            <p class="wpm_6310_team_style_09_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <ul class="wpm_6310_team_style_09_social">
              <?php
                     shuffle($icons);
                     for ($i = 0; $i < 4; $i++) {
                        echo $icons[$i];
                     }
                     ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_09">
          <div class="wpm_6310_team_style_09_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_09_team_content">
            <div class="wpm_6310_team_style_09_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_09_designation">Sales Agent</div>
            <div class="wpm-custom-fields-09">
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09">Fax</div>
                <div class="wpm-custom-fields-list-content-09">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-09">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-09">
                <div class="wpm-custom-fields-list-label-09"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-09">1588100157</div>
              </div>
            </div>
            <p class="wpm_6310_team_style_09_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <ul class="wpm_6310_team_style_09_social">
              <?php
                     shuffle($icons);
                     for ($i = 0; $i < 4; $i++) {
                        echo $icons[$i];
                     }
                     ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 9 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-09">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 10 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_10">
          <div class="wpm_6310_team_style_10_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
            <div class="wpm_6310_team_style_10_social_team">
              <ul class="wpm_6310_team_style_10_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_10_team_content">
            <div class="wpm_6310_team_style_10_title">
              Adam Smith
            </div>
            <div class="wpm_6312_team_style_10_designation">Web Desginer</div>
            <div class="wpm-custom-fields-10">
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10">Fax</div>
                <div class="wpm-custom-fields-list-content-10">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-10">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-10">1588100157</div>
              </div>
            </div>
            <p class="wpm_6310_team_style_10_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_10">
          <div class="wpm_6310_team_style_10_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
            <div class="wpm_6310_team_style_10_social_team">
              <ul class="wpm_6310_team_style_10_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_10_team_content">
            <div class="wpm_6310_team_style_10_title">
              Adam Smith
            </div>
            <div class="wpm_6312_team_style_10_designation">Web Developer</div>
            <div class="wpm-custom-fields-10">
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10">Fax</div>
                <div class="wpm-custom-fields-list-content-10">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-10">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-10">1588100157</div>
              </div>
            </div>
            <p class="wpm_6310_team_style_10_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_10">
          <div class="wpm_6310_team_style_10_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
            <div class="wpm_6310_team_style_10_social_team">
              <ul class="wpm_6310_team_style_10_social">
                <?php
                        shuffle($icons);
                        for ($i = 0; $i < 4; $i++) {
                           echo $icons[$i];
                        }
                        ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_10_team_content">
            <div class="wpm_6310_team_style_10_title">
              Adam Smith
            </div>
            <div class="wpm_6312_team_style_10_designation">SEO Expert</div>
            <div class="wpm-custom-fields-10">
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10">Fax</div>
                <div class="wpm-custom-fields-list-content-10">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-10">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-10">
                <div class="wpm-custom-fields-list-label-10"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-10">1588100157</div>
              </div>
            </div>
            <p class="wpm_6310_team_style_10_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 10 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-10">Create Team</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>
</div>

<div id="wpm-6310-modal-add" class="wpm-6310-modal" style="display: none">
  <div class="wpm-6310-modal-content wpm-6310-modal-sm">
    <form action="" method="post">
      <div class="wpm-6310-modal-header">
        Create Team
        <div class="wpm-6310-close">&times;</div>
      </div>
      <div class="wpm-6310-modal-body-form">
        <?php wp_nonce_field("wpm-nonce-field") ?>
        <input type="hidden" name="style" id="wpm-style-hidden" />
        <table border="0" width="100%" cellpadding="10" cellspacing="0">
          <tr>
            <td width="90"><label class="wpm-form-label" for="icon_name">Team Name:</label></td>
            <td><input type="text" required="" name="style_name" id="style_name" value="" class="wpm-form-input"
                placeholder="Team Name" style="width: 265px" /></td>
          </tr>
        </table>
      </div>
      <div class="wpm-6310-modal-form-footer">
        <button type="button" name="close" class="wpm-btn-danger wpm-pull-right">Close</button>
        <input type="submit" name="submit" class="wpm-btn-primary wpm-pull-right wpm-margin-right-10" value="Save" />
      </div>
    </form>
    <br class="wpm-6310-clear" />
  </div>
</div>

<script>
jQuery(document).ready(function() {
  jQuery("body").on("click", ".wpm_choosen_style", function() {
    jQuery("#wpm-6310-modal-add").fadeIn(500);
    jQuery("#wpm-style-hidden").val(jQuery(this).attr("id"));
    jQuery("body").css({
      "overflow": "hidden"
    });
    return false;
  });

  jQuery("body").on("click", ".wpm-6310-close, .wpm-btn-danger", function() {
    jQuery("#wpm-6310-modal-add").fadeOut(500);
    jQuery("body").css({
      "overflow": "initial"
    });
  });
  jQuery(window).click(function(event) {
    if (event.target == document.getElementById('wpm-6310-modal-add')) {
      jQuery("#wpm-6310-modal-add").fadeOut(500);
      jQuery("body").css({
        "overflow": "initial"
      });
    }
  });
});
</script>