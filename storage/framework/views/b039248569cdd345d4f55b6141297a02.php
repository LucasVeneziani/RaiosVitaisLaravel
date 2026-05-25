<?php $__env->startSection('content'); ?>
<div class="page-header">
    <h2>Novo Cliente</h2>
    <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-primary">← Voltar</a>
</div>

<div class="card">
    <form action="<?php echo e(route('clientes.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="Nome completo" required>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:#dc3545"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="email@exemplo.com" required>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small style="color:#dc3545"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button type="submit" class="btn btn-primary">Criar Cliente</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\2026\Fatec\DesenvolvimentoWeb\PacoteVitalicio\RaiosVitaisQuatro\RaiosVitaisLaravel\resources\views/cliente_create.blade.php ENDPATH**/ ?>