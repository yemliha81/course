<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public $data = array();

	public function __construct()
    {
        parent::__construct();

		//echo 'Hello from constructer <br>';
		if(empty($_SESSION['language'])){
			$_SESSION['language'] = 'tr';
		}

	}
    
	public function index()
	{	
		$this->lang->load('index', $_SESSION['language']);

		//debug($this->lang);

		$data['language'] = $this->lang->language;

		//$data['home'] = $this->lang->line('home');
		//$data['about_us'] = $this->lang->line('about_us');
		//$data['contact'] = $this->lang->line('contact');

		$data['products'] = $this->db->select('*')
			->get('products')->result_array();
		
		//debug($data);

		$this->load->view('home', $data);
	}

	public function test(){
		echo 'test';
	}
	
}
