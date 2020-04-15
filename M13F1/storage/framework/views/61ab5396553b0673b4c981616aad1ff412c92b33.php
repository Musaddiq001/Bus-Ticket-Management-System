<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>User Details</h1>&nbsp
	<a href="/logout">Logout</a> <br>

		<table border="1">
			<tr>
				<td>Id</td>
				<td><?php echo e($userId); ?></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><?php echo e($username); ?></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><?php echo e($name); ?></td>
			</tr>
			<tr>
				<td>CGPA</td>
				<td><?php echo e($cgpa); ?></td>
			</tr>
			<tr>
				<td>DEPT</td>
				<td><?php echo e($dept); ?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><?php echo e($password); ?></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><?php echo e($type); ?></td>
			</tr>
			<tr>
				<td><a href="<?php echo e(route('home.list')); ?>">Back</a></td>
				<td></td>
			</tr>
		</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\aaaa\btrs\resources\views/home/details.blade.php ENDPATH**/ ?>