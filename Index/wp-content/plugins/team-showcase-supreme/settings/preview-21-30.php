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

    if ($_POST['style'] == 'template-21') {
      $css = "3||0|2|rgba(245, 203, 147, 1)||nai|rgba(165, 42, 42, 1)|0|0|rgba(51, 51, 51, 1)|20|rgb(255, 255, 255)|||normal|uppercase|Shanti|26|14|rgb(255, 255, 255)|200|capitalize|Shanti|24||35|35|1||0|rgba(165, 42, 42, 1)|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(236, 245, 191)|rgb(232, 232, 232)|rgb(232, 232, 232)|rgb(236, 245, 191)|100|100|none|none||||||0|0|||||||||0|0|||||||||||4||||||||0|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-22') {
      $css = "3||0|0|rgba(153, 24, 20, 1)||nai|rgba(243, 144, 77, 0.7)|0|0|rgba(36, 36, 36, 0.93)|20|rgb(44, 60, 201)|||700|capitalize|Shanti|25|15|rgb(31, 128, 26)|200|capitalize|Shanti|20||35|35|2||10|0|rgba(255, 255, 255, 1)|rgba(255, 255, 255, 1)|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(44, 60, 201)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(204, 0, 51)|100|100|none|none||||||0|15|||||||||0|10|||||||||||4||||||||1|12|14|21|rgb(102, 0, 102)|rgb(102, 0, 102)|Tinos|100|none|center|0|0|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-23') {
      $css = "3||0|0|rgba(0, 0, 0, 0.4)||nai|rgb(63, 43, 79)|0|0|rgba(94, 58, 122, 1)|24|rgb(255, 255, 255)|||700|capitalize|Anton|24|16|rgb(255, 255, 255)|800|capitalize|Shanti|25||35|35|0||15|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(63, 43, 79, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|100|100|capitalize|capitalize||||||0|7|||||||||0|20|||||||||0|15|4||||||||0|0|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|capitalize|center|0|15|100|capitalize|capitalize||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-24') {
      $css = "3||0|0|rgba(42, 193, 235, 1)||nai|rgba(43, 193, 234, 0.6)|0|4|rgba(43, 193, 234, 0.6)|20|rgb(0, 0, 0)|||700|capitalize|Shanti|26|14|rgb(0, 0, 0)|200|capitalize|Shanti|24||35|35|1||10|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|100|100|capitalize|capitalize||||||0|0|||||||||0|0|||||||||||4||||||||0|0|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|capitalize|center|0|15|100|capitalize|capitalize||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-25') {
      $css = "3||0|0|rgba(194, 177, 177, 1)||nai|rgba(222, 222, 222, 0.72)|0|0|rgba(36, 36, 36, 0.93)|20|rgb(10, 1, 1)|||bold|capitalize|Shanti|25|14|rgb(8, 0, 0)|800|capitalize|Shanti|20||35|35|1||0|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|100|100|capitalize|capitalize||||||0|7|||||||||0|0|||||||||||4||||||||0|0|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|capitalize|center|0|15|100|capitalize|capitalize||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-26') {
      $css = "3||0|1|rgba(255, 102, 76, 1)||nai|rgba(97, 52, 71, 1)|0|0|rgba(237, 224, 190, 1)|20|rgb(94, 52, 72)|||700|capitalize|Shanti|20|14|rgb(251, 102, 72)|100|capitalize|Shanti|20||35|35|2||10|rgba(237, 224, 190, 1)|rgb(236, 223, 189)|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|100|100|capitalize|capitalize||||||0|10|||||||||0|13|||||||||0|10|4||||||||0|0|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|capitalize|center|0|15|100|capitalize|capitalize||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-27') {
      $css = "3||0|0|rgba(0, 0, 0, 0.4)||nai|rgba(203, 86, 93, 1)|0|0|rgba(207, 0, 0, 1)|20|rgb(255, 255, 255)|||700|capitalize|Shanti|23|14|rgb(255, 255, 255)|300|capitalize|Shanti|18||35|35|0||15|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|100|100|capitalize|capitalize||||||0|8|||||||||0|0|||||||||20|0|4||||||||0|0|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|capitalize|center|0|15|100|capitalize|capitalize||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-28') {
      $css = "3||0|0|rgba(222, 51, 51, 0.7)||nai|rgba(216, 52, 60, 1)|1|3|rgba(191, 115, 112, 0.7)|20|rgb(255, 255, 255)|||600|capitalize|Shanti|26|14|rgb(255, 255, 255)|200|capitalize|Shanti|24||36|36|1||1|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(255, 218, 185)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(255, 218, 185)|100|100|none|none||||||0|5|||||||||0|10|||||||||0|0|4||||||||0|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-29') {
      $css = "3||0|3|rgba(0, 153, 153, 1)||nai|rgba(35, 148, 120, 0.47)|0|0|rgba(43, 146, 148, 1)|20|rgb(255, 255, 255)|||600|uppercase|Shanti|24|13|rgb(255, 255, 255)|300|capitalize|Shanti|18||35|35|0||20|0|rgba(0, 153, 153, 1)|rgba(0, 153, 153, 1)|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(175, 238, 238)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(175, 238, 238)|100|100|none|none||||||15|0|||||||||5|15|||||||||||4||||||||0|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-30') {
      $css = "3||0|0|rgba(0, 131, 224, 0.9)||nai|rgb(255, 255, 255)|0|0|rgb(255, 193, 7)|20|rgb(230, 28, 21)|||600|uppercase|Shanti|28|14|rgb(22, 82, 16)|200|capitalize|Shanti|20||28|28|0||5|rgb(255, 193, 7)|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(128, 0, 0)|100|100|none|none||||||0|0|||||||||0|0|||||||||0|0|4||||||||1|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Tinos|100|none|center|10|10|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
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
      $url = admin_url("admin.php?page=wpm-template-21-30&styleid=$redirect_id");
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

  <!-- Template 21 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_21">
          <div class="wpm_6310_team_style_21_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_21_team_content">
            <div class="wpm_6310_team_style_21_title">William</div>
            <div class="wpm_6310_team_style_21_designation">Web Desginer</div>
            <div class="wpm-custom-fields-21">
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21">Fax</div>
                <div class="wpm-custom-fields-list-content-21">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-21">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-21">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_21_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_21_social">
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
              <li><a href=""><i class="fab fa-youtube"></i></a></li>
              <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_21">
          <div class="wpm_6310_team_style_21_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_21_team_content">
            <div class="wpm_6310_team_style_21_title">William</div>
            <div class="wpm_6310_team_style_21_designation">Web Desginer</div>
            <div class="wpm-custom-fields-21">
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21">Fax</div>
                <div class="wpm-custom-fields-list-content-21">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-21">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-21">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_21_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_21_social">
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
              <li><a href=""><i class="fab fa-youtube"></i></a></li>
              <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_21">
          <div class="wpm_6310_team_style_21_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_21_team_content">
            <div class="wpm_6310_team_style_21_title">William</div>
            <div class="wpm_6310_team_style_21_designation">Web Desginer</div>
            <div class="wpm-custom-fields-21">
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21">Fax</div>
                <div class="wpm-custom-fields-list-content-21">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-21">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-21">
                <div class="wpm-custom-fields-list-label-21"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-21">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_21_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_21_social">
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
              <li><a href=""><i class="fab fa-youtube"></i></a></li>
              <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>

        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 21
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-21">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 22 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_22">
          <div class="wpm_6310_team_style_22_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
            <ul class="wpm_6310_team_style_22_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_22_team_content">
            <div class="wpm_6310_team_style_22_title">William</div>
            <div class="wpm_6310_team_style_22_designation">Web Desginer</div>
            <div class="wpm-custom-fields-22">
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22">Fax</div>
                <div class="wpm-custom-fields-list-content-22">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-22">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-22">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_22_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_22">
          <div class="wpm_6310_team_style_22_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
            <ul class="wpm_6310_team_style_22_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_22_team_content">
            <div class="wpm_6310_team_style_22_title">William</div>
            <div class="wpm_6310_team_style_22_designation">Web Desginer</div>
            <div class="wpm-custom-fields-22">
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22">Fax</div>
                <div class="wpm-custom-fields-list-content-22">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-22">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-22">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_22_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_22">
          <div class="wpm_6310_team_style_22_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
            <ul class="wpm_6310_team_style_22_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_22_team_content">
            <div class="wpm_6310_team_style_22_title">William</div>
            <div class="wpm_6310_team_style_22_designation">Web Desginer</div>
            <div class="wpm-custom-fields-22">
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22">Fax</div>
                <div class="wpm-custom-fields-list-content-22">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-22">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-22">
                <div class="wpm-custom-fields-list-label-22"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-22">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_22_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 22
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-22">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 23 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_23">
          <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
          <div class="wpm_6310_team_style_23_team_content">
            <div class="wpm_6310_team_style_23_title">Sara</div>
            <div class="wpm_6310_team_style_23_designation">web designer</div>
            <ul class="wpm_6310_team_style_23_social">
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
        <div class="wpm_6310_team_style_23">
          <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          <div class="wpm_6310_team_style_23_team_content">
            <div class="wpm_6310_team_style_23_title">Sara</div>
            <div class="wpm_6310_team_style_23_designation">web designer</div>
            <ul class="wpm_6310_team_style_23_social">
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
        <div class="wpm_6310_team_style_23">
          <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
          <div class="wpm_6310_team_style_23_team_content">
            <div class="wpm_6310_team_style_23_title">Sara</div>
            <div class="wpm_6310_team_style_23_designation">web designer</div>
            <ul class="wpm_6310_team_style_23_social">
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
      Template 23
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-23">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 24 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_24">

          <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
          <ul class="wpm_6310_team_style_24_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
          <div class="wpm_6310_team_style_24_team_content">
            <div class="wpm_6310_team_style_24_title">Williamson</div>
            <div class="wpm_6310_team_style_24_designation">web developer</div>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_24">

          <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          <ul class="wpm_6310_team_style_24_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
          <div class="wpm_6310_team_style_24_team_content">
            <div class="wpm_6310_team_style_24_title">Williamson</div>
            <div class="wpm_6310_team_style_24_designation">web developer</div>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_24">

          <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
          <ul class="wpm_6310_team_style_24_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
          <div class="wpm_6310_team_style_24_team_content">
            <div class="wpm_6310_team_style_24_title">Williamson</div>
            <div class="wpm_6310_team_style_24_designation">web developer</div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 24
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-24">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 25 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_25">
          <img src="<?php echo $arr[0] ?>" alt="Team Showcase">

          <div class="wpm_6310_team_style_25_team_content">
            <div class="wpm_6310_team_style_25_title">Williamson</div>
            <div class="wpm_6310_team_style_25_designation">web developer</div>
            <div class="wpm-custom-fields-25">
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25">Fax</div>
                <div class="wpm-custom-fields-list-content-25">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-25">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-25">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_25_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
          <ul class="wpm_6310_team_style_25_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_25">

          <img src="<?php echo $arr[1] ?>" alt="Team Showcase">

          <div class="wpm_6310_team_style_25_team_content">
            <div class="wpm_6310_team_style_25_title">Williamson</div>
            <div class="wpm_6310_team_style_25_designation">web developer</div>
            <div class="wpm-custom-fields-25">
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25">Fax</div>
                <div class="wpm-custom-fields-list-content-25">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-25">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-25">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_25_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
          <ul class="wpm_6310_team_style_25_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_25">

          <img src="<?php echo $arr[2] ?>" alt="Team Showcase">

          <div class="wpm_6310_team_style_25_team_content">
            <div class="wpm_6310_team_style_25_title">Williamson</div>
            <div class="wpm_6310_team_style_25_designation">web developer</div>
            <div class="wpm-custom-fields-25">
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25">Fax</div>
                <div class="wpm-custom-fields-list-content-25">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-25">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-25">
                <div class="wpm-custom-fields-list-label-25"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-25">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_25_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
          <ul class="wpm_6310_team_style_25_social">
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
    <div class="wpm-6310-template-list">
      Template 25
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-25">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 26 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_26">

          <img src="<?php echo $arr[0] ?>" alt="Team Showcase">

          <div class="wpm_6310_team_style_26_team_content">
            <div class="wpm_6310_team_style_26_title">Williamson</div>
            <div class="wpm_6310_team_style_26_designation">web developer</div>
            <ul class="wpm_6310_team_style_26_social">
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
        <div class="wpm_6310_team_style_26">

          <img src="<?php echo $arr[1] ?>" alt="Team Showcase">

          <div class="wpm_6310_team_style_26_team_content">
            <div class="wpm_6310_team_style_26_title">Williamson</div>
            <div class="wpm_6310_team_style_26_designation">web developer</div>
            <ul class="wpm_6310_team_style_26_social">
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
        <div class="wpm_6310_team_style_26">

          <img src="<?php echo $arr[2] ?>" alt="Team Showcase">

          <div class="wpm_6310_team_style_26_team_content">
            <div class="wpm_6310_team_style_26_title">Williamson</div>
            <div class="wpm_6310_team_style_26_designation">web developer</div>
            <ul class="wpm_6310_team_style_26_social">
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
      Template 26
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-26">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 27 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_27">
          <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
          <ul class="wpm_6310_team_style_27_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
          <div class="wpm_6310_team_style_27_team_content">
            <div class="wpm_6310_team_style_27_title">Sara</div>
            <div class="wpm_6310_team_style_27_designation">web designer</div>

          </div>

        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_27">
          <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          <ul class="wpm_6310_team_style_27_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
          <div class="wpm_6310_team_style_27_team_content">
            <div class="wpm_6310_team_style_27_title">Sara</div>
            <div class="wpm_6310_team_style_27_designation">web designer</div>

          </div>

        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_27">
          <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
          <ul class="wpm_6310_team_style_27_social">
            <?php
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              echo $icons[$i];
            }
            ?>
          </ul>
          <div class="wpm_6310_team_style_27_team_content">
            <div class="wpm_6310_team_style_27_title">Sara</div>
            <div class="wpm_6310_team_style_27_designation">web designer</div>

          </div>

        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 27
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-27">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 28 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_28">
          <div class="wpm_6310_team_style_28_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_28_team_content">
            <div class="wpm_6310_team_style_28_box_content">
              <div class="wpm_6310_team_style_28_title">Williamson</div>
              <div class="wpm_6310_team_style_28_designation">web developer</div>
              <div class="wpm-custom-fields-28">
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28">Fax</div>
                  <div class="wpm-custom-fields-list-content-28">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-28">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-28">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_28_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_28_social">
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
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_28">
          <div class="wpm_6310_team_style_28_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_28_team_content">
            <div class="wpm_6310_team_style_28_box_content">
              <div class="wpm_6310_team_style_28_title">Williamson</div>
              <div class="wpm_6310_team_style_28_designation">web developer</div>
              <div class="wpm-custom-fields-28">
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28">Fax</div>
                  <div class="wpm-custom-fields-list-content-28">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-28">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-28">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_28_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_28_social">
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
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_28">
          <div class="wpm_6310_team_style_28_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_28_team_content">
            <div class="wpm_6310_team_style_28_box_content">
              <div class="wpm_6310_team_style_28_title">Williamson</div>
              <div class="wpm_6310_team_style_28_designation">web developer</div>
              <div class="wpm-custom-fields-28">
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28">Fax</div>
                  <div class="wpm-custom-fields-list-content-28">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-28">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-28">
                  <div class="wpm-custom-fields-list-label-28"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-28">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_28_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_28_social">
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
    </div>
    <div class="wpm-6310-template-list">
      Template 28
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-28">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 29 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_29">
          <div class="wpm_6310_team_style_29_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
            <ul class="wpm_6310_team_style_29_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_29_title">Sara</div>
          <div class="wpm_6310_team_style_29_designation">web designer</div>
          <div class="wpm-custom-fields-29">
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29">Fax</div>
              <div class="wpm-custom-fields-list-content-29">03424387263</div>
            </div>
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29"><i class="far fa-address-card"></i></div>
              <div class="wpm-custom-fields-list-content-29">Dhaka, Bangladesh</div>
            </div>
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29"><i class="fas fa-phone-square"></i></div>
              <div class="wpm-custom-fields-list-content-29">1588100157</div>
            </div>
          </div>
          <div class="wpm_6310_team_style_29_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_29">
          <div class="wpm_6310_team_style_29_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
            <ul class="wpm_6310_team_style_29_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_29_title">Sara</div>
          <div class="wpm_6310_team_style_29_designation">web designer</div>
          <div class="wpm-custom-fields-29">
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29">Fax</div>
              <div class="wpm-custom-fields-list-content-29">03424387263</div>
            </div>
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29"><i class="far fa-address-card"></i></div>
              <div class="wpm-custom-fields-list-content-29">Dhaka, Bangladesh</div>
            </div>
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29"><i class="fas fa-phone-square"></i></div>
              <div class="wpm-custom-fields-list-content-29">1588100157</div>
            </div>
          </div>
          <div class="wpm_6310_team_style_29_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_29">
          <div class="wpm_6310_team_style_29_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
            <ul class="wpm_6310_team_style_29_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_29_title">Sara</div>
          <div class="wpm_6310_team_style_29_designation">web designer</div>
          <div class="wpm-custom-fields-29">
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29">Fax</div>
              <div class="wpm-custom-fields-list-content-29">03424387263</div>
            </div>
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29"><i class="far fa-address-card"></i></div>
              <div class="wpm-custom-fields-list-content-29">Dhaka, Bangladesh</div>
            </div>
            <div class="wpm-custom-fields-list-29">
              <div class="wpm-custom-fields-list-label-29"><i class="fas fa-phone-square"></i></div>
              <div class="wpm-custom-fields-list-content-29">1588100157</div>
            </div>
          </div>
          <div class="wpm_6310_team_style_29_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 29
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-29">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 30 -->

  <?php shuffle($arr); ?>
  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_30">
          <div class="wpm_6310_team_style_30_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_30_team_content">
            <div class="wpm_6310_team_style_30_box_content">
              <div class="wpm_6310_team_style_30_title">Williamson</div>
              <div class="wpm_6310_team_style_30_designation">web developer</div>
              <div class="wpm-custom-fields-30">
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30">Fax</div>
                  <div class="wpm-custom-fields-list-content-30">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-30">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-30">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_30_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed sit amet ipsum ut quam faucibus dictum a sit amet lorem.</div>

              <ul class="wpm_6310_team_style_30_social">
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
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_30">
          <div class="wpm_6310_team_style_30_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_30_team_content">
            <div class="wpm_6310_team_style_30_box_content">
              <div class="wpm_6310_team_style_30_title">Williamson</div>
              <div class="wpm_6310_team_style_30_designation">web developer</div>
              <div class="wpm-custom-fields-30">
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30">Fax</div>
                  <div class="wpm-custom-fields-list-content-30">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-30">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-30">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_30_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed sit amet ipsum ut quam faucibus dictum a sit amet lorem.</div>

              <ul class="wpm_6310_team_style_30_social">
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
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_30">
          <div class="wpm_6310_team_style_30_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_30_team_content">
            <div class="wpm_6310_team_style_30_box_content">
              <div class="wpm_6310_team_style_30_title">Williamson</div>
              <div class="wpm_6310_team_style_30_designation">web developer</div>
              <div class="wpm-custom-fields-30">
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30">Fax</div>
                  <div class="wpm-custom-fields-list-content-30">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-30">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-30">
                  <div class="wpm-custom-fields-list-label-30"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-30">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_30_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed sit amet ipsum ut quam faucibus dictum a sit amet lorem.</div>

              <ul class="wpm_6310_team_style_30_social">
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
    </div>
    <div class="wpm-6310-template-list">
      Template 30
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-30">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
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