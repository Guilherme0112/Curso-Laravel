

<?php $__env->startSection('title', 'Usuarios'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1>Criar Registros</h1>
        <hr>
        <form action="<?php echo e(route('curso-store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class='form-control'placeholder="Digite seu nome" required>
                </div> 
                <br>
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" name="cidade" class='form-control'placeholder="Digite sua cidade" required>
                </div> 
                <br>
                <div class="form-group">
                    <label for="nascimento">Nascimento:</label>
                    <input type="number" name="nascimento" class='form-control'placeholder="Digite seu ano de nascimento" required>
                </div> 
                <br>
                <div class="form-group">
                    <label for="altura">Altura:</label>
                    <input type="number" name="altura" class='form-control'placeholder="Digite sua altura" required>
                </div> 
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class='btn btn-primary'>
                    <a href="<?php echo e(route('curso-index')); ?>" class='btn btn-danger'>Voltar</a>
                </div> 
            </div>
        </form>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/curso/create.blade.php ENDPATH**/ ?>