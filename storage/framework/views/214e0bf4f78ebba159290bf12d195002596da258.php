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

                  Welcome To Our Blog System!

                </div>
                <a class="btn btn-warning text-white"  href="/FirstApp/public/posts/create" >Create Post</a>
            </div>
            <br>
            <?php if(count($posts)>0): ?>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                <div class="card-body">
                <h4 class="card-title"><a href="/FirstApp/public/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h4>
                
                <small class="ml-auto" >Written on <?php echo e($post->created_at); ?></small>
                </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php else: ?>
         <p>No posts Found</p>
         <?php endif; ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-server\htdocs\FirstApp\resources\views/home.blade.php ENDPATH**/ ?>