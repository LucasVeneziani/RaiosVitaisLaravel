<?php $__env->startSection('content'); ?>
<div class="page-header">
    <h2>Usuários</h2>
    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary">+ Novo Usuário</a>
</div>

<?php if($users->isEmpty()): ?>
    <div class="card"><p style="color:#777">Nenhum usuário cadastrado.</p></div>
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
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email ?? '—'); ?></td>
            <td><?php echo e($user->created_at ? $user->created_at->format('d/m/Y') : '—'); ?></td>
            <td style="display:flex;gap:8px;align-items:center">
                <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-warning">Editar</a>
                <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST"
                      onsubmit="return confirm('Tem certeza que deseja deletar este usuário?')">
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

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\2026\Fatec\DesenvolvimentoWeb\PacoteVitalicio\RaiosVitaisTres\RaiosVitaisLaravel\resources\views/users.blade.php ENDPATH**/ ?>