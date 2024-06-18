<h1><?php echo e($student->studfirstname); ?> <?php echo e($student->studlastname); ?></h1>
<p>Program: <?php echo e($student->program->progfullname); ?> </p>
<p>College: <?php echo e($student->college->collfullname); ?> </p>
<p>Year: <?php echo e($student->studyear); ?> </p>
<a href="<?php echo e(url('show/students/all')); ?>">Back to List</a><?php /**PATH C:\Laravel\laravel_usjr\resources\views/students/show.blade.php ENDPATH**/ ?>