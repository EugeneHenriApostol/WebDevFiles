<h1>Departments</h1>
<ul>
    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <?php echo e($department->deptfullname); ?> (<?php echo e($department->college->collfullname); ?>)
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\Laravel\laravel_usjr\resources\views/departments/index.blade.php ENDPATH**/ ?>