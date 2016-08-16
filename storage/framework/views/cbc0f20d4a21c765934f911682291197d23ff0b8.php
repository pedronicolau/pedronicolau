
<?php $__env->startSection('content'); ?>
	<h1>Create new post</h1>
	<?php if($errors->any()): ?>
		<ul class="alert">
			<?php foreach($errors->all() as $error): ?>
				<li><?php echo e($error); ?></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
    <?php echo Form::open(['route'=>'admin.posts.store','method'=>'post']); ?>

    <?php echo $__env->make('admin.posts._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class ="form-group">
        <?php echo Form::submit('Create Post',['class'=>'btn btn-primary']); ?>

	</div>
	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>