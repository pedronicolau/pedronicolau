
<?php $__env->startSection('title'); ?>
     Minhas anotações
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Anotações</h1>
    <ul>
    <?php //foreach ($notas as $nota):?>
        <!--<li>
            <?//=$nota;?>
        </li>-->
    <?php// endforeach; ?>
    <?php foreach($notas as $nota): ?>
        <li><?php echo e($nota); ?></li>
    <?php endforeach; ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>