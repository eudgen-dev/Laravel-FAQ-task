<?php $__env->startSection('title', "Question details: {$faq->title}"); ?>

<?php $__env->startSection('content'); ?>

<h1>Question details: <b><?php echo e($faq->title); ?></b></h1>

<p class="card card-body">
    <?php echo e($faq->content); ?>

</p>

<div>
    <a class="btn btn-info float-left" href="<?php echo e(route('manage')); ?>">Back</a>
    <form class="float-right" action="<?php echo e(route('faqs.destroy', $faq->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete question</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>