<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public $data = array();

	public function __construct()
    {
        parent::__construct();

	}
    
	public function index()
	{	

        $url = 'https://api.binance.com/api/v3/klines?symbol=BTCUSDT&interval=1m&limit=20';
        //GET, POST, PUT, DELETE

        // Create a new cURL resource with GET method
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $data['btcPrices'] = json_decode($response);

        //debug($data['response']);

		$this->load->view('home', $data);
	}
	
}
