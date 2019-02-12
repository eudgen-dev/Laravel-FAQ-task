<?php $__env->startSection('title', 'New question'); ?>

<?php $__env->startSection('content'); ?>

<h1>New question</h1>

<form action="<?php echo e(route('faqs.store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo $__env->make('faqs._partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>