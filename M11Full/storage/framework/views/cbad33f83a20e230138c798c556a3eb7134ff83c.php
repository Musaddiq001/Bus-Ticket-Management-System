<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Welcome to Bus ticket Reseravation system</h1>
	<h2>Sign in</h2>
	<form method="post" >
		<?php echo csrf_field(); ?>
<!-- 		<?php echo e(csrf_field()); ?> -->		
<!-- 		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> -->
        
		Email:  <input type="text" name="uname" > <br>
		Password: <input type="password" name="password" ><br>
		<input type="submit" name="submit" value="login" >
	</form>

	<h3><?php echo e(session('msg')); ?></h3>
</body>
</html><?php /**PATH C:\xampp\htdocs\aaaa\btrs\resources\views/login/index.blade.php ENDPATH**/ ?>