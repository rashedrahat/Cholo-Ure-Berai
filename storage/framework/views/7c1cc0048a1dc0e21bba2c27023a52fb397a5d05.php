<?php $__env->startSection('content'); ?>
    <div class="jumbotron container text-center">
        <h1>Welcome to Cholo Ure Berai!</h1>
        <a class="btn btn-outline-success" href="/login" role="button">Login</a>&emsp;<a class="btn btn-outline-primary" href="/registration" role="button">Registration</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>