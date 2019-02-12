<?php $__env->startSection('title', 'FAQ'); ?>

<?php $__env->startSection('content'); ?>

<h1>
    Faqs
</h1>

<?php echo $__env->make('includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="accordion" id="accordionFAQ">

    <?php $__empty_1 = true; $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <div class="card">
            <div class="card-header" id="heading-<?php echo e($faq->id); ?>">
                <h5 class="mb-0">
                    <span class="text-muted pull-right">
                        <small class="text-muted"><?php echo e($faq->created_at->format('d/m/Y')); ?></small>
                    </span>
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-<?php echo e($faq->id); ?>" aria-expanded="false" aria-controls="collapse-<?php echo e($faq->id); ?>">
                        <div class="media-body">
                            <?php echo e($faq->title); ?>

                        </div>
                    </button>
                </h5>
            </div>

            <div id="collapse-<?php echo e($faq->id); ?>" class="collapse" aria-labelledby="heading-<?php echo e($faq->id); ?>" data-parent="#accordionFAQ">
                <div class="card-body">
                    <?php echo e($faq->content); ?>

                    <br>
                </div>
            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="media">
        <p>No records found!</p>
    </div>
    <?php endif; ?>

    <?php echo $faqs->links(); ?>


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>