<?php $__env->startSection('cabecalho'); ?>
    Álbuns
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<form method="post" action="/albuns/<?php echo e($albumId); ?>/dados">
    <?php echo csrf_field(); ?>
    <div>
        <label class="mr-2" for="data">Data: </label>
        <input type="date" class="form-control" id="data" name="data">
        <br>
        <label class="mr-2" for="descricao">Descrição: </label><br>
        <textarea id="descricao" name="descricao" rows="3" cols="75"></textarea><br>
        <label class="mr-2" for="genero">Genero: </label>
        <input type="text" class="form-control" id="genero" name="genero">
        <br>
        <label class="mr-2" for="avaliacao">Avaliação: </label>
        <input type="text" class="form-control" id="avaliacao" name="avaliacao">
        <br>
        <label class="mr-2" for="comentario">Comentário: </label><br>
        <textarea id="comentario" name="comentario" rows="5" cols="75"></textarea>
    </div>
    <button class="btn btn-primary mt-2">Adicionar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gean\Projetos\music-catalog\resources\views/dados/adicionar.blade.php ENDPATH**/ ?>