
<?php $__env->startSection('content'); ?>
	<h1>Blog Admin</h1>
    <a href="<?php echo e(route('admin.posts.create')); ?>" class="btn btn-success">Create new post</a>
	<table class="table">
        <tr>
            <th>
                ID
            </th>
            <th>
                Title
            </th>
            <th>
                Action
            </th>
        </tr>
        <?php foreach($posts as $post): ?>
        <tr>
            <td>
                <?php echo e($post->id); ?>

            </td>
            <td>
                <?php echo e($post->title); ?>

            </td>
            <td>
                <a href="<?php echo e(route('admin.posts.edit',['id'=> $post->id])); ?>" class="btn btn-default">Edit</a>
                <a href="<?php echo e(route('admin.posts.destroy',['id'=> $post->id])); ?>" class="btn btn-danger">Destroy</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
    <?php echo $posts->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>