<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cache extends CI_Controller {
    
    public function index() {
       
       if(!empty($_SESSION['categories']) && ( $_SESSION['cached_expire_time'] > time() )){
            $data['categories'] = $_SESSION['categories'];
            $data['is_cached'] = 1;
       }else{
            $data['categories'] = $this->db->get('categories')->result_array();
            $_SESSION['categories'] = $data['categories'];
            $_SESSION['cached_time'] = time();
            $_SESSION['cached_expire_time'] = time()+600;
            $data['is_cached'] = 0;
       }

       $this->load->view('cache_view', $data);

    }
}
?>