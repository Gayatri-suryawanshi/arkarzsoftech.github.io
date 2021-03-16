<?php
if (!empty($_POST['rearrange-list-save']) && $_POST['rearrange-list-save'] == 'Save' && $_POST['rearrange_id'] != ''&& $_POST['rearrange_list'] != '') {
    $memberId = $_POST['rearrange_list'] . "||##||" . $_POST['order_type'] . "||##||" . $_POST['rearrange_list_all'];
    $wpdb->query($wpdb->prepare("UPDATE $style_table SET memberid = %s WHERE id = %d", $memberId, $_POST['rearrange_id']));
}

if (!empty($_POST['team-member-save']) && $_POST['team-member-save'] == 'Save' && $_POST['styleid'] != '') {
         $nonce = $_REQUEST['_wpnonce'];
         $member_table = $wpdb->prefix . 'wpm_6310_member';
         $category_table = $wpdb->prefix . 'wpm_6310_category';
         
         if (!wp_verify_nonce($nonce, 'wpm-6310-nonce-add-member')) {
            die('You do not have sufficient permissions to access this page.');
         } else {
            $id = sanitize_text_field($_POST['styleid']);
            $memberids = isset($_POST['memid']) ? $_POST['memid'] : '';
            $memIds = "";
            if($memberids){
               foreach ($memberids as $memberid){
                  if($memIds){
                     $memIds .= ",";
                  }
                  $memIds .= $memberid;
               }
            }
            
            $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $id), ARRAY_A);
            $memList = explode("||##||", $styledata['memberid']);
            $mainStr = '';
            if($memberids){
                $mainStr = $memList[2];
                $allMembers = $wpdb->get_results('SELECT * FROM ' . $member_table . ' ORDER BY id ASC', ARRAY_A);	
                $allCategory = $wpdb->get_results('SELECT * FROM ' . $category_table . ' where c_name!="c-1588100157" ORDER BY serial ASC', ARRAY_A);
                if($allCategory){
                    foreach ($allCategory as $cat) {
                        if (strpos($mainStr, $cat['c_name']) !== false) {
                            continue;
                        }
                        else{
                            $mainStr .= "##||##{$cat['c_name']}##@@##";
                            echo "{$cat['c_name']}";
                        }
                    }
                }
                $filters = explode('##||##', $mainStr);

                foreach($allMembers as $mem){
                    if(in_array($mem['id'], $memberids)){ //Need to add
                        $tempStr = '';
                        if(!$filters){
                            continue;
                        }
                        foreach ($filters as $filter){
                            $temp = explode('##@@##', $filter);  
                            if(isset($temp[1])){
                                $selMember = $wpdb->get_row("SELECT * FROM $member_table WHERE id='".$mem['id']."' and category like '%".$temp[0]."%'");
                                if($selMember){ 
                                    $tempPos = ",{$temp[1]},";
                                    if (strpos($tempPos, ",{$mem['id']},") !== false) {
                                        if($tempStr != ''){
                                            $tempStr .= '##||##';
                                        }
                                        $tempStr .= $temp[0] . '##@@##' . "{$temp[1]}";
                                    }
                                    else{
                                        if($tempStr != ''){
                                            $tempStr .= '##||##';
                                        }
                                        $tempStr .= $temp[0] . '##@@##' . "{$temp[1]},{$mem['id']}";
                                    }
                                }
                                else{
                                    if($tempStr != ''){
                                        $tempStr .= '##||##';
                                    }
                                    $tempStr .= $temp[0] . '##@@##' . "{$temp[1]}";
                                }
                            }
                        }
                        if($tempStr){
                           $mainStr = $tempStr;
                        }
                    }
                    else{ //Need to remove
                        $mainStr =  str_replace('##||##', ',##||##', $mainStr);
                        $mainStr =  str_replace('##@@##', '##@@##,', $mainStr);
                        $mainStr .= ",";
                        if (strpos($mainStr, ",{$mem['id']},") !== false) {
                                $mainStr = str_replace(",{$mem['id']},", ',', $mainStr);
                        }
                        $mainStr =  str_replace(',##||##', '##||##', $mainStr);
                        $mainStr =  str_replace(',##||##', '##||##', $mainStr);
                        $mainStr =  str_replace(',##||##', '##||##', $mainStr);
                        $mainStr =  str_replace('##@@##,', '##@@##', $mainStr);
                        $mainStr =  str_replace('##@@##,', '##@@##', $mainStr);
                        $mainStr =  str_replace('##@@##,', '##@@##', $mainStr);
                        while(substr($mainStr, -1) == ','){
                            $mainStr = substr($mainStr, 0, strlen($mainStr) - 1);
                        }
                    }
                }
            }
            $newStr = $memIds . '||##||' . (isset($memList[1]) ? $memList[1] : 0) . '||##||' . $mainStr;
            $wpdb->query($wpdb->prepare("UPDATE $style_table SET memberid = %s WHERE id = %d", $newStr, $id));
         }
}

if (!empty($_POST['item_per_row_sub']) && $_POST['item_per_row_sub'] == 'Update') {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'wpm_nonce_field_form')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
        $item_per_row_data = sanitize_text_field($_POST['item_per_row_data_desktop']) . "@@##@@" . sanitize_text_field($_POST['item_per_row_data_tablet']) . "@@##@@" . sanitize_text_field($_POST['item_per_row_data_mobile']);

        $styleid = sanitize_text_field($_POST['id']);        
        $css = explode("|", $styledata['css']);
        array_shift($css);
        $css = $item_per_row_data . "|" . implode("|", $css);
        $wpdb->update("$style_table", array(
            "css" => $css
                ), array('id' => $styleid), array('%s'), array('%d')
        );

    }
}
?>

