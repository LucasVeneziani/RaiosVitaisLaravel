

<?php $__env->startSection('content'); ?>


<h2>Users</h2>
<ul>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($user->name); ?> | <a href="<?php echo e(route('users.edit', ['user' => $user->id])); ?>">Edit</a> | <a href="">Delete</a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\2026\Fatec\DesenvolvimentoWeb\16-03-2026\sitebasicolaravel\resources\views/users.blade.php ENDPATH**/ ?>