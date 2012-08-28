<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quickcim_lib {
	
	// (String) Get template file content
	public function get_template($name)
	{
		// CodeIgniter instance
		$CI =& get_instance();
		// Load File Helper for next step
		$CI->load->helper('file');
		// Return the file content
		return read_file($CI->config->item('quickcim_templates_path').$name.$CI->config->item('quickcim_templates_filext'));
	}
	
	// (String) Generate CodeIgniter model file content
	public function get_model($tablename, $classname, $columns)
	{
		// CodeIgniter instance
		$CI =& get_instance();
		// Class attributes generation
		$variables = "";
		// Get number of fields
		$total_columns = sizeof($columns);
		// Fields parser
		for ($i=0; $i < $total_columns; $i++)
		{
			// Paste field name and separator if proceed
			$variables .= str_replace(	array(	$CI->config->item('quickcim_fieldname_tag'),
												$CI->config->item('quickcim_fieldname_separator_tag')),
									 	array(	$columns[$i],
									 			($i+1 < $total_columns) ? $CI->config->item('quickcim_fieldclass_separator') : ""),
									 	$CI->config->item('quickcim_fieldclass_sentence'));
		}
		// Model variables parser
		return str_replace(	array(	$CI->config->item('quickcim_classname_tag'),
									$CI->config->item('quickcim_tablename_tag'),
									$CI->config->item('quickcim_fields_tag'),
									$CI->config->item('quickcim_filename_tag')),
							array(	$classname,
									$tablename, 
									$variables, 
									$tablename.'.php'), 
							$this->get_template('model'));
	}
}

/* End of file quickcim_lib.php */
/* Location: ./application/libraries/quickcim/quickcim_lib.php */