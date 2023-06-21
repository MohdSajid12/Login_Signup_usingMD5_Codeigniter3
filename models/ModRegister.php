<?php

class ModRegister extends CI_Model{

    public function addNewUser($data)
    {
        return $this->db->insert('users' ,$data);
        }

   public function checkUser($data)

   {
     return $this->db->get_where('users' ,$data)->result_array();
   }
}

?>