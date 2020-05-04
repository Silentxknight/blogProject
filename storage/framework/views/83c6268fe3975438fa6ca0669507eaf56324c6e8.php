
<?php if(count($errors) > 0): ?>
<!-- Form Error List -->
<br>
<div class="alert alert-danger">
    <strong>Whoops! Something went wrong!</strong>

    <br>

    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<?php if(session('msgSuc')): ?>
    <div class="alert alert-success">
        <?php echo e(session('msgSuc')); ?>

    </div>
<?php endif; ?>


<?php if(session('msgErr')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('msgErr')); ?>

    </div>
<?php endif; ?>



<?php /**PATH D:\xampp-server\htdocs\FirstApp\resources\views/inc/msg.blade.php ENDPATH**/ ?>