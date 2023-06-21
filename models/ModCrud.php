<?php
  
  class ModCrud extends CI_Model
  {
       public function addUser($userData)
       {
              return  $this->db->insert('students',$userData);
       }

       public function getAllRecords()
       {
              return $this->db->get('students');
       }
       
      public function checkStudent($id)  {
        return $this->db->get_where('students', array('id' => $id))
                        ->result_array();
      }

      public function updateStudent($data,$userId)
      {
        $this->db->where('id',$userId);
       return $this->db->update('students' , $data);
      }

      public function deleteStudent($id)
      {
           $this->db->where('id',$id);
        return $this->db->delete('students');
      }
  }

?>