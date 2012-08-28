<?php 

class Quickcim extends CI_Controller {

	function __construct() 
	{
        parent::__construct();
        $this->load->library('session');
        $this->lang->load('quickcim', $this->session->userdata('lang'));
    }
    
	function index()
	{
		// Load QuickCIM Config for display
		$this->config->load('quickcim');
		$this->load->database();
		// Show the main page
		$this->load->view('quickcim/index');
	}
	
	// Database tables JSON list
	function connect()
	{
		// Loads: model
		$this->load->model("quickcim_database");
		// Setters
		// Keeping in session saves send by GET / POST again
		$this->session->set_userdata('db_driver', $this->input->post('driver'));
		$this->quickcim_database->driver 	= $this->input->post('driver');
		$this->session->set_userdata('db_ip', $this->input->post('ip'));
		$this->quickcim_database->ip 		= $this->input->post('ip');
		$this->session->set_userdata('db_port', $this->input->post('port'));
		$this->quickcim_database->port 		= $this->input->post('port');
		$this->session->set_userdata('db_user', $this->input->post('user'));
		$this->quickcim_database->user 		= $this->input->post('user');
		$this->session->set_userdata('db_pwd', $this->input->post('pwd'));
		$this->quickcim_database->pwd 		= $this->input->post('pwd');
		$this->session->set_userdata('db_name', $this->input->post('db'));
		$this->quickcim_database->dbname 	= $this->input->post('db');
		// Response initialization
		$json_response = array();
		// Connection try
		if ($this->quickcim_database->connect())
		{
			// Table list fetch
			$tables = $this->quickcim_database->get_tables();
			$i = 0;
			foreach ($tables as $table)
			{
				$json_response[$i]['table'] = $table;
				$i++;
			}
		}
		// JSON response
		exit(json_encode($json_response));
	}
	
	// Create the zip file with all CI models from tables selected
	function generate()
	{
		// Get tables selected
		$tables = json_decode($this->input->get_post('tables'));
		// Load model and library
		$this->config->load('quickcim');
		$this->load->model("quickcim_database");
		$this->load->library("quickcim/quickcim_lib");
		$this->load->library('zip');
		// Database setters from session
		$this->quickcim_database->driver 	= $this->session->userdata('db_driver');
		$this->quickcim_database->ip 		= $this->session->userdata('db_ip');
		$this->quickcim_database->port 		= $this->session->userdata('db_port');
		$this->quickcim_database->user 		= $this->session->userdata('db_user');
		$this->quickcim_database->pwd		= $this->session->userdata('db_pwd');
		$this->quickcim_database->dbname 	= $this->session->userdata('db_name');
		$this->quickcim_database->connect();
		// Proccess each table
		foreach ($tables as $table)
		{
			// Set the current table
			$this->quickcim_database->table = $table->tableName;
			// Set the classname
			$classname = ucfirst($table->className);
			// Set the filename for ZIP
			$filename = strtolower($classname).'.php';
			// Get the fields
			$columns = $this->quickcim_database->get_columns();
			// Get the CodeIgniter model file content
			$ci_model = $this->quickcim_lib->get_model(strtolower($table->tableName), $classname, $columns);
			// Include this model file into ZIP
			$this->zip->add_data($this->config->item('quickcim_output_path').$filename, $ci_model);
		}
		// Include the master model: MY_model.php by Chris Schmitz (See /quickcim-license.txt)
		$this->zip->add_data($this->config->item('quickcim_mymodel_path'), file_get_contents($this->config->item('quickcim_mymodel_path')));
		// Get the path
		$zip_path = $this->config->item('quickcim_zip_path');
		// Get the zip filename
		$zip_name = 'quickcim_'.$this->quickcim_database->dbname.'_'.date("Ymd").'.zip';
		// If a file with same name exists, delete in order to refresh it
		if (file_exists($zip_name)) { 
			unlink ($zip_name); 
		}
		// Save
		$this->zip->archive($zip_path . $zip_name);
		// Return the zip filename as JSON response
		exit(json_encode(array("filename" => $zip_name)));
	}
	
	// Download the file
	function download($filename)
	{
		// Load QuickCIM configuration
		$this->config->load('quickcim');
		// Obtain the root
<<<<<<< HEAD
		$zip_path = $this->config->item('base_url') . $this->config->item('quickcim_zip_path');
		// Get the file
		redirect($zip_path . $filename);
	}
}

/* End of file quickcim.php */
/* Location: ./application/controllers/quickcim.php */
=======
		$zip_path = $this->config->item('quickcim_zip_path');
		// Get the file
		redirect($zip_path . $filename);
	}
}

/* End of file quickcim.php */
/* Location: ./application/controllers/quickcim.php */
>>>>>>> branch 'master' of https://github.com/dburgos/QuickCIM.git
