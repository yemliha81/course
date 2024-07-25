<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    
    public $data = array();

	public function __construct()
    {
        parent::__construct();

	}
    
    //List categories
	public function index()
	{	
        $data['title'] = 'Kategoriler';
        $data['categories'] = $this->db->select('*')
            ->where('status >=', 0)
            ->get('categories')->result_array();

        $this->load->view('includes/header', $data);
        $this->load->view('category/index', $data);
        $this->load->view('includes/footer', $data);
	}

    //Create categories
	public function create()
	{
        $data['title'] = 'Kategori Ekle';
        $this->load->view('includes/header', $data);
        $this->load->view('category/create');
        $this->load->view('includes/footer', $data);
	}

    //Create categories post
	public function create_post()
	{	

        try {

            $post = $this->input->post();

            $ins_array['title'] = $post['title'];

            if(!empty($post['title'])){
                $this->db->insert('categories', $ins_array);
            }

            if($this->db->affected_rows() > 0){
                //redirect to categories
                redirect(CATEGORY_LIST);
            }

        } catch (\Throwable $th) {
            //throw $th;
            echo $th->getMessage();
            die();
        }


	}

    //Update categories
	public function update($id)
	{	
        $data['category'] = $this->db->select('*')
            ->where('id', $id)
            ->get('categories')->row_array();
        
            $this->load->view('category/update', $data);
	}

    //Update categories post
	public function update_post()
	{	

        try {
            if( isset($_POST['id']) && isset($_POST['title']) ){

                $post = $this->input->post();

                $update_array['title'] = $post['title'];
                //$update_array['updated_at'] = date('Y-m-d H:i:s');

                $where['id'] = $post['id'];

                $this->db->update('categories', $update_array, $where);

                if($this->db->affected_rows() > 0){
                    redirect(CATEGORY_LIST);
                }else{
                    die('Hata oluştu');
                }

            }
        } catch (\Throwable $th) {
            //die('hata');
            echo $th->getMessage();
            die();
        }

        
	}

    //Delete categories
	public function delete($id)
	{	
        try {
            
                $update_array['status'] = -1;
                $where['id'] = $id;

                $this->db->update('categories', $update_array, $where);

                if($this->db->affected_rows() > 0){
                    redirect(CATEGORY_LIST);
                }else{
                    die('Hata oluştu');
                }

            
        } catch (\Throwable $th) {
            //die('hata');
            echo $th->getMessage();
            die();
        }
	}
	
}
