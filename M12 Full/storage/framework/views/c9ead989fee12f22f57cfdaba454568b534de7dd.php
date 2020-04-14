<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Bus Support Staffs List!</h1>&nbsp
	<a href="<?php echo e(route('home.index')); ?>">back</a> |
	<a href="/logout">Logout</a> 

	<table border="1">
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>EMAIL</th>
			<th>TYPE</th>
		</tr>
		
		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($user['userId']); ?></td>
			<td><?php echo e($user['username']); ?></td>
			<td><?php echo e($user['email']); ?></td>
			<td><?php echo e($user['type']); ?></td>
			<td>
				<a href="<?php echo e(route('home.edit', $user['userId'])); ?>">Edit</a> | 
				<a href="<?php echo e(route('home.delete', $user['userId'])); ?>">Delete</a> |
				<a href="<?php echo e(route('home.show', $user['userId'])); ?>">Details</a> 
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\aaaa\btrs\resources\views/home/view_staffs.blade.php ENDPATH**/ ?>