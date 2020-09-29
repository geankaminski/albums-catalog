<?php $__env->startSection('cabecalho'); ?>
Adicionar Álbum
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<form method="post" action="/albuns">
    <?php echo csrf_field(); ?>
    <div class="input-group d-flex justify-content-between">
        <label class="mr-2" for="nome">Nome: </label>
        <input type="text" class="form-control" id="nome" name="nome">
        <label class="ml-2 mr-2" for="plataforma">Plataforma: </label>
        <select id="plataforma" name="plataforma">
            <option value="spotify">Spotify</option>
            <option value="deezer">Deezer</option>
            <option value="Tidal">Tidal</option>
            <option value="amazon">Amazon Music</option>
            <option value="youtube">Youtube Music</option>
        </select>
    </div>
    <button class="btn btn-primary mt-2">Adicionar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gean\Projetos\music-catalog\resources\views/albuns/adicionar.blade.php ENDPATH**/ ?>