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
    if ($_POST['style'] == 'template-31') {
      $css = "3||4|1|rgba(221, 221, 221, 1)||nai|rgba(255, 255, 255, 1)|0|0|rgba(0, 0, 0, 0.4)|14|rgb(0, 0, 0)|rgb(0, 0, 0)||600|capitalize|Open+Sans|18|13|rgb(119, 119, 119)|400|capitalize|Open+Sans|16|rgb(119, 119, 119)|35|35|1||0|1|rgba(255, 255, 255, 1)|rgba(23, 23, 23, 0.8)|rgb(255, 255, 255)|18|Open Sans|1";
      $slider = "0||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|10|10|rgba(0, 0, 0, 0.94)|rgba(190, 190, 190, 1)|50|3||||0|Amaranth|14|20|10|15|center|rgb(119, 119, 119)|rgb(80, 80, 80)|rgb(119, 119, 119)|rgb(80, 80, 80)|100|100|none|none||||||0|0|||||||||0|0|||||||||10|0|4||||||||0|12|14|18|rgb(0, 0, 0)|rgb(0, 0, 0)|Open+Sans|400|none|center|0|15|100|none|none||Search by Name or Designation|flex-end|1|rgba(0, 0, 0, 1)|50|rgb(0, 0, 0)|10|rgb(128, 128, 128)|40||||||0|14|rgb(255, 255, 255)|rgb(255, 255, 255)|1|rgba(0, 0, 0, 0.8)|rgba(0, 179, 149, 0.8)|rgba(0, 94, 78, 0.8)|rgb(255, 255, 255)|rgba(54, 54, 54, 0.8)|100|Amaranth|30|30|5|20|left|3||||||||center|15";
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
      $url = admin_url("admin.php?page=wpm-template-31-40&styleid=$redirect_id");
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
  <!-- Temaplate 31 -->
  <?php shuffle($arr); ?>
  <div class="wpm-6310-row wpm-6310_team-style-boxed">
    <div class="wpm-padding-15">
      <div class="wpm-6310-col-3">
        <div class="wpm_6310_team_style_31_preview">
          <div class="wpm_6310_team_style_31_preview_pic">
            <div class="wpm_6310_team_style_31_preview_pic_container">
              <img src="<?php echo $arr[0] ?>" class="wpm-image-responsive" alt="Team Showcase">
            </div>
            <div class="wpm_6310_team_style_31_preview_pic_overlay">
              <div class="wpm_6310_team_style_31_preview_pic_overlay_button">
                View More...
              </div>
            </div>
          </div>
          <figcaption>
            <div class="wpm_6310_team_style_31_preview_caption">
              <div class="wpm_6310_team_style_31_preview_designation">Web Developer</div>
              <div class="wpm_6310_team_style_31_preview_title">Adam Smith</div>
              <div class="wpm-custom-fields-31-preview">
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview">Fax</div>
                  <div class="wpm-custom-fields-list-content-31-preview">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-31-preview">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-31-preview">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_31_preview_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_31_preview_social">
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
        <div class="wpm_6310_team_style_31_preview">
          <div class="wpm_6310_team_style_31_preview_pic">
            <div class="wpm_6310_team_style_31_preview_pic_container">
              <img src="<?php echo $arr[1] ?>" class="wpm-image-responsive" alt="Team Showcase">
            </div>
            <div class="wpm_6310_team_style_31_preview_pic_overlay">
              <div class="wpm_6310_team_style_31_preview_pic_overlay_button">
                View More...
              </div>
            </div>
          </div>
          <figcaption>
            <div class="wpm_6310_team_style_31_preview_caption">
              <div class="wpm_6310_team_style_31_preview_designation">Web Developer</div>
              <div class="wpm_6310_team_style_31_preview_title">Adam Smith</div>
              <div class="wpm-custom-fields-31-preview">
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview">Fax</div>
                  <div class="wpm-custom-fields-list-content-31-preview">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-31-preview">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-31-preview">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_31_preview_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_31_preview_social">
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
        <div class="wpm_6310_team_style_31_preview">
          <div class="wpm_6310_team_style_31_preview_pic">
            <div class="wpm_6310_team_style_31_preview_pic_container">
              <img src="<?php echo $arr[2] ?>" class="wpm-image-responsive" alt="Team Showcase">
            </div>
            <div class="wpm_6310_team_style_31_preview_pic_overlay">
              <div class="wpm_6310_team_style_31_preview_pic_overlay_button">
                View More...
              </div>
            </div>
          </div>
          <figcaption>
            <div class="wpm_6310_team_style_31_preview_caption">
              <div class="wpm_6310_team_style_31_preview_designation">Web Developer</div>
              <div class="wpm_6310_team_style_31_preview_title">Adam Smith</div>
              <div class="wpm-custom-fields-31-preview">
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview">Fax</div>
                  <div class="wpm-custom-fields-list-content-31-preview">03424387263</div>
                </div>
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview"><i class="far fa-address-card"></i></div>
                  <div class="wpm-custom-fields-list-content-31-preview">Dhaka, Bangladesh</div>
                </div>
                <div class="wpm-custom-fields-list-31-preview">
                  <div class="wpm-custom-fields-list-label-31-preview"><i class="fas fa-phone-square"></i></div>
                  <div class="wpm-custom-fields-list-content-31-preview">1588100157</div>
                </div>
              </div>
              <div class="wpm_6310_team_style_31_preview_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <ul class="wpm_6310_team_style_31_preview_social">
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
      Template 31 <small>(Single Effect)</small>
      <button type="button" class="wpm-btn-success wpm_choosen_style" id="template-31">Create Team</button>
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