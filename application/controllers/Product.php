<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    
    public $data = array();
    
	public function index()
	{	

        if(!empty($_GET)){
            $page = $_GET['p'];
        }else{
            $page = 1;
        }

        $limit = 10;
        $start = ($page-1)*($limit);

        $data['total'] = $this->db->select('id')
            ->get('products')->result_array();
        
        
        $data['products'] = $this->db->select('*')
            ->order_by('id', 'asc')
            ->limit($limit, $start)
            ->get('products')->result_array();

        $total_row = count($data['total']);
        if($total_row%$limit == 0){
            $data['total_page'] = $total_row / $limit;
        }else{
            $data['total_page'] = floor(($total_row / $limit) + 1);
        }
        
		$this->load->view('product_list.php', $data);


	}

    
    
    
    
    
    
    
    
    
    
    public function add_data(){

        for($i=1; $i<=133; $i++){
            $insert[$i]['product_name'] = uniqid();  
            $insert[$i]['product_volume'] = 5*$i;  
            $this->db->insert('products', $insert[$i]);
        }

        echo "Done";

    }
	
}
