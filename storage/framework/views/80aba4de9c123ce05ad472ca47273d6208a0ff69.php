<?php $__env->startSection('content'); ?>

<a href="/FirstApp/public/posts/ " class="btn btn-primary">Back</a>
  <h1><?php echo e($data->title); ?></h1>
 <div>
     <?php echo e($data->body); ?>

 </div>
 <small class="float-right" >Written on <?php echo e($data-> created_at); ?></small>



        
    



<hr>
<a class="btn btn-info" href="<?php echo e($data->id); ?>/edit">Edit Post</a>

<?php echo Form::open(['action' => ['PostsController@destroy',$data->id], 'method'=>'post','class'=>'float-right']); ?>

    <?php echo method_field('delete'); ?>
    <?php echo Form::submit('Delete Post', ['class'=>'btn btn-danger ','onclick'=>"alert('You are going to delete this post!')"]); ?>

<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-server\htdocs\FirstApp\resources\views/posts/show.blade.php ENDPATH**/ ?>