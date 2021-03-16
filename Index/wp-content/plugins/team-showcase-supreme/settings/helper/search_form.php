<div id="tab-9">
  <div class="row">
    <div class="wpm-col-6">
      <table class="table table-responsive wpm_6310_admin_table" width="100%">
        <tr height="45">
          <td width="55%">
            <b>Activate Search</b> <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only.</div></span><br />
            <small style="color:#2196F3">(Available only in non-slider)</small>
          </td>
          <td>
            <label class="switch" for="wpm_search_activation">
              <input type="checkbox" name="search_activation" id="wpm_search_activation" value="1" <?php echo (isset($allSlider[86]) && $allSlider[86]) ? 'checked' : '' ?>>
              <span class="slider round"></span>
            </label>
          </td>
        </tr>
        <tr height="45" class="search_act_field">
          <td><b>Placeholder Text</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only.</div></span>
          </td>
          <td>
            <input type="text" name="search_placeholder" id="wpm_search_placeholder" class="wpm-form-input" value="<?php echo (isset($allSlider[87]) && $allSlider[87] !== '') ? $allSlider[87] : 'Search by Name or Designation' ?>">
          </td>
        </tr>
        <tr height="45" class="search_act_field">
          <td><b>Alignment</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only.</div></span>
          </td>
          <td>
            <select name="search_align" class="wpm-form-input" id="wpm_search_align">
              <option value="center" <?php if (isset($allSlider[88]) && $allSlider[88] == 'center') echo "selected" ?>>
                Center</option>
              <option value="flex-start" <?php if (isset($allSlider[88]) && $allSlider[88] == 'flex-start') echo "selected" ?>>Left
              </option>
              <option value="flex-end" <?php if (!isset($allSlider[88]) || (isset($allSlider[88]) && $allSlider[88] == 'flex-end')) echo "selected" ?>>Right
              </option>
            </select>
          </td>
        </tr>
        <tr height="45" class="search_act_field">
          <td><b>Font Color</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only.</div></span>
          </td>
          <td>
            <input type="text" name="search_font_color" id="wpm_search_font_color"
              class="wpm-form-input wpm_6310_color_picker" data-format="rgb"
              value="<?php echo (isset($allSlider[92]) && $allSlider[92] !== '') ? $allSlider[92] : 'rgb(0, 0, 0)' ?>">
          </td>
        </tr>
        <tr height="45" class="search_act_field">
          <td><b>Placeholder Font Color</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only.</div></span>
          </td>
          <td>
            <input type="text" name="search_placeholder_font_color" id="wpm_search_placeholder_font_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[94]) && $allSlider[94] !== '') ? $allSlider[94] : 'rgb(128, 128, 128)' ?>">
          </td>
        </tr>
      </table>
    </div>
    <div class="wpm-col-6" >
      <table class="table table-responsive wpm_6310_admin_table search_act_field">
        <tr height="45">
          <td width="55%"><b>Search Box Height</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only.</div></span>
          </td>
          <td>
            <input type="number" min="0" name="search_height" value="<?php echo (isset($allSlider[95]) && $allSlider[95] !== '') ? $allSlider[95] : 40 ?>" class="wpm-form-input" id="wpm_search_height" />
          </td>
        </tr>
        <tr height="45">
          <td width="55%"><b>Border Width</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only.</div></span>
          </td>
          <td>
            <input type="number" min="0" name="search_border_width" value="<?php echo (isset($allSlider[89]) && $allSlider[89] !== '') ? $allSlider[89] : 2 ?>" class="wpm-form-input" id="wpm_search_border_width" />
          </td>
        </tr>
        <tr height="45">
          <td><b>Border Color</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only.</div></span>
          </td>
          <td>
            <input type="text" name="search_border_color" id="wpm_search_border_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo (isset($allSlider[90]) && $allSlider[90] !== '') ? $allSlider[90] : 'rgba(0, 0, 0, 1)' ?>">
          </td>
        </tr>
        <tr height="45">
          <td><b>Border Radius</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only.</div></span>
          </td>
          <td>
            <input type="number" min="0" name="search_border_radius" value="<?php echo (isset($allSlider[91]) && $allSlider[91] !== '') ? $allSlider[91] : 50 ?>" class="wpm-form-input" id="wpm_search_border_radius" />
          </td>
        </tr>
        <tr height="45">
          <td width='55%'><b>Margin Bottom</b>
          <span class="wpm-6310-pro">(Pro) <div class='wpm-6310-pro-text'>This feature is available on the pro version only.</div></span>
          </td>
          <td>
            <input name="search_margin_bottom" id="wpm_search_margin_bottom" type="number" min="0"
              value="<?php echo (isset($allSlider[93]) && $allSlider[93] !== '') ? $allSlider[93] : 10;?>" class="wpm-form-input" />
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>

