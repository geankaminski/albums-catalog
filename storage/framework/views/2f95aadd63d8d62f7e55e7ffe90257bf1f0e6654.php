<?php $__env->startSection('cabecalho'); ?>
Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
   <form method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" required min="1" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">
            Entrar
        </button>
        <a href="/register" class="btn btn-secondary mt=3">
            Registrar-se
        </a>
   </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gean\Projetos\music-catalog\resources\views/autenticacao/login.blade.php ENDPATH**/ ?>