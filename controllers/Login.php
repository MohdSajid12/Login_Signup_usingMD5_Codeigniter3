<?php

class Login extends CI_Controller{

    public function index()
    {
        $this->load->view('Loginn');
    }



    public function checkUser()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        
        if ($this->form_validation->run() == FALSE){
             $this->index();
        }
        else{
            $data['email']=  $this->input->post('email',true);
            $data['password']=   $this->input->post('password',true);
            $data['password']  = hash('md5' ,$data['password']);

            $myvar =  $this->ModRegister->checkUser($data);
            if( !empty($myvar) AND  count($myvar)===1 )
            {
                 redirect('crud');
            }
            else
            {
                $this->session->set_flashdata('message', 'Please check your email and password');
                redirect('login');
            }

        }
    }

}

?>


