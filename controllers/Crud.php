<?php

class Crud extends CI_Controller {
      
    public function index() {
        $this->load->view('student');
    }

    //to save students details in database after taking input from form

    public function newUser() {
        $this->load->library('session');
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $data['age'] = $this->input->post('age');

        if (empty($data['name']) || empty($data['email']) || empty($data['password']) || empty($data['age'])) {
            $this->session->set_flashdata('message', 'Please check the required fields');
            redirect('crud');
        } else {
          $return =  $this->ModCrud->addUser($data);

          if($return)
          {
            $this->session->set_flashdata('message', 'Succefully inserted');
            redirect('crud/allStudent');
          }
          else{
            $this->session->set_flashdata('message', 'failed to insert');
            redirect('crud');
          }
        }
    }

    //to retrieve all student data

    public function allStudent()
    {
       $data['allStudents']  = $this->ModCrud->getAllRecords();
       $this->load->view('allStudents' ,$data);


    }


     //to edit student
    public function editStudent($id = null)
    {
        $this->load->model('ModCrud');
        $data['stdRecord'] = $this->ModCrud->checkStudent($id);
    
        if (count($data['stdRecord']) == 1) {
               $this->load->view('editStudent',$data);
        }
         else {
            $this->session->set_flashdata('message', 'record not found');
            redirect('crud/allStudent');
        }
    }

 // to update student
    public function updateStudent()
{
    $data['name'] = $this->input->post('name', true);
    $data['email'] = $this->input->post('email', true);
    $data['password'] = $this->input->post('password', true);
    $data['age'] = $this->input->post('age', true);
    $userId = $this->input->post('userId', true);

    if (empty($data['name']) || empty($data['email']) || empty($data['password']) || empty($data['age']) || empty($userId)) {
        $this->session->set_flashdata('message', 'These fields are required');
        redirect('crud/allStudent');
    } else {
        $return = $this->ModCrud->updateStudent($data, $userId);

        if ($return) {
            $this->session->set_flashdata('message', 'Updated successfully');
            redirect('crud/allStudent');
        } else {
            $this->session->set_flashdata('message', 'Something went wrong');
            redirect('crud/allStudent');
        }
    }
}


//to delete student
                 

    public function deleteStudent($id = null)
{
   if(empty($id))
   {
    $this->session->set_flashdata('message', 'Something went wrong');
    redirect('crud/allStudent');
   }
   else{
    $idExit = $this->ModCrud->checkStudent($id);

    if(count($idExit) == 1)
    {
       $myreturn  =   $this->ModCrud->deleteStudent($id);

       if($myreturn)                                                                                                                                                                                                         
       {
        $this->session->set_flashdata('message', 'successfully deleted');
        redirect('crud/allStudent');
       }
       else{
        $this->session->set_flashdata('message', 'Something went wrong');
        redirect('crud/allStudent');
       }
    } else{
        $this->session->set_flashdata('message', 'Something went wrong');
        redirect('crud/allStudent');
    }
   }
}


public function logout()
{
    
  //  $this->session->sess_destroy();
    redirect('login');
}
    

}



