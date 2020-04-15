<!DOCTYPE html>
<html>
<head>
	<title>Counter Details page</title>
</head>
<body>	

	<h1>Counter Details</h1>&nbsp
	<a href="/logout">Logout</a> <br>

		<table>
			<tr>
				<td>Id</td>
				<td><?php echo e($userId); ?></td>
			</tr>
			<tr>
				<td>OPERATOR</td>
				<td><?php echo e($operator); ?></td>
			</tr>
			<tr>
				<td>MANAGER</td>
				<td><?php echo e($manager); ?></td>
			</tr>
			
			<tr>
				<td>NAME</td>
				<td><?php echo e($name); ?></td>
			</tr>
			<tr>
				<td>LOCATION</td>
				<td><?php echo e($location); ?></td>
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
</html><?php /**PATH C:\xampp\htdocs\aaaa\btrs\resources\views/home/delete1.blade.php ENDPATH**/ ?>