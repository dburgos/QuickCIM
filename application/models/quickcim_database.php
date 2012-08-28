<?php
class Quickcim_Database extends CI_Model {
	var $driver	= NULL;
    var $ip		= NULL;
    var $port	= NULL;
    var $user	= NULL;
    var $pwd	= NULL;
    var $dbname	= NULL;
    var $table	= NULL;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function connect()
    {
    	$config['hostname'] = $this->ip;
		$config['username'] = $this->user;
		$config['password'] = $this->pwd;
		$config['database'] = $this->dbname;
		$config['dbdriver'] = $this->driver;
		$config['dbprefix'] = "";
		$config['pconnect'] = FALSE;
		$config['db_debug'] = TRUE;
		$config['cache_on'] = FALSE;
		$config['cachedir'] = "";
		$config['char_set'] = "utf8";
		$config['dbcollat'] = "utf8_general_ci";
		$this->load->database($config);
		return true;
    }
    
    function get_tables()
    {
    	return $this->db->list_tables();
    }
    
    function get_columns()
    {
    	return $this->db->list_fields($this->table);
    }
   
}
/* End of file quickcim_database.php */
/* Location: ./application/models/quickcim_database.php */