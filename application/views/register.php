<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css';?>">

</head>
<body>
<div class="container">
	<?php
		$msg=$this->session->set_flashdata('msg');
		if($msg !="")
		{
			// echo "<div class='alert alert-sucess'>'.msg.'</div>";
			echo "<div class='alert alert-success'>$msg</div>";
		}
	?>
	
	<div class="col-md-6">
		<div class="card mt-4">
  <h5 class="card-header">Register Here
  </h5>
  <form action="<?php echo base_url().'index.php/Auth/register'?>" name="registerForm" method="post">
  <div class="card-body register">

    <p class="card-text">Pleased Fill with your details</p>
    <div class="form-group">
    	<label for="name">Name</label>
    	<input type="text" name="name"  placeholder="Enter your name" value="<?php echo set_value('name')?>" class="form-control <?php echo (form_error('name') != "") ? 'is-invalid' : '';?>">
    	<p class="invalid-feedback"><?php echo strip_tags(form_error('name'));?></p>
    </div>

    <div class="form-group">
    	<label for="email">Email id</label>
    	<input type="email" name="email" placeholder="Enter your email" value="<?php echo set_value('email')?>" class="form-control <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>">
    	<p class="invalid-feedback"><?php echo strip_tags(form_error('email'));?></p>
    </div>

    <div class="form-group">
    	<label for="password">Password</label>
    	<input type="password" name="password" placeholder="Enter your password" value="<?php echo set_value('password')?>" class="form-control <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>">
    	<p class="invalid-feedback"><?php echo strip_tags(form_error('password'));?></p>
    </div>

    <div class="form-group">
    	<label for="Age">Age</label>
    	<input type="text" name="age" placeholder="Enter your Age" value="<?php echo set_value('age')?>" class="form-control <?php echo (form_error('age') != "") ? 'is-invalid' : '';?>">
    	<p class="invalid-feedback"><?php echo strip_tags(form_error('age'));?></p>
    </div>

    <div class="form-group">
    	<label for="mobile">Mobile No</label>
    	<input type="text" name="mobile" placeholder="Enter your mobile no" value="<?php echo set_value('mobile')?>" class="form-control <?php echo (form_error('mobile') != "") ? 'is-invalid' : '';?>">
    	<p class="invalid-feedback"><?php echo strip_tags(form_error('mobile'));?></p>
    </div></br>

    <div class="form-group">
    	<button class="btn btn-block btn-primary">Register</button>
    </div>

  </div>
</form>
</div>
	</div>
</div>
</body>
</html>