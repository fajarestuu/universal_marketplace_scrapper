<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $data = array()

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    protected function render($the_view = NULL, $template = 'template'){
        if(is_null($template))
        {
            $this->load->view($the_view, $this->data);
        }
        else
        {
            $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view,$this->data, TRUE);;
            $this->load->view('templates/'.$template, $this->data);
        }
    }
}

class Public_Controller extends MY_Controller
{
    
    public function __construct()
    {
        parent::__construct();
    }

    protected function render($the_view = NULL, $template = 'admin_master')
    {
        parent::render($the_view, $template);
    }
    
}


/* End of file MY_Controller.php */
