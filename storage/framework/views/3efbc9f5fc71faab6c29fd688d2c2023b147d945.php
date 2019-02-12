<?php $__env->startSection('title', "Edit question: {$faq->title}"); ?>

<?php $__env->startSection('content'); ?>

<h1>Question: <?php echo e($faq->title); ?></h1>

    <form action="<?php echo e(route('faqs.update', $faq->id)); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">

        <?php echo $__env->make('faqs._partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>