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
      }
 ?>

<?php    echo form_open('crud/updateStudent')  ?>
<?php  echo form_hidden('userId' ,$stdRecord[0]['id'])  ?>
   
   <label for="">First Name</label>
<?php
  echo form_input('name' ,$stdRecord[0]['name']);
?>


 <label for="">Email</label>
<?php
  echo form_input('email',$stdRecord[0]['email']);
?>

<label for="">Password</label>
<?php
  echo form_input('password',$stdRecord[0]['password']);
?>

<label for="">Age</label>
<?php
  echo form_input('age',$stdRecord[0]['age']);
?>

<?php
  echo form_submit('update','update','');
?>
<?php echo form_close() ?>


</body>
</html>