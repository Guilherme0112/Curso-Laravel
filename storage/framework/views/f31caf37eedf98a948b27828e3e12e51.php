

<?php $__env->startSection('title', 'Usuarios'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10">
                <h1>Usuarios</h1>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo e(route('curso-create')); ?>" class="btn btn-success">Registrar pessoas</a>
            </div>
        </div>
        <table  class="table mt-3">
            <thead>
                <tr>
                    <th scape='col'>#</th>
                    <th scape='col'>Nome:</th>
                    <th scape='col'>Cidade:</th>
                    <th scape='col'>Nascimento:</th>
                    <th scape='col'>Altura:</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $pessoas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pessoa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($pessoa->id); ?></td>
                    <td><?php echo e($pessoa->nome); ?></td>
                    <td><?php echo e($pessoa->cidade); ?></td>
                    <td><?php echo e($pessoa->nascimento); ?></td>
                    <td><?php echo e($pessoa->altura); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/curso/index.blade.php ENDPATH**/ ?>