<script>
  jQuery(document).ready(function(){
    <?php
      if(!(isset($allSlider[86]) && $allSlider[86] != '') ){
        echo 'jQuery(".wpm-6310-search-container").hide();';
        echo 'jQuery(".search_act_field").hide();';
      }
    ?>
    jQuery('body').on('click', '#wpm_search_activation', function(){
      if (jQuery(this).prop('checked') == true) {
        jQuery('.wpm-6310-search-box').val('');
        jQuery(".wpm-6310-search-container").show();
        jQuery(".search_act_field").show();
      }
      else{
        jQuery(".wpm-6310-search-container").hide();
        jQuery(".search_act_field").hide();
      }
      var category = Number(jQuery('#category_activation').val());
      if(category == 1){
        jQuery('.wpm_6310_category_list_active').trigger('click');
      }
    });

    //Filter members 
    jQuery(".wpm-6310-search-box").on("keyup", function() {
      var value = jQuery(this).val().toLowerCase();     
      var ids = jQuery(this).data('wpm-6310-template-id'); 
      var category = Number(jQuery('#category_activation').val());
      let className = '';
      if(category == 1){
        className = jQuery('.wpm_6310_category_list_active').attr('wpm-data-filter');
      }
      else{
        className = "c-1588100157";
      }
      jQuery(`#wpm-6310-noslider-<?php echo $styleId ?> .${className} .wpm-6310-col-<?php echo $desktop_row; ?>`).filter(function() {
        var title = jQuery(this).find(`.wpm_6310_team_style_${ids}_title`).text().toLowerCase();
        var designation = jQuery(this).find(`.wpm_6310_team_style_${ids}_designation`).text().toLowerCase();
        let status = title.indexOf(value) > -1 || designation.indexOf(value) > -1;
        if(status){
          jQuery(this).show(300);
        }
        else{
          jQuery(this).hide(300);
        }
      });
    });

    // Search
    jQuery("body").on("keyup", '#wpm_search_placeholder', function () {
        var value = jQuery(this).val();
        jQuery('.wpm-6310-search-template-<?php echo $template_id ?> input').attr('placeholder', value);
    });
    jQuery("#wpm_search_align").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'> .wpm-6310-search-<?php echo $template_id ?> { justify-content: " + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_search_border_width").on("change", function () {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> input { border-width: " + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_search_border_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> input { border-color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> i.search-icon { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_search_border_radius").on("change", function () {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> input { border-radius: " + value + "; -moz-border-radius: " + value + "; -ms-border-radius: " + value + "; -o-border-radius: " + value + "; -webkit-border-radius: " + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_search_font_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> input { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_search_margin_bottom").on("change", function () {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> { margin-bottom:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_search_placeholder_font_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> input::placeholder { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_search_height").on("change", function () {
        var value = jQuery(this).val() + 'px';
        jQuery("<style type='text/css'>.wpm-6310-search-template-<?php echo $template_id ?> input { height: " + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
  });
</script>