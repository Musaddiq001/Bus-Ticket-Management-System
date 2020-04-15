<!DOCTYPE html>
<html>
<head>
	<title>SignUP Page</title>
</head>
<body>
	<h1>Welcome to Bus ticket Reseravation system</h1>
	<h2>Sign up form!</h2>
	<form method="post" >
		<?php echo csrf_field(); ?>
<!-- 		<?php echo e(csrf_field()); ?> -->		
<!-- 		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> -->
        Username:  <input type="text" name="username" > <br>
		Email:     <input type="text" name="uname" > <br>
		Password:  <input type="password" name="password" ><br> 
		<input type="submit" name="submit" value="signup" >
		
	</form>

	<h3><?php echo e(session('msg')); ?></h3>
</body>
</html><?php /**PATH C:\xampp\htdocs\aaaa\btrs\resources\views/signup/index.blade.php ENDPATH**/ ?>