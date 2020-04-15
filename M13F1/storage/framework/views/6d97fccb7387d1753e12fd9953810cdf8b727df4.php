<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Bus Counters List</h1>&nbsp
	<a href="<?php echo e(route('home.index')); ?>">back</a> |
	<a href="/logout">Logout</a> 

	<table border="1">
		<tr>
			<th>ID</th>
			<th>OPERATOR</th>
			<th>MANAGER</th>
			<th>NAME</th>
			<th>lOCATION</th>
			<th>ACTION</th>
		</tr>
		
		<?php $__currentLoopData = $buscounters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($user['userId']); ?></td>
			<td><?php echo e($user['operator']); ?></td>
			<td><?php echo e($user['manager']); ?></td>
			<td><?php echo e($user['name']); ?></td>
			<td><?php echo e($user['location']); ?></td>
			<td>
				<a href="<?php echo e(route('home.delete1', $user['userId'])); ?>">Delete</a> |
				<a href="<?php echo e(route('home.edit1', $user['userId'])); ?>">Edit</a> 
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\aaaa\btrs\resources\views/home/view_buscounters.blade.php ENDPATH**/ ?>