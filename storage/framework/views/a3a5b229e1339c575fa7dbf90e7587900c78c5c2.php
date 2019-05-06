<?php $__env->startSection('content'); ?>
        <div class="container">
            <h1>Create Blog</h1>
            <?php echo Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

                <div class="form-group">
                    <?php echo e(Form::label('title', 'Title')); ?>

                    <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Write a title.'])); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label('body', 'Body')); ?>

                    <?php echo e(Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Write something into body.'])); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::file('cover_image')); ?>

                </div>
                <?php echo e(Form::submit('Post', ['class' => 'btn btn-outline-success'])); ?>


            <?php echo Form::close(); ?>

        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>