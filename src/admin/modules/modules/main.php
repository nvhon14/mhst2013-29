<?php

/**
 * @Project NUKEVIET 3.4
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2010 - 2012 VINADES.,JSC. All rights reserved
 * @Createdate Thu, 25 Oct 2012 00:00:00 GMT
 */

if(!defined('NV_IS_FILE_MODULES'))die('Stop!!!');if(sizeof($site_mods)<2){Header("Location: ".NV_BASE_ADMINURL."index.php?".NV_NAME_VARIABLE."=".$module_name."&".NV_OP_VARIABLE."=setup");exit();}$page_title=$lang_module['main'];$contents['div_id']="list_mods";$contents['ajax']="nv_show_list_mods();";$contents=call_user_func("main_theme",$contents);include(NV_ROOTDIR."/includes/header.php");echo nv_admin_theme($contents);include(NV_ROOTDIR."/includes/footer.php");

?>