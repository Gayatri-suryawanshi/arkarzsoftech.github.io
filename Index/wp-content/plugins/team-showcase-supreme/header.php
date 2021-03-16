<div class="wpm-6310-header">
  <ul class="wpm-6310-nav">
    <li>
      <a href="<?php echo admin_url("admin.php?page=wpm-team-showcase"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-team-showcase') echo "wpm-6310-active" ?>">All Teams</a>
    </li>
    <li class="has-dropdown">
      <a class="<?php if(isset($_GET['page']) && ($_GET['page'] == 'wpm-template-01-10' || $_GET['page'] == 'wpm-template-11-20' || $_GET['page'] == "wpm-template-21-30" || $_GET['page'] == "wpm-template-31-40")) echo "wpm-6310-active" ?>">All Templates</a>
      <ul class="dropdown-menu">
        <li>
          <a href="<?php echo admin_url("admin.php?page=wpm-template-01-10"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-template-01-10') echo "wpm-6310-active" ?>">Template 01-10</a>
        </li>
        <li>
          <a href="<?php echo admin_url("admin.php?page=wpm-template-11-20"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-template-11-20') echo "wpm-6310-active" ?>">Template 11-20</a>
        </li>
        <li>
          <a href="<?php echo admin_url("admin.php?page=wpm-template-21-30"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-template-21-30') echo "wpm-6310-active" ?>">Template 21-30</a>
        </li>
        <li>
          <a href="<?php echo admin_url("admin.php?page=wpm-template-31-40"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-template-31-40') echo "wpm-6310-active" ?>">Template 31-40</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=wpm-team-showcase-team-member"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-team-showcase-team-member') echo "wpm-6310-active" ?>">Add Memebers</a>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=wpm-team-showcase-category"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-team-showcase-category') echo "wpm-6310-active" ?>">Add Category</a>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=wpm-team-showcase-social-icon"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-team-showcase-social-icon') echo "wpm-6310-active" ?>">Add Social Icons</a>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=wpm-team-showcase-license"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-team-showcase-license') echo "wpm-6310-active" ?>">License</a>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=wpm-team-showcase-settings-use"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-team-showcase-settings-use') echo "wpm-6310-active" ?>">How to Use</a>
    </li>
    <li>
      <a href="https://www.wpmart.org/downloads/team-showcase-supreme-pro/" target="_blank" class="wpm-6310-pro">Upgrade To Pro<i class="fas fa-star"></i></a>
    </li>
  </ul>
  <h3>
    <span class="dashicons dashicons-flag"></span>
    Notifications
  </h3>
  <p>Thank you for using Team Showcase with Slider. I Just wanted to see if you have any questions or concerns about my plugins. If you do, Please do not hesitate to <a href="https://wordpress.org/support/plugin/team-showcase-supreme/" target="_blank">file a bug report</a></p>
  <p>By the way, did you know we also have a <a href="http://www.wpmart.org/downloads/team-showcase-supreme-pro/" target="_blank">Premium Version</a>? It offers 30+ templates with exclusive CSS3 effects. It also comes with 16/7 personal support.</p>

  <p style="color: green">If the grid is broken in output, then go "WPM Team" -> "Setting" menu. Then select the "Yes" option from "Fix grid broken in output" and check now in output. It will be fixed your grid broken issue.</p>
  <p>Thank you Again!</p>
   <?php
  wpm_version_status();
  wpm_check_field_exists();

  //  wpm_6310_delete_member_from_category_info(5);

  // wpm_6310_update_all_category_member_info(7, [3, 4]);
  ?>
</div>
