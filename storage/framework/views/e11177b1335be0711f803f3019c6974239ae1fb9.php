
<?php $__env->startSection('content'); ?>
	<h1>Blog</h1>
	<?php foreach($posts as $post): ?>
		<h2><?php echo e($post->title); ?> <i>(<?php echo e($post->created_at); ?>)</i></h2>
		<p><?php echo e($post->content); ?></p>
		<b>Tag:</b><br>
		<ul>
			<?php foreach($post->tags as $tag): ?>
				<li>
					<?php echo e($tag->name); ?>

				</li>
			<?php endforeach; ?>
		</ul>
		<hr>
		<h3>Comments</h3>
		<?php foreach($post->comments as $comment): ?>
			<b>name: </b> <?php echo e($comment->name); ?> <br>
			<b>comment: </b><?php echo e($comment->comment); ?><br><br>		
		<?php endforeach; ?>
	<?php endforeach; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>