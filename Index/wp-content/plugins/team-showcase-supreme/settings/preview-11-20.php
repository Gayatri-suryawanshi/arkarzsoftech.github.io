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

    if ($_POST['style'] == 'template-11') {
      $css = "3|wpm_6310_team_style_hover_animation_top|0|0|rgba(48, 48, 48, 1)||nai|rgba(0, 0, 0, 0.8)|0|0|rgba(0, 0, 0, 0.74)|22|rgb(255, 255, 255)|||400|capitalize|Shanti|28|16|rgb(255, 255, 255)|100|capitalize|Shanti|24||35|35|1||3|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 0, 0)|rgb(190, 190, 190)|rgb(0, 0, 0)|rgb(190, 190, 190)|100|100|none|none||||||0|0|||||||||0|15|||||||||15|15|4||||||||0|12|14|18|rgb(255, 255, 255)|rgb(255, 255, 255)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-12') {
      $css = "3||0|1|rgba(153, 153, 153, 0.73)||nai|rgba(26, 188, 156, 1)|0|1|rgba(148, 148, 148, 0.93)|20|rgb(255, 255, 255)|||600|uppercase|Shanti|24|14|rgb(255, 255, 255)|200|uppercase|Shanti|18||35|35|1||0|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|left|rgb(156, 255, 235)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(156, 255, 235)|100|100|none|none||||||20|0|||||||||0|10|||||||||8|0|4||||||||1|12|14|20|rgb(255, 255, 255)|rgb(255, 255, 255)|Tinos|100|none|left|0|10|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-13') {
      $css = "3||0|1|rgba(255, 0, 0, 1)||nai|rgba(242, 242, 242, 0.96)|0|0|rgba(201, 0, 0, 1)|22|rgb(0, 0, 0)|||100|uppercase|Shanti|28|14|rgb(117, 117, 117)|300|uppercase|Shanti|20||35|35|1||0||rgba(220, 0, 90, 0.8)|0|rgba(242, 242, 242, 0.96)|1";
      $slider = '0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 1)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|10|center|rgb(0, 0, 0)|rgb(219, 0, 0)|rgb(0, 0, 0)|rgb(148, 0, 0)|100|100|none|none||||||15|0|||||||||0|10|||||||||0|10|4||||||||1|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15';
    } else if ($_POST['style'] == 'template-14') {
      $css = "3||0|0|rgba(0, 0, 0, 0.9)||nai|rgba(255, 255, 255, 1)|0|0|rgba(5, 5, 5, 1)|20|rgb(0, 0, 0)|||600|uppercase|Shanti|26|14|rgb(0, 0, 0)|200|uppercase|Shanti|24||35|35|1||1|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(0, 100, 0)|100|100|none|none||||||15|0|||||||||0|15|||||||||0|0|4||||||||0|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-15') {
      $css = "3||0|0|rgba(168, 3, 0, 1)||nai|rgba(0, 0, 0, 0.6)|0|0|rgba(145, 0, 0, 1)|20|rgb(255, 255, 255)|||600|uppercase|Shanti|24|14|rgb(203, 149, 225)|200|uppercase|Shanti|20||35|35|1||1|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|left|rgb(203, 149, 225)|rgb(203, 149, 225)|rgb(190, 190, 190)|rgb(190, 190, 190)|100|100|none|none||||||0|0|||||||||0|10|||||||||0|0|4||||||||1|12|14|22|rgb(255, 255, 255)|rgb(255, 255, 255)|Amaranth|100|none|center|0|20|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-16') {
      $css = "3||0|1|rgba(156, 136, 185, 0.7)||nai|rgba(243, 245, 247, 0.77)|0|0|rgba(143, 0, 0, 1)|20|rgb(31, 31, 31)|||700|uppercase|Shanti|26|14|rgb(120, 120, 120)|100|uppercase|Shanti|22||35|35|1||0|rgba(243, 245, 247, 0.77)|rgba(156, 136, 185, 0.7)|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|left|rgb(203, 149, 225)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(203, 149, 225)|100|100|none|none||||||0|5|||||||||0|15|||||||||||4||||||||1|12|14|21|rgb(0, 0, 0)|rgb(0, 0, 0)|Tinos|100|none|left|0|10|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-17') {
      $css = "3||0|10|rgba(1, 22, 39, 1)||nai|rgba(46, 196, 182, 1)|0|0|rgba(255, 255, 255, 1)|20|rgb(1, 22, 39)|rgb(46, 196, 182)|rgb(255, 255, 255)|bold|uppercase|Shanti|26|14|rgb(231, 29, 54)|300|uppercase|Shanti|18||35|35|1||1|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(1, 22, 39)|rgb(196, 45, 116)|rgb(1, 22, 39)|rgb(46, 196, 182)|100|100|none|none||||||0|5|||||||||0|12|||||||||||4||||||||1|12|14|22|rgb(0, 0, 0)|rgb(0, 0, 0)|Tinos|100|none|center|0|0|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-18') {
      $css = "3||0|1|rgba(161, 161, 161, 1)||nai|rgba(0, 0, 0, 0.55)|0|0|rgba(31, 179, 170, 1)|22|rgb(46, 46, 46)|||100|uppercase|Shanti|28|14|rgb(255, 255, 255)|100|uppercase|Shanti|20||35|35|1||10|0|rgba(31, 179, 170, 1)|rgba(31, 179, 170, 1)|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(0, 0, 0)|rgb(255, 255, 255)|rgb(0, 0, 0)|rgb(255, 255, 255)|100|100|none|none||||||20|0|||||||||0|20|||||||||||4||||||||0|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-19') {
      $css = "3||0|1|rgba(37, 173, 96, 1)||nai|rgba(38, 173, 96, 0.44)|0|0|rgba(0, 255, 111, 0.45)|20|rgb(42, 66, 132)|||600|uppercase|Shanti|26|14|rgb(69, 69, 69)|200|uppercase|Shanti|24||35|35|1||10|0|rgba(255, 255, 255, 1)|rgba(255, 255, 255, 1)|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(42, 66, 132)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(42, 66, 132)|100|100|none|none||||||15|20|||||||||0|20|||||||||||4||||||||0|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
    } else if ($_POST['style'] == 'template-20') {
      $css = "3||0|10|rgba(60, 50, 107, 1)||nai|rgba(60, 51, 107, 0.71)|0|0|rgba(145, 0, 0, 1)|20|rgb(60, 50, 107)|||500|capitalize|Shanti|26|14|rgb(60, 50, 107)|200|capitalize|Shanti|20||35|35|1||1|0|rgba(255, 255, 255, 1)|rgba(255, 255, 255, 1)|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|0|15|center|rgb(60, 50, 107)|rgb(0, 0, 0)|rgb(0, 0, 0)|rgb(60, 50, 107)|100|100|none|none||||||15|5|||||||||0|15|||||||||||4||||||||0|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Amaranth|100|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
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
      $url = admin_url("admin.php?page=wpm-template-11-20&styleid=$redirect_id");
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

  <!-- Template 11 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_11">
          <div class="">
            <img src="<?php echo $arr[0] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <div class="wpm_6310_team_style_11_title">Adam Smith</div>
          </div>
          <div class="wpm_6310_team_style_11_hover_animation_top">
            <div class="wpm_6310_team_style_11_table">
              <div class="wpm_6310_team_style_11_table_cell">
                <div class="wpm_6310_team_style_11_title_hover">Adam Smith</div>
                <div class="wpm_6310_team_style_11_designation_hover">CEO</div>
                <div class="wpm-custom-fields-11">
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11">Fax</div>
                    <div class="wpm-custom-fields-list-content-11">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-11">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-11">1588100157</div>
                  </div>
                </div>
                <div class="wpm_6310_team_style_11_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <ul class="wpm_6310_team_style_11_social_hover">
                  <?php
                  shuffle($icons);
                  for ($i = 0; $i < 4; $i++) {
                    echo $icons[$i];
                  }
                  ?>
                </ul>
                <div class="wpm_6310_team_style_11_read_more">
                  <a href="#">VIEW MORE</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_11">
          <div class="">
            <img src="<?php echo $arr[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <div class="wpm_6310_team_style_11_title">James Miller</div>
          </div>
          <div class="wpm_6310_team_style_11_hover_animation_left">
            <div class="wpm_6310_team_style_11_table">
              <div class="wpm_6310_team_style_11_table_cell">
                <div class="wpm_6310_team_style_11_title_hover">James Miller</div>
                <div class="wpm_6310_team_style_11_designation_hover">Sales Manager</div>
                <div class="wpm-custom-fields-11">
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11">Fax</div>
                    <div class="wpm-custom-fields-list-content-11">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-11">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-11">1588100157</div>
                  </div>
                </div>
                <div class="wpm_6310_team_style_11_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <ul class="wpm_6310_team_style_11_social_hover">
                  <?php
                  shuffle($icons);
                  for ($i = 0; $i < 4; $i++) {
                    echo $icons[$i];
                  }
                  ?>
                </ul>
                <div class="wpm_6310_team_style_11_read_more">
                  <a href="#">VIEW MORE</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_11">
          <div class="">
            <img src="<?php echo $arr[2] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <div class="wpm_6310_team_style_11_title">Michel Clark</div>
          </div>
          <div class="wpm_6310_team_style_11_hover_animation_right">
            <div class="wpm_6310_team_style_11_table">
              <div class="wpm_6310_team_style_11_table_cell">
                <div class="wpm_6310_team_style_11_title_hover">Michel Clark</div>
                <div class="wpm_6310_team_style_11_designation_hover">Sales Agent</div>
                <div class="wpm-custom-fields-11">
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11">Fax</div>
                    <div class="wpm-custom-fields-list-content-11">03424387263</div>
                  </div>
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11"><i class="far fa-address-card"></i></div>
                    <div class="wpm-custom-fields-list-content-11">Dhaka, Bangladesh</div>
                  </div>
                  <div class="wpm-custom-fields-list-11">
                    <div class="wpm-custom-fields-list-label-11"><i class="fas fa-phone-square"></i></div>
                    <div class="wpm-custom-fields-list-content-11">1588100157</div>
                  </div>
                </div>
                <div class="wpm_6310_team_style_11_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <ul class="wpm_6310_team_style_11_social_hover">
                  <?php
                  shuffle($icons);
                  for ($i = 0; $i < 4; $i++) {
                    echo $icons[$i];
                  }
                  ?>
                </ul>
                <div class="wpm_6310_team_style_11_read_more">
                  <a href="#">VIEW MORE</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 11 <small>(4 Effects)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-11">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 12 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_12">
          <div class="wpm_6310_team_style_12_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_12_team_content">
            <div class="wpm_6310_team_style_12_title"> William </div>
            <div class="wpm_6310_team_style_12_designation">Web Developer</div>
            <div class="wpm-custom-fields-12">
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12">Fax</div>
                <div class="wpm-custom-fields-list-content-12">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-12">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-12">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_12_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="wpm_6310_team_style_12_border"></div>

            <ul class="wpm_6310_team_style_12_social">
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
        <div class="wpm_6310_team_style_12">
          <div class="wpm_6310_team_style_12_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_12_team_content">
            <div class="wpm_6310_team_style_12_title"> William </div>
            <div class="wpm_6310_team_style_12_designation">Web Developer</div>
            <div class="wpm-custom-fields-12">
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12">Fax</div>
                <div class="wpm-custom-fields-list-content-12">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-12">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-12">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_12_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="wpm_6310_team_style_12_border"></div>

            <ul class="wpm_6310_team_style_12_social">
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
        <div class="wpm_6310_team_style_12">
          <div class="wpm_6310_team_style_12_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_12_team_content">
            <div class="wpm_6310_team_style_12_title"> William </div>
            <div class="wpm_6310_team_style_12_designation">Web Developer</div>
            <div class="wpm-custom-fields-12">
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12">Fax</div>
                <div class="wpm-custom-fields-list-content-12">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-12">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-12">
                <div class="wpm-custom-fields-list-label-12"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-12">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_12_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="wpm_6310_team_style_12_border"></div>

            <ul class="wpm_6310_team_style_12_social">
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
      Template 12
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-12">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 13 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_13">
          <div class="wpm_6310_team_style_13_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_13_team_content">
            <div class="wpm_6310_team_style_13_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_13_designation">Sales Agent</div>
            <div class="wpm-custom-fields-13">
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13">Fax</div>
                <div class="wpm-custom-fields-list-content-13">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-13">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-13">1588100157</div>
              </div>
            </div>
            <ul class="wpm_6310_team_style_13_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
            <div class="wpm_6310_team_style_13_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>

          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_13">
          <div class="wpm_6310_team_style_13_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_13_team_content">
            <div class="wpm_6310_team_style_13_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_13_designation">Sales Agent</div>
            <div class="wpm-custom-fields-13">
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13">Fax</div>
                <div class="wpm-custom-fields-list-content-13">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-13">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-13">1588100157</div>
              </div>
            </div>
            <ul class="wpm_6310_team_style_13_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
            <div class="wpm_6310_team_style_13_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>

          </div>
        </div>
      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_13">
          <div class="wpm_6310_team_style_13_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
          </div>

          <div class="wpm_6310_team_style_13_team_content">
            <div class="wpm_6310_team_style_13_title">Mildred Martin</div>
            <div class="wpm_6310_team_style_13_designation">Sales Agent</div>
            <div class="wpm-custom-fields-13">
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13">Fax</div>
                <div class="wpm-custom-fields-list-content-13">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-13">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-13">
                <div class="wpm-custom-fields-list-label-13"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-13">1588100157</div>
              </div>
            </div>
            <ul class="wpm_6310_team_style_13_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
            <div class="wpm_6310_team_style_13_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>

          </div>
        </div>
      </div>

    </div>
    <div class="wpm-6310-template-list">
      Template 13
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-13">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 14 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_14">
          <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
          <div class="wpm_6310_team_style_14_team_content">
            <div class="wpm_6310_team_style_14_title">William</div>
            <div class="wpm_6310_team_style_14_designation">Web Desginer</div>
            <div class="wpm-custom-fields-14">
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14">Fax</div>
                <div class="wpm-custom-fields-list-content-14">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-14">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-14">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_14_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_14_social">
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
        <div class="wpm_6310_team_style_14">
          <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          <div class="wpm_6310_team_style_14_team_content">
            <div class="wpm_6310_team_style_14_title">
              William

            </div>
            <div class="wpm_6310_team_style_14_designation">Web Desginer</div>
            <div class="wpm-custom-fields-14">
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14">Fax</div>
                <div class="wpm-custom-fields-list-content-14">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-14">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-14">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_14_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_14_social">
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
        <div class="wpm_6310_team_style_14">
          <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
          <div class="wpm_6310_team_style_14_team_content">
            <div class="wpm_6310_team_style_14_title">
              William

            </div>
            <div class="wpm_6310_team_style_14_designation">Web Desginer</div>
            <div class="wpm-custom-fields-14">
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14">Fax</div>
                <div class="wpm-custom-fields-list-content-14">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-14">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-14">
                <div class="wpm-custom-fields-list-label-14"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-14">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_14_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <ul class="wpm_6310_team_style_14_social">
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
      Template 14
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-14">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 15 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_15">
          <div class="wpm_6310_team_style_15_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_15_team_content">
            <div class="wpm_6310_team_style_15_title">William</div>
            <div class="wpm_6310_team_style_15_designation">Web Desginer</div>
            <div class="wpm-custom-fields-15">
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15">Fax</div>
                <div class="wpm-custom-fields-list-content-15">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-15">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-15">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_15_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed sit amet ipsum ut quam faucibus dictum.</div>
            <ul class="wpm_6310_team_style_15_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>

          </div>
          <div class="wpm_6310_team_style_15_team_display">
            <div class="wpm_6310_team_style_15_title">William</div>
            <div class="wpm_6310_team_style_15_designation">Web Desginer</div>
          </div>
        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_15">
          <div class="wpm_6310_team_style_15_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_15_team_content">
            <div class="wpm_6310_team_style_15_title">William</div>
            <div class="wpm_6310_team_style_15_designation">Web Desginer</div>
            <div class="wpm-custom-fields-15">
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15">Fax</div>
                <div class="wpm-custom-fields-list-content-15">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-15">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-15">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_15_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed sit amet ipsum ut quam faucibus dictum.</div>
            <ul class="wpm_6310_team_style_15_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>

          </div>
          <div class="wpm_6310_team_style_15_team_display">
            <div class="wpm_6310_team_style_15_title">William</div>
            <div class="wpm_6310_team_style_15_designation">Web Desginer</div>
          </div>
        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_15">
          <div class="wpm_6310_team_style_15_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
          </div>
          <div class="wpm_6310_team_style_15_team_content">
            <div class="wpm_6310_team_style_15_title">William</div>
            <div class="wpm_6310_team_style_15_designation">Web Desginer</div>
            <div class="wpm-custom-fields-15">
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15">Fax</div>
                <div class="wpm-custom-fields-list-content-15">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-15">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-15">
                <div class="wpm-custom-fields-list-label-15"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-15">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_15_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed
              sit amet ipsum ut quam faucibus dictum.</div>
            <ul class="wpm_6310_team_style_15_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>

          </div>
          <div class="wpm_6310_team_style_15_team_display">
            <div class="wpm_6310_team_style_15_title">William</div>
            <div class="wpm_6310_team_style_15_designation">Web Desginer</div>
          </div>
        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 15
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-15">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 16 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_16">
          <div class="wpm_6310_team_style_16_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
            <div class="wpm_6310_team_style_16_social_team">
              <ul class="wpm_6310_team_style_16_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_16_team_content">
            <div class="wpm_6310_team_style_16_title">William</div>
            <div class="wpm_6310_team_style_16_designation">Web Desginer</div>
            <div class="wpm-custom-fields-16">
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16">Fax</div>
                <div class="wpm-custom-fields-list-content-16">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-16">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-16">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_16_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_16">
          <div class="wpm_6310_team_style_16_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
            <div class="wpm_6310_team_style_16_social_team">
              <ul class="wpm_6310_team_style_16_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_16_team_content">
            <div class="wpm_6310_team_style_16_title">William</div>
            <div class="wpm_6310_team_style_16_designation">Web Desginer</div>
            <div class="wpm-custom-fields-16">
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16">Fax</div>
                <div class="wpm-custom-fields-list-content-16">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-16">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-16">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_16_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_16">
          <div class="wpm_6310_team_style_16_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
            <div class="wpm_6310_team_style_16_social_team">
              <ul class="wpm_6310_team_style_16_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_16_team_content">
            <div class="wpm_6310_team_style_16_title">William</div>
            <div class="wpm_6310_team_style_16_designation">Web Desginer</div>
            <div class="wpm-custom-fields-16">
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16">Fax</div>
                <div class="wpm-custom-fields-list-content-16">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-16">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-16">
                <div class="wpm-custom-fields-list-label-16"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-16">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_16_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 16
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-16">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- template 17 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_17">
          <div class="wpm_6310_team_style_17_pic_border">
            <div class="wpm_6310_team_style_17_pic">
              <img src="<?php echo $arr[0] ?>" alt="Team Showcase">

              <ul class="wpm_6310_team_style_17_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_17_team_content">
            <div class="wpm_6310_team_style_17_title">William</div>
            <div class="wpm_6310_team_style_17_designation">Web Desginer</div>
            <div class="wpm-custom-fields-17">
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17">Fax</div>
                <div class="wpm-custom-fields-list-content-17">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-17">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-17">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_17_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_17">
          <div class="wpm_6310_team_style_17_pic_border">
            <div class="wpm_6310_team_style_17_pic">
              <img src="<?php echo $arr[1] ?>" alt="Team Showcase">

              <ul class="wpm_6310_team_style_17_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_17_team_content">
            <div class="wpm_6310_team_style_17_title">William</div>
            <div class="wpm_6310_team_style_17_designation">Web Desginer</div>
            <div class="wpm-custom-fields-17">
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17">Fax</div>
                <div class="wpm-custom-fields-list-content-17">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-17">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-17">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_17_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_17">
          <div class="wpm_6310_team_style_17_pic_border">
            <div class="wpm_6310_team_style_17_pic">
              <img src="<?php echo $arr[2] ?>" alt="Team Showcase">

              <ul class="wpm_6310_team_style_17_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="wpm_6310_team_style_17_team_content">
            <div class="wpm_6310_team_style_17_title">William</div>
            <div class="wpm_6310_team_style_17_designation">Web Desginer</div>
            <div class="wpm-custom-fields-17">
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17">Fax</div>
                <div class="wpm-custom-fields-list-content-17">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-17">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-17">
                <div class="wpm-custom-fields-list-label-17"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-17">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_17_description">Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
          </div>

        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 17
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-17">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 18 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_18">
          <div class="wpm_6310_team_style_18_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">

            <ul class="wpm_6310_team_style_18_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_18_team_content">
            <div class="wpm_6310_team_style_18_title">William</div>
            <div class="wpm_6310_team_style_18_designation">Web Desginer</div>
            <div class="wpm-custom-fields-18">
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18">Fax</div>
                <div class="wpm-custom-fields-list-content-18">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-18">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-18">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_18_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_18">

          <div class="wpm_6310_team_style_18_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">

            <ul class="wpm_6310_team_style_18_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>

          <div class="wpm_6310_team_style_18_team_content">
            <div class="wpm_6310_team_style_18_title">William</div>
            <div class="wpm_6310_team_style_18_designation">Web Desginer</div>
            <div class="wpm-custom-fields-18">
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18">Fax</div>
                <div class="wpm-custom-fields-list-content-18">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-18">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-18">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_18_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_18">

          <div class="wpm_6310_team_style_18_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">

            <ul class="wpm_6310_team_style_18_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>

          <div class="wpm_6310_team_style_18_team_content">
            <div class="wpm_6310_team_style_18_title">William</div>
            <div class="wpm_6310_team_style_18_designation">Web Desginer</div>
            <div class="wpm-custom-fields-18">
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18">Fax</div>
                <div class="wpm-custom-fields-list-content-18">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-18">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-18">
                <div class="wpm-custom-fields-list-label-18"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-18">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_18_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>

        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 18
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-18">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 19 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_19">
          <div class="wpm_6310_team_style_19_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">

            <ul class="wpm_6310_team_style_19_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="wpm_6310_team_style_19_team_content">
            <div class="wpm_6310_team_style_19_title">William</div>
            <div class="wpm_6310_team_style_19_designation">Web Desginer</div>
            <div class="wpm-custom-fields-19">
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19">Fax</div>
                <div class="wpm-custom-fields-list-content-19">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-19">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-19">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_19_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_19">
          <div class="wpm_6310_team_style_19_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">

            <ul class="wpm_6310_team_style_19_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>

          <div class="wpm_6310_team_style_19_team_content">
            <div class="wpm_6310_team_style_19_title">William</div>
            <div class="wpm_6310_team_style_19_designation">Web Desginer</div>
            <div class="wpm-custom-fields-19">
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19">Fax</div>
                <div class="wpm-custom-fields-list-content-19">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-19">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-19">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_19_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_19">
          <div class="wpm_6310_team_style_19_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">

            <ul class="wpm_6310_team_style_19_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>

          <div class="wpm_6310_team_style_19_team_content">
            <div class="wpm_6310_team_style_19_title">William</div>
            <div class="wpm_6310_team_style_19_designation">Web Desginer</div>
            <div class="wpm-custom-fields-19">
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19">Fax</div>
                <div class="wpm-custom-fields-list-content-19">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-19">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-19">
                <div class="wpm-custom-fields-list-label-19"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-19">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_19_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>

        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 19
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-19">Create Team</button>
      <button type="button" class="wpm-6310-pro-only">Pro Only</button>
    </div>
    <br class="wpm-6310-clear" />
  </div>

  <!-- Template 20 -->

  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_20">
          <div class="wpm_6310_team_style_20_pic">
            <img src="<?php echo $arr[0] ?>" alt="Team Showcase">
            <div class="wpm_6310_team_style_20_img_overlay"></div>
            <ul class="wpm_6310_team_style_20_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>

          <div class="wpm_6310_team_style_20_team_content">
            <div class="wpm_6310_team_style_20_title">William</div>
            <div class="wpm_6310_team_style_20_designation">Web Desginer</div>
            <div class="wpm-custom-fields-20">
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20">Fax</div>
                <div class="wpm-custom-fields-list-content-20">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-20">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-20">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_20_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_20">
          <div class="wpm_6310_team_style_20_pic">
            <img src="<?php echo $arr[1] ?>" alt="Team Showcase">
            <div class="wpm_6310_team_style_20_img_overlay"></div>
            <ul class="wpm_6310_team_style_20_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>

          <div class="wpm_6310_team_style_20_team_content">
            <div class="wpm_6310_team_style_20_title">William</div>
            <div class="wpm_6310_team_style_20_designation">Web Desginer</div>
            <div class="wpm-custom-fields-20">
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20">Fax</div>
                <div class="wpm-custom-fields-list-content-20">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-20">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-20">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_20_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>

        </div>

      </div>
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_20">
          <div class="wpm_6310_team_style_20_pic">
            <img src="<?php echo $arr[2] ?>" alt="Team Showcase">
            <div class="wpm_6310_team_style_20_img_overlay"></div>
            <ul class="wpm_6310_team_style_20_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>

          <div class="wpm_6310_team_style_20_team_content">
            <div class="wpm_6310_team_style_20_title">William</div>
            <div class="wpm_6310_team_style_20_designation">Web Desginer</div>
            <div class="wpm-custom-fields-20">
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20">Fax</div>
                <div class="wpm-custom-fields-list-content-20">03424387263</div>
              </div>
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20"><i class="far fa-address-card"></i></div>
                <div class="wpm-custom-fields-list-content-20">Dhaka, Bangladesh</div>
              </div>
              <div class="wpm-custom-fields-list-20">
                <div class="wpm-custom-fields-list-label-20"><i class="fas fa-phone-square"></i></div>
                <div class="wpm-custom-fields-list-content-20">1588100157</div>
              </div>
            </div>
            <div class="wpm_6310_team_style_20_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
        </div>

      </div>
    </div>
    <div class="wpm-6310-template-list">
      Template 20
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-20">Create Team</button>
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