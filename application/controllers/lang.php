<?php

class Lang extends CI_Controller {

	function __construct() {
        parent::__construct();
    }
	
	function index()
	{
		$this->_redirect();
	}
	
	function es()
	{
		$this->_set_lang('spanish');
	}
	
	function en()
	{
		$this->_set_lang('english');
	}
	
	function _set_lang($lang)
	{
		// Save
		$this->load->library('session');
		$this->session->set_userdata('lang', $lang);
		// and go on
		$this->_redirect();
	}
	
	function _redirect()
	{
		// Show the referrer if came from a link (refresh) or root path
		$this->load->helper('url');
		$http_referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
		redirect($http_referer, 'refresh');
	}
}

/* End of file lang.php */
/* Location: ./system/application/controllers/lang.php */