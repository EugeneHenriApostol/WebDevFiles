
<h1>All Students</h1>
<ul>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <?php echo e($student->studfirstname); ?> <?php echo e($student->studlastname); ?> (<?php echo e($student->program->progfullname); ?>)
        <a href="<?php echo e(url('/show/student', $student->studid)); ?>">Show</a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\Laravel\laravel_usjr\resources\views/students/index.blade.php ENDPATH**/ ?>