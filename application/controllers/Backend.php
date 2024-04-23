<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
    
    
    
    public function index(){
        $this->load->view('spa');
    }
    
    
    public function get_products() {
       
      $products = $this->db->select('*')
        ->get('products')->result_array();

        echo json_encode($products);

    }

    public function get_products_2() {
       
        $products = $this->db->select('*')
          ->get('products')->result_array();
  
          echo json_encode($products);
  
    }

    public function get_product($id){

        $product = $this->db->select('*')
        ->where('id', $id)
        ->get('products')->row_array();

        echo json_encode($product);

    }

    public function update_product(){
        $post = $this->input->post();

        //debug($post);

        $update_array['product_name_tr'] = $post['name'];
        $update_array['description_tr'] = $post['description'];
        $update_array['price'] = $post['price'];
        $where = ['id' => $post['id']];

        $this->db->update('products', $update_array, $where);

        if($this->db->affected_rows() > 0){
            echo "success";
        }else{
            echo "error";
        }

    }


}