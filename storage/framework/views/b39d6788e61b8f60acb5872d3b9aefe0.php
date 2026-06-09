<?php $__env->startSection('content'); ?>
<div class="page-header">
    <h2>Clientes</h2>
    <a href="<?php echo e(route('clientes.create')); ?>" class="btn btn-primary">+ Novo Cliente</a>
</div>

<?php if($clientes->isEmpty()): ?>
    <div class="card"><p style="color:#777">Nenhum cliente cadastrado.</p></div>
<?php else: ?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Criado em</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($cliente->id); ?></td>
            <td><?php echo e($cliente->name); ?></td>
            <td><?php echo e($cliente->email ?? '—'); ?></td>
            <td><?php echo e($cliente->created_at ? $cliente->created_at->format('d/m/Y') : '—'); ?></td>
            <td style="display:flex;gap:8px;align-items:center">
                <a href="<?php echo e(route('clientes.edit', $cliente->id)); ?>" class="btn btn-warning">Editar</a>
                <form action="<?php echo e(route('clientes.destroy', $cliente->id)); ?>" method="POST"
                      onsubmit="return confirm('Tem certeza que deseja deletar este cliente?')">
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

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\2026\Fatec\DesenvolvimentoWeb\PacoteVitalicio\RaiosVitaisCinco\RaiosVitaisLaravel\resources\views/clientes.blade.php ENDPATH**/ ?>