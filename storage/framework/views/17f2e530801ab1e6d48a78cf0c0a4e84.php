<?php $__env->startSection('content'); ?>
<div class="page-header">
    <h2>Funcionários</h2>
    <a href="<?php echo e(route('funcionarios.create')); ?>" class="btn btn-primary">+ Novo Funcionário</a>
</div>

<?php if($funcionarios->isEmpty()): ?>
    <div class="card"><p style="color:#777">Nenhum funcionário cadastrado.</p></div>
<?php else: ?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Cargo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $funcionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $func): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($func->id); ?></td>
            <td><?php echo e($func->name); ?></td>
            <td><?php echo e($func->email); ?></td>
            <td><?php echo e($func->phone ?? '—'); ?></td>
            <td><?php echo e($func->cargo); ?></td>
            <td style="display:flex;gap:8px;align-items:center">
                <a href="<?php echo e(route('funcionarios.edit', $func->id)); ?>" class="btn btn-warning">Editar</a>
                <form action="<?php echo e(route('funcionarios.destroy', $func->id)); ?>" method="POST"
                      onsubmit="return confirm('Tem certeza que deseja deletar este funcionário?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\2026\Fatec\DesenvolvimentoWeb\PacoteVitalicio\RaiosVitaisTres\RaiosVitaisLaravel\resources\views/funcionarios.blade.php ENDPATH**/ ?>