<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Create User</h1>&nbsp
	<a href="<?php echo e(route('home.list')); ?>">Back</a> |
	<a href="/logout">Logout</a> <br>

	<form method="post" enctype="multipart/form-data">
		<?php echo e(csrf_field()); ?>

		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo e(old('username')); ?>"></td>
			</tr>

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo e(old('name')); ?>"></td>
			</tr>
			<tr>
				<td>CGPA</td>
				<td><input type="text" name="cgpa" value="<?php echo e(old('cgpa')); ?>"></td>
			</tr>
			<tr>
				<td>DEPT</td>
				<td><input type="text" name="dept" value="<?php echo e(old('dept')); ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo e(old('password')); ?>"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name="type" value="<?php echo e(old('type')); ?>"></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="pic" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Create"></td>
			</tr>
		</table>
	</form>
	
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\aaaa\btrs\resources\views/home/add.blade.php ENDPATH**/ ?>