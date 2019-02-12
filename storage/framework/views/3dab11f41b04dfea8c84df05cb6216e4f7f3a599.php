<?php echo $__env->make('includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo csrf_field(); ?>

<div class="form-group">
    <?php if($errors->has('title')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->get('title'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title_error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($title_error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <input value="<?php echo e($faq->title ?? old('title')); ?>" class="form-control" type="text" name="title" placeholder="Title">
</div>
<div class="form-group">
    <?php if($errors->has('content')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->get('content'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content_error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($content_error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <textarea class="form-control" name="content" cols="30" rows="5" placeholder="Content" id="content"><?php echo e($faq->content ?? old('content')); ?></textarea>
</div>
<div class="form-group">
    <a class="btn btn-info float-left" href="<?php echo e(route('manage')); ?>">Back</a>
    <button type="submit" class="btn btn-success btn-lg float-right">Save</button>
</div>