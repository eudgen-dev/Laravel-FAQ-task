<?php $__env->startSection('title', 'FAQ'); ?>

<?php $__env->startSection('content'); ?>

<h1>
    Manage Faqs
    <a href="<?php echo e(route('faqs.create')); ?>" class="btn btn-primary">
        <i class="fas fa-plus-square"></i>
    </a>
</h1>

<?php echo $__env->make('includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<ul class="media-list">

    <?php $__empty_1 = true; $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <li class="media">
            <div class="media-body">
                <span class="text-muted float-right">
                    <small class="text-muted"><?php echo e($faq->created_at->format('d/m/Y')); ?></small>
                </span>
                <div>
                    <?php echo e($faq->title); ?>

                    <br>
                    <a href="<?php echo e(route('faqs.show', $faq->id)); ?>">Details</a> |
                    <a href="<?php echo e(route('faqs.edit', $faq->id)); ?>">Edit</a> |
                    <form class="manage_del" action="<?php echo e(route('faqs.destroy', $faq->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="delete_btn" onclick="return confirm('Are you sure?');">Delete</button>
                    </form>
                </div>
                <hr>
            </div>
        </li>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="media">
        <p>No records found!</p>
    </div>
    <?php endif; ?>

    <?php echo $faqs->links(); ?>


</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>