<?php $__env->startSection('cabecalho'); ?>
    Editar álbum
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <form method="post" action="/albuns/<?php echo e($album->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="input-group d-flex justify-content-between">
        <label class="mr-2" for="nome">Nome: </label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo e($album->nome); ?>">
        <label class="ml-2 mr-2" for="plataforma">Plataforma: </label>
        <select id="plataforma" name="plataforma">
            <option value="spotify"<?php echo e($album->plataforma == 'spotify'?'selected':''); ?>>Spotify</option>
            <option value="deezer" <?php echo e($album->plataforma == 'deezer'?'selected':''); ?>>Deezer</option>
            <option value="Tidal" <?php echo e($album->plataforma == 'tidal'?'selected':''); ?>>Tidal</option>
            <option value="amazon" <?php echo e($album->plataforma == 'amazon'?'selected':''); ?>>Amazon Music</option>
            <option value="youtube" <?php echo e($album->plataforma == 'youtube'?'selected':''); ?>>Youtube Music</option>
        </select>
        </div>
        <button class="btn btn-primary mt-2">Editar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gean\Projetos\music-catalog\resources\views/albuns/editar.blade.php ENDPATH**/ ?>