<?php $__env->startSection('content'); ?>
    <div class="container">
        
        <h1>Blogs</h1>
            <?php if(count($posts) > 0): ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-light" role="alert">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <img style="width:100%" src="/storage/cover_images/<?php echo e($post->cover_image); ?>">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <h3><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h3>
                                <small>Written on <?php echo e($post->created_at); ?> by <?php echo e($post->user->name); ?></small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($posts->links()); ?>       
            <?php else: ?>
                <h3>No blog found!</h3>
            <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>