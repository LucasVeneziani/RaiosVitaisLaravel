<?php $__env->startSection('content'); ?>


<h2>Edit</h2>

<?php if(session()->has('message')): ?>

<?php echo e(session()->get('message')); ?>


<?php endif; ?>

<form action="<?php echo e(route('users.update',['user' => $user->id])); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name" value="<?php echo e($user->name); ?>">
    <button type="submit">Enviar</button>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\2026\Fatec\DesenvolvimentoWeb\RaiosVitaisLaravel\resources\views/user_edit.blade.php ENDPATH**/ ?>