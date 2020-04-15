<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Edit Counter Details</h1>&nbsp
	<a href="<?php echo e(route('home.list2')); ?>">Back</a> |
	<a href="/logout">Logout</a> <br>

	<form method="post">
		<?php echo e(csrf_field()); ?>

		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" readonly name="id" value="<?php echo e($userId); ?>"></td>
			</tr>
			<tr>
				<td>Operator</td>
				<td><input type="text" name="operator" value="<?php echo e($operator); ?>"></td>
			</tr>
			<tr>
				<td>Manager</td>
				<td><input type="text" name="manager" value="<?php echo e($manager); ?>"></td>
			</tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo e($name); ?>"></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="location" value="<?php echo e($location); ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\aaaa\btrs\resources\views/home/edit1.blade.php ENDPATH**/ ?>