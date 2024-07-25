<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExcelController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load Model
        $this->load->model('User_model', 'user');
        $this->ip_address = $_SERVER['REMOTE_ADDR'];
        $this->datetime = date("Y-m-d H:i:s");
    }

    public function index(){

    }

}