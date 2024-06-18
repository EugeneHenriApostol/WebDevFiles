<h1> <?php echo e($college->collfullname); ?> </h1>
<h2>Departments</h2>
<ul>
    <?php $__currentLoopData = $college->departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departments): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($departments->deptfullname); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<h2>Programs</h2>
<ul>
    <?php $__currentLoopData = $college->programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $programs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($programs->progfullname); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<a href="<?php echo e(url('/show/colleges')); ?>">Back to List</a><?php /**PATH C:\Laravel\laravel_usjr\resources\views/colleges/show.blade.php ENDPATH**/ ?>