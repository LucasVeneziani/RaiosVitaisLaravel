<?php $__env->startSection('content'); ?>


<?php if(session()->has('auth_id')): ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/paineladmin.css')); ?>">
        <title>Document</title>
    </head>
    <body>
        <p>Painel Admin - WIP</p>
    </body>
    </html>
<?php else: ?>
    <meta http-equiv="refresh" content="0;url=<?php echo e(route('home')); ?>">
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\2026\Fatec\DesenvolvimentoWeb\PacoteVitalicio\RaiosVitaisQuatro\RaiosVitaisLaravel\resources\views/paineladmin.blade.php ENDPATH**/ ?>