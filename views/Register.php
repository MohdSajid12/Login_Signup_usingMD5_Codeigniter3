<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>

  <style>
    p{
      color:red;
    }
  </style>
  <body>


  
  <?php if($this->session->flashdata('message')): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <?php echo $this->session->flashdata('message'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
   
<div class="container mx-auto p-4">

<h2>Registration Form</h2>
<form method="post" action="Signup/user">
  <div class="mb-3" style="width: 700px;">
    <label for="exampleInputFirstName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputFirstName" aria-describedby="emailHelp"  name="fullName"  value="<?php echo set_value('fullName') ?>">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    <p><?php echo form_error('fullName') ?></p>
  </div>


  <div class="mb-3" style="width: 700px;">
    <label for="exampleInputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail" name="email" value="<?php echo set_value('email')  ?>" >
    <p><?php echo form_error('email') ?></p>
  </div>
  


  <div class="mb-3" style="width: 700px;">
    <label for="exampleInputPassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword" name="password"
    value="<?php echo set_value('password') ?>">
    <p><?php echo form_error('password') ?></p>

  </div>
  
  <div class="mb-3" style="width: 700px;">
    <label for="exampleInputCPassword" class="form-label">Confirm-Password</label>
    <input type="password" class="form-control" id="exampleInputCPassword" name="conpassword"  value="<?php echo set_value('conpassword') ?>">
    <p><?php echo form_error('conpassword') ?></p>

  </div>

  
  
  <button type="submit" class="btn btn-primary btn-lg">Submit</button><br><br>


  Have an account? <br>
  <a href="login" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Login</a>
</form>
            </div>
        </div>
     </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>



