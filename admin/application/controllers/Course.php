<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        if(empty($_SESSION['lang'])){
            $_SESSION['lang'] = 'tr';
        }
        if(empty($_SESSION['lang_array'])){
            $_SESSION['lang_array'] = array('tr', 'en');
        }
        if(empty($_SESSION['admin_logged_in'])){
            redirect(LOGIN);
        }
    }
    
	public function course_list()
	{
	    
	    $data['page'] = $_GET['page'] ?? 1;
	    
		$count = $this->db->count_all_results('course_request_table');
		
		$plus = (($count % 20)>0) ? 1 : 0;
		
		$data['total'] = (($count - ($count % 20) ) / 20)+$plus;
		
		$data['requests'] = $this->db->select('*, course_request_table.id as request_id, course_request_table.created_at as date')
            ->join('products_table', 'course_request_table.product_id = products_table.id', 'left')
            ->order_by('course_request_table.id', 'DESC')
		    ->limit(20, (($data['page']-1)*20))
			->get('course_request_table')->result_array();
			
		$data['menu'] = '7';

        //debug($data);
			
		$this->load->view('course/course_list_view', $data);
	}
	
	public function course_detail($id)
	{
        $data['menu'] = '7';
		$data['course'] = $this->db->select('*, course_request_table.id as request_id, course_request_table.created_at as date')
            ->join('products_table', 'course_request_table.product_id = products_table.id', 'left')
			->where('course_request_table.id', $id)
			->get('course_request_table')->row_array();
		
		//debug($data);
		
		$this->load->view('course/update_course_view', $data);
		
	}
	
	public function update_course_post()
	{
        //FOR TESTING
	   $post = $this->input->post();

       //debug($post);

       $upd = array('call_details' => $post['call_details']);
       $where = array('id' => $post['id']);
       $this->db->update('course_request_table', $upd, $where);

       if($this->db->affected_rows() > 0){
        redirect(COURSE_LIST);
       }

       die("Kayıt sırasında hata oluştu!");
		
	}
	
	public function hide_course()
	{
		$post = $this->input->post();
	    $id = $post['id'];
		//todo delete script
		
		$hidden = ($post['hidden'] == '0') ? 1 : 0;
		
		if($id != ''){
		    $this->db->update('course_request_table', array('is_hidden' => $hidden), array('id' => $id));
		}
		if($this->db->affected_rows() > 0){
			echo 'ok';
		}else{
		    echo 'error';
		}
		
	}
	
	public function delete_course()
	{
		$post = $this->input->post();
	    $id = $post['id'];
		//todo delete script
		if($id != ''){
		    $this->db->update('course_request_table', array('is_deleted' => 1), array('id' => $id));
		}
		if($this->db->affected_rows() > 0){
			echo 'ok';
			//$this->session->set_flashdata('process', 'success');
		}else{
		    echo 'error';
			//$this->session->set_flashdata('process', 'fail');
		}
		
	}
	
}
