<?php
  
   class Registration extends CI_Controller {
   
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      } 
	
      public function index() {
			
         /* Load form validation library */ 
         $this->load->library('form_validation');
			
	 /* Validation rule */
	 $this->form_validation->set_rules('name', 'Name', 'required');
	 $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_customer');
	 $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
	 $this->form_validation->set_rules('contact_no', 'Contact Number', 'required');		 
			
         if ($this->form_validation->run() == FALSE) { 
            $this->load->view('reg_form'); 
         } 
         else { 
                    $this->load->model('reg_model');
		    $this->reg_model->saveCustomer();
		    $success = "Your account has been successfully created!";
                    $this->load->view('reg_form', compact('success')); 
         } 
      }
	  public function check_customer($email)
	   {
	         $query = $this->db->where('email', $email)->get("tbl_customers");
		 if ($query->num_rows() > 0)
		    {
			 $this->form_validation->set_message('check_customer','The '.$email.' belongs to an existing account');
		        return FALSE;
		    }
		  else 
			  return TRUE;
	  }	
   }
?>