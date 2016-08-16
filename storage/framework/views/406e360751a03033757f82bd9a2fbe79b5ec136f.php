

<?php $__env->startSection('title'); ?>
	Eu sou o titulo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	 <h1>Olá <?php echo e($nome); ?></h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>