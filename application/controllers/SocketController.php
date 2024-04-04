<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SocketController extends CI_Controller {
    
	public function message_page(){
        $this->load->view('message_form');
    }
    
    public function new_message(){
        
        require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

        
       
        $options = array(
            'cluster' => 'eu',
            'useTLS' => true
        );
        
        $pusher = new Pusher\Pusher(
            'be75c9caa070aab0ee45',
            '2bc796ee3d5ec2f5e5d3',
            '1782661',
            $options
        );

        //-----------------------------------------------------


        $post = $this->input->post();

        $data['message'] = $post['sender'].' : '.$post['message'];


        $pusher->trigger('my-channel', 'my-event', $data);
    }
    
    
    
    public function index()
	{	
       
        $this->load->view('messages');

    }

}