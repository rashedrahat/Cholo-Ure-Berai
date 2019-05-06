<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="/posts" class="btn btn-outline-success btn-sm" role="button">Go back</a>
        <div style="padding-top:20px">
                        <div>
                            <img style="width:100%; height:500px;" src="/storage/cover_images/<?php echo e($post->cover_image); ?>">
                        </div><br/>
                        <div>
                                <h1><?php echo e($post->title); ?></h1>
                                <p><?php echo $post->body; ?></p>
                                <hr/>
                                <small>Written on <?php echo e($post->created_at); ?> by <?php echo e($post->user->name); ?></small>
                        </div><br/>
            <?php if(!Auth::guest()): ?>
                <?php if(Auth::user()->id == $post->user_id): ?>
                    <a class="btn btn-outline-primary" href="/posts/<?php echo e($post->id); ?>/edit" role="button">Edit</a>
                    <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']); ?>

                        <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                        <?php echo e(Form::submit('Delete', ['class' => 'btn btn-outline-danger'])); ?>

                    <?php echo Form::close(); ?>

                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>