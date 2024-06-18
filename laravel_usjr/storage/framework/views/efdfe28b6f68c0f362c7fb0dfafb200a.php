<h1>All Colleges</h1>
<ul>
    <?php $__currentLoopData = $colleges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $college): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <?php echo e($college->collfullname); ?>

        <a href="<?php echo e(url('/show/college', $college->collid)); ?>">Show</a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\Laravel\laravel_usjr\resources\views/colleges/index.blade.php ENDPATH**/ ?>