<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Edit User</h1>&nbsp
	<a href="<?php echo e(route('home.list')); ?>">Back</a> |
	<a href="/logout">Logout</a> <br>

	<form method="post">
		<?php echo e(csrf_field()); ?>

		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" readonly name="id" value="<?php echo e($userId); ?>"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo e($username); ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="name" value="<?php echo e($email); ?>"></td>
			</tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo e($password); ?>"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name="type" value="<?php echo e($type); ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\aaaa\btrs\resources\views/home/edit.blade.php ENDPATH**/ ?>