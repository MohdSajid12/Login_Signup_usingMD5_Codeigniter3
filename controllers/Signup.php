<?php 

 class Signup extends CI_Controller{

     public function index()
     {
        $this->load->view('Register');

     }
      

     public function user()
     {
        $this->load->library('form_validation');

        $this->form_validation->set_message('conpassword','password not matched');
        $this->form_validation->set_message('is_unique','this email already registered');
        $this->form_validation->set_rules('fullName', 'Fullname', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('conpassword', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            $data['fullName'] = $this->input->post('fullName',true);
            $data['email'] = $this->input->post('email',true);
            $data['password'] =  $this->input->post('password',true);
            $data['password'] = hash('md5',$data['password']);
            $data['eLink']  = random_string('alnum','15');
            $data['date'] = date('Y-m-d H:i:s');


        //    var_dump($data);    
           $return =  $this->ModRegister->addNewUser($data);

           if($return){
            $this->session->set_flashdata('message', 'Succefully created Account');
            redirect('login');
           }
           else{
            $this->session->set_flashdata('message', 'Something went wrong');
            redirect('login');
           }
           }
        
        
        }
     }

?>


//how to use base url in codeigniter =3 