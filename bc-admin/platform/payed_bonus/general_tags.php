<?php
/****** set language with INI file in LANG Directory (NO CHANGE IT PLEASE!!!)*******/
if(file_exists(dirname(__FILE__).'/lang/'.languageAdmin.'/'.languageAdmin.'.ini')){
 $parser_language = parse_ini_file(dirname(__FILE__).'/lang/'.languageAdmin.'/'.languageAdmin.'.ini',true);
 $lang_ = array_merge($lang_,$parser_language);
}
$page_title = $lang_['payed_bonus']['FLEX_MAIN_MENU_TITLE'];/*--> Page Title of this platform part */
$icon_menu = 'icon-users';/*--> Icon used for menu and table title */
$table_name = $table_prefix."clients"; /*--> the database table where you want work */
$order_by = "name"; /*--> sort data by this value (sure that this record exist in table) */
$sort_order = "asc"; /*--> sort order data by this value (asc/desc) */
$menu_title = $lang_['payed_bonus']['FLEX_MAIN_MENU_TITLE']; /*--> Menu title for this section */
$breadcrumb = '<ul class="breadcrumb">
				<li>
				  <a href="'.abs_admin_path.'/index.php"><i class="icon icon-black icon-home"></i> Acceuil</a> 
				  <span class="divider">/</span>
				</li>
				<li class="active">
				  <i class="icon icon-gray '.$icon_menu.'"></i> '.$lang_['payed_bonus']['FLEX_MAIN_MENU_TITLE'].'
				</li>
               </ul>';
?>