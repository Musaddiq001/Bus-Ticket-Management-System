<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>User Details</h1>&nbsp
	<a href="/logout">Logout</a> <br>

		<table>
			<tr>
				<td>Id</td>
				<td><?php echo e($userId); ?></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><?php echo e($username); ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo e($email); ?></td>
			</tr>
			
			<tr>
				<td>Password</td>
				<td><?php echo e($password); ?></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><?php echo e($type); ?></td>
			</tr>
		</table>
		


<script>
function myFunction() {
  alert("Are you sure? This can't be undone!");
}
</script>
	
		<form method="post">
			<?php echo e(csrf_field()); ?>

			<input type="hidden" name="userId" value="<?php echo e($userId); ?>">
			<input type="submit" name="submit" value="Confirm" button onclick="myFunction()"></button>
		</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\aaaa\btrs\resources\views/home/delete.blade.php ENDPATH**/ ?>