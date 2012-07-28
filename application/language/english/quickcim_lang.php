<?php
// QuickCIM English traslation by David Burgos
// Head
$lang['quickcim_title']			= "QuickCIM";
$lang['quickcim_subtitle']		= "Models generation from database";
$lang['quickcim_description']	= "QuickCIM is a great free open source tool for CodeIgniter Models generation based on templates from database tables.<br/>The generated models extends of <a href='https://github.com/ccschmitz/codeIgniter-base-model' target='_blank' title='Go to its Github project'>MY_Model</a> by <a href='http://chris-schmitz.com' target='_blank' title='Go to his website'>Chris Schmitz</a>. Check <a href='http://davidburgosonline.com/desarrollo-web/2012/como-automatizar-modelos-codeigniter-my-model/' target='_blank' title='Go to davidburgosonline.com post'>this post</a>.";
$lang['quickcim_lang_es']		= "Español";
$lang['quickcim_lang_en']		= "English";
$lang['quickcim_title_es']		= "Versión en castellano de QuickCIM";
$lang['quickcim_title_en']		= "QuickCIM English version";
$lang['quickcim_author']		= "Created by";
// 1st column - Database connection
$lang['quickcim_db_title']		= "Database connection";
$lang['quickcim_db_driver']		= "Type";
$lang['quickcim_db_ip']			= "Host/IP";
$lang['quickcim_db_user']		= "User";
$lang['quickcim_db_pwd']		= "Password";
$lang['quickcim_db_name']		= "Database";
$lang['quickcim_db_button']		= "Connect";
$lang['quickcim_db_error']		= "Connection error. Check the fields!";
// 2nd column - Tables selection
$lang['quickcim_tables_title']	= "Select the tables";
$lang['quickcim_tables_sall']	= "Select all";
$lang['quickcim_tables_snone']	= "None";
$lang['quickcim_tables_suffix']	= "Add <em>_model</em> suffix";
$lang['quickcim_table_headname']	= "Table name";
$lang['quickcim_table_headclassname']	= "Model Classname";
$lang['quickcim_tables_none']	= "There are no tables in this database";
$lang['quickcim_tables_error']	= "Please, check at least one table";
$lang['quickcim_tables_classname_title']	= "Model Classname";
$here_mark = "<span class='classname-mark'>[HERE]</span>";
$lang['quickcim_tables_classname_content']	= "Used at:<li>application/models/".$here_mark.".php</li><li>'class ".$here_mark." extends CI_Model {'</li><li>&#36;this->load->model('".$here_mark."');</li><li>&#36;this->".$here_mark."->insert();</li>";

// 3rd column - Output
$lang['quickcim_output_title']	= "Get it";
$lang['quickcim_output_downloadbtn']	= "Download zip";

/* End of file quickcim_lang.php */
/* Location: ./system/application/language/english/quickcim_lang.php */