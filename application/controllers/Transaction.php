<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {
    
    public function index() {

        try {
            //code...
            // Begin transaction
            $this->db->trans_begin();
                    
            // Perform database operations within the transaction
            $data1 = array(
                'category_name' => 'category_name 3',
                'parent_id' => 1
            );
            $this->db->insert('categories', $data1);

            $data2 = array(
                'category_name' => 'category_name 2',
                'parent_id' => 2
            );

            $this->db->insert('categories', $data2);
            $this->db->trans_commit();
            echo "Transaction successful!";

        } catch (\Throwable $error) {
            //throw $th;
            echo "Error : ";
            $this->db->trans_rollback();
            print_r($error->getMessage());
            
        }

    }

}