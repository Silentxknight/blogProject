<?php $__env->startSection('content'); ?>

<h1>Create</h1>

    <?php echo Form::open(['url' => 'posts','method' => 'POST']); ?>

 
    

    <div class="form-group">
    <?php echo e(Form::label('title', 'Title')); ?>

    <?php echo Form::text('title', '', ['class'=>'form-control','placeholder'=>'Title']); ?>

 </div>
 <div class="form-group">
    <?php echo Form::label('body', 'Body' ); ?>

    <?php echo Form::textarea('body', '', ['class'=>'form-control','placeholder'=>'body']); ?>

 </div>
    <?php echo Form::submit('Post', ['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-server\htdocs\FirstApp\resources\views/posts/create.blade.php ENDPATH**/ ?>