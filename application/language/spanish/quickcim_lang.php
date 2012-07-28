<?php
// QuickCIM Spanish traslation by David Burgos
// Head
$lang['quickcim_title']			= "QuickCIM";
$lang['quickcim_subtitle']		= "Generación automática de Modelos de CodeIgniter a partir de base de datos";
$lang['quickcim_description']	= "QuickCIM es una herramienta sencilla de código abierto que genera modelos de CodeIgniter a partir de tablas de base de datos.<br/>Los modelos generados extienden de <a href='https://github.com/ccschmitz/codeIgniter-base-model' target='_blank' title='Ir al proyecto en Github'>MY_Model</a> de <a href='http://chris-schmitz.com' target='_blank' title='Ir a su web'>Chris Schmitz</a> Revisa <a href='http://davidburgosonline.com/desarrollo-web/2012/como-automatizar-modelos-codeigniter-my-model/' target='_blank' title='Ir al post de davidburgosonline.com'>este post</a>.";
$lang['quickcim_lang_es']		= "Español";
$lang['quickcim_lang_en']		= "English";
$lang['quickcim_title_es']		= "Versión en castellano de QuickCIM";
$lang['quickcim_title_en']		= "QuickCIM English version";
$lang['quickcim_author']		= "Creado por";
// 1st column - Database connection
$lang['quickcim_db_title']		= "Conexión";
$lang['quickcim_db_driver']		= "Tipo";
$lang['quickcim_db_ip']			= "Servidor/IP";
$lang['quickcim_db_user']		= "Usuario";
$lang['quickcim_db_pwd']		= "Clave";
$lang['quickcim_db_name']		= "Base de datos";
$lang['quickcim_db_button']		= "Conectar";
$lang['quickcim_db_error']		= "Error al conectar. Por favor, revisa los datos";
// 2nd column - Tables selection
$lang['quickcim_tables_title']	= "Selección de tablas";
$lang['quickcim_tables_sall']	= "Todas";
$lang['quickcim_tables_snone']	= "Ninguna";
$lang['quickcim_tables_suffix']	= "Añadir sufijo <em>_model</em>";
$lang['quickcim_table_headname']	= "Tabla";
$lang['quickcim_table_headclassname']	= "Clase del Modelo";
$lang['quickcim_tables_none']	= "No hay tablas en la base de datos seleccionada";
$lang['quickcim_tables_error']	= "Por favor, selecciona al menos una tabla";
$lang['quickcim_tables_classname_title']	= "Nombre de la clase del Modelo";
$here_mark = "<span class='classname-mark'>[AQUI]</span>";
$lang['quickcim_tables_classname_content']	= "Usado en:<li>application/models/".$here_mark.".php</li><li>'class ".$here_mark." extends CI_Model {'</li><li>&#36;this->load->model('".$here_mark."');</li><li>&#36;this->".$here_mark."->insert();</li>";

// 3rd column - Output
$lang['quickcim_output_title']	= "Ya lo tienes";
$lang['quickcim_output_downloadbtn']	= "Descargar zip";

/* End of file quickcim_lang.php */
/* Location: ./system/application/language/spanish/quickcim_lang.php */