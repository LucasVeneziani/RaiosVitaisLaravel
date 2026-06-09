<?php $__env->startSection('content'); ?>

<?php if(session()->has('auth_id')): ?>

<style>
    .painel-tabs {
        display: flex;
        gap: 0.5rem;
        margin-bottom: 1.25rem;
    }
    .tab-btn {
        padding: 6px 14px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        font-size: 0.85rem;
        font-weight: bold;
        transition: opacity 0.2s;
    }
    .tab-btn.active {
        background: #ff6cc7;
        color: #fff;
    }
    .tab-btn.inactive {
        background: #fff;
        color: #ff6cc7;
        border: 1.5px solid #ff6cc7;
    }
    .tab-btn.inactive:hover {
        opacity: 0.75;
    }
    .welcome-block {
        margin-bottom: 1.5rem;
    }
    .welcome-block h2 {
        margin-bottom: 0.15rem;
    }
    .welcome-block p {
        color: #888;
        margin: 0;
        font-size: 0.9rem;
    }
</style>

<div class="welcome-block">
    <h2>Bem-vindo, <?php echo e(session('auth_name')); ?>!</h2>
    <p><?php echo e(now()->translatedFormat('l, d \d\e F \d\e Y')); ?></p>
</div>

<div class="painel-tabs">
    <button class="tab-btn active"  id="tab-hoje"   onclick="showTab('hoje')">Consultas de Hoje</button>
    <button class="tab-btn inactive" id="tab-semana" onclick="showTab('semana')">Consultas da Semana</button>
    <button class="tab-btn inactive" id="tab-mes"    onclick="showTab('mes')">Consultas do Mês</button>
</div>


<div id="painel-hoje">
    <?php if($hoje->isEmpty()): ?>
        <div class="card"><p style="color:#777;">Nenhuma consulta sua agendada para hoje.</p></div>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Horário</th>
                    <th>Término</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $hoje; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agendamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($agendamento->id); ?></td>
                    <td><?php echo e($agendamento->cliente->name ?? '—'); ?></td>
                    <td><?php echo e($agendamento->data_agendamento->format('H:i')); ?></td>
                    <td><?php echo e($agendamento->data_expiracao ? $agendamento->data_expiracao->format('H:i') : '—'); ?></td>
                    <td style="display:flex; gap:8px; align-items:center;">
                        <a href="<?php echo e(route('agenda.edit', $agendamento->id)); ?>" class="btn btn-warning">Editar</a>
                        <form action="<?php echo e(route('agenda.destroy', $agendamento->id)); ?>" method="POST"
                              onsubmit="return confirm('Tem certeza que deseja deletar este agendamento?')">
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
</div>


<div id="painel-semana" style="display:none;">
    <?php if($semana->isEmpty()): ?>
        <div class="card"><p style="color:#777;">Nenhuma consulta sua agendada para esta semana.</p></div>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Término</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $semana; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agendamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($agendamento->id); ?></td>
                    <td><?php echo e($agendamento->cliente->name ?? '—'); ?></td>
                    <td><?php echo e($agendamento->data_agendamento->format('d/m/Y')); ?></td>
                    <td><?php echo e($agendamento->data_agendamento->format('H:i')); ?></td>
                    <td><?php echo e($agendamento->data_expiracao ? $agendamento->data_expiracao->format('H:i') : '—'); ?></td>
                    <td style="display:flex; gap:8px; align-items:center;">
                        <a href="<?php echo e(route('agenda.edit', $agendamento->id)); ?>" class="btn btn-warning">Editar</a>
                        <form action="<?php echo e(route('agenda.destroy', $agendamento->id)); ?>" method="POST"
                              onsubmit="return confirm('Tem certeza que deseja deletar este agendamento?')">
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
</div>


<div id="painel-mes" style="display:none;">
    <?php if($mes->isEmpty()): ?>
        <div class="card"><p style="color:#777;">Nenhuma consulta sua agendada para este mês.</p></div>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Término</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $mes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agendamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($agendamento->id); ?></td>
                    <td><?php echo e($agendamento->cliente->name ?? '—'); ?></td>
                    <td><?php echo e($agendamento->data_agendamento->format('d/m/Y')); ?></td>
                    <td><?php echo e($agendamento->data_agendamento->format('H:i')); ?></td>
                    <td><?php echo e($agendamento->data_expiracao ? $agendamento->data_expiracao->format('H:i') : '—'); ?></td>
                    <td style="display:flex; gap:8px; align-items:center;">
                        <a href="<?php echo e(route('agenda.edit', $agendamento->id)); ?>" class="btn btn-warning">Editar</a>
                        <form action="<?php echo e(route('agenda.destroy', $agendamento->id)); ?>" method="POST"
                              onsubmit="return confirm('Tem certeza que deseja deletar este agendamento?')">
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
</div>

<script>
    function showTab(tab) {
        document.getElementById('painel-hoje').style.display   = tab === 'hoje'   ? '' : 'none';
        document.getElementById('painel-semana').style.display = tab === 'semana' ? '' : 'none';
        document.getElementById('painel-mes').style.display    = tab === 'mes'    ? '' : 'none';
        document.getElementById('tab-hoje').className   = 'tab-btn ' + (tab === 'hoje'   ? 'active' : 'inactive');
        document.getElementById('tab-semana').className = 'tab-btn ' + (tab === 'semana' ? 'active' : 'inactive');
        document.getElementById('tab-mes').className    = 'tab-btn ' + (tab === 'mes'    ? 'active' : 'inactive');
    }
</script>

<?php else: ?>
    <meta http-equiv="refresh" content="0;url=<?php echo e(route('home')); ?>">
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\2026\Fatec\DesenvolvimentoWeb\PacoteVitalicio\RaiosVitaisCinco\RaiosVitaisLaravel\resources\views/paineladmin.blade.php ENDPATH**/ ?>