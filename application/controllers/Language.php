<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {
    
	public function change_language($lang)
	{	
        $_SESSION['language'] = $lang;

        redirect($_SERVER['HTTP_REFERER']);
    }

}