<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
if($this->session->flashdata('message'))
{
    echo $this->session->flashdata('message');
} ?>
    <table border="2">
   <?php if($allStudents->num_rows() == 0){
    echo "student is not available";
   }
   else{
       foreach($allStudents->result() as $student):?>
      
      <tr>
        <td>
            <?php echo $student->id?>
        </td>
        <td>
            <?php echo $student->name?>
        </td>
        <td>
            <?php echo $student->email?>
        </td>
        <td>
            <?php echo $student->age?>
        </td>
        <td>
           <a href="<?php echo site_url('crud/editStudent/'. $student->id) ?>">Edit</a>
        </td>
        <td>
           <a href="<?php echo site_url('crud/deleteStudent/'. $student->id) ?>">Delete</a>
        </td>
      </tr>

        <?php endforeach;
    } ?>

  
</table>
 
<a href="<?php echo base_url('logout'); ?>">Logout</a>


</body>
</html>



