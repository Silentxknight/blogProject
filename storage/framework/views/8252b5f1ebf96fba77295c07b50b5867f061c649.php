<?php $__env->startSection('content'); ?>
<br>
<a class="btn btn-warning text-white"  href="/FirstApp/public/posts/create" >Create Post</a>
<br>
<div class="" ><?php echo e(session()->get('msg')); ?></div>
<br>
<?php if(count($data)>0): ?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
        <div class="card-body">
        <h4 class="card-title"><a href="/FirstApp/public/posts/<?php echo e($posts->id); ?>"><?php echo e($posts->title); ?></a></h4>
        
        <small class="ml-auto" >Written on <?php echo e($posts->created_at); ?></small>
        </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>
 <p>No posts Found</p>
 <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-server\htdocs\FirstApp\resources\views/posts/index.blade.php ENDPATH**/ ?>