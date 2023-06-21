<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

 <?php
      if($this->session->flashdata('message'))
      {
        echo $this->session->flashdata('message');
      }
 ?>

<?php    echo form_open('crud/newUser')  ?>
   
   <label for="">First Name</label>
<?php
  echo form_input('name');
?>


 <label for="">Email</label>
<?php
  echo form_input('email');
?>

<label for="">Password</label>
<?php
  echo form_input('password');
?>

<label for="">Age</label>
<?php
  echo form_input('age');
?>

<?php
  echo form_submit('submit','submit','');
?>


<?php echo form_close() ?>

</body>
</html>