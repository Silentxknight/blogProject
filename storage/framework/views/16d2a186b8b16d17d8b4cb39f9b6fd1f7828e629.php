<?php $__env->startSection('content'); ?>

<div class="jumbotron" style="background-color:#00CEFF">
    <h1>Welcome To Blog Post Project</h1>
    <p>This is my FirstApp by "Laravel", Login to see new posts!</p>
    <p><a href="login" class="btn btn-primary btn-lg">Login</a> <a href="<?php echo e(route('register')); ?>" class="btn btn-success btn-lg">Register</a></p>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-server\htdocs\FirstApp\resources\views/new/hello.blade.php ENDPATH**/ ?>