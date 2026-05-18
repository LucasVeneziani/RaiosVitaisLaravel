

<?php $__env->startSection('content'); ?>


<h2>Create</h2>

<?php if(session()->has('message')): ?>
<?php echo e(session()->get('message')); ?>

<?php endif; ?>

<form action="<?php echo e(route('users.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="Nome">
    <button type="submit">Criar</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\2026\Fatec\DesenvolvimentoWeb\16-03-2026\sitebasicolaravel\resources\views/user_create.blade.php ENDPATH**/ ?>