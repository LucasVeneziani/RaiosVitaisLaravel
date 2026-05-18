<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/master.css')); ?>">
    <title>Raios Vitais</title>
</head>
<body>
    <?php if(session()->has('auth_id')): ?>
    <nav>
        <a href="<?php echo e(route('home')); ?>" class="brand">Raios Vitais</a>
        <ul>
            <li><a href="<?php echo e(route('users.index')); ?>">Usuários</a></li>
            <?php if(session('auth_role') === 'admin'): ?>
            <li><a href="<?php echo e(route('funcionarios.index')); ?>">Funcionários</a></li>
            <?php endif; ?>
        </ul>
        <div class="nav-right">
            <span class="nav-role <?php echo e(session('auth_role')); ?>">
                <?php echo e(session('auth_role') === 'admin' ? 'Admin' : 'Funcionário'); ?>

            </span>
            <span class="name"><?php echo e(session('auth_name')); ?></span>
            <form action="<?php echo e(route('admin.logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit">Sair</button>
            </form>
        </div>
    </nav>
    <?php endif; ?>
    <div class="container">
        <?php if(session('message')): ?>
            <div class="alert alert-success"><?php echo e(session('message')); ?></div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-error"><?php echo e(session('error')); ?></div>
        <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH D:\2026\Fatec\DesenvolvimentoWeb\PacoteVitalicio\RaiosVitaisTres\RaiosVitaisLaravel\resources\views/master.blade.php ENDPATH**/ ?>