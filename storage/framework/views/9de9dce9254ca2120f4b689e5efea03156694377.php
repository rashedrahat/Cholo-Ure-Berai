<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <a href="/posts/create" class="btn btn-outline-primary" role="button">Create Post</a>
                    <h3 style="padding-top:5px;">Your blog posts</h3>
                    <?php if(count($posts) > 0): ?>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tbody>
                                    <tr>
                                    <td scope="row"><?php echo e($post->title); ?></td>
                                    <td>
                                        <a class="btn btn-outline-primary btn-sm" href="/posts/<?php echo e($post->id); ?>/edit" role="button">Edit</a>
                                        <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']); ?>

                                            <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                            <?php echo e(Form::submit('Delete', ['class' => 'btn btn-outline-danger btn-sm'])); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                    </tr>
                                    </tbody>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                    <?php else: ?>
                        <h6>You don't post any blog yet!</h6>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>