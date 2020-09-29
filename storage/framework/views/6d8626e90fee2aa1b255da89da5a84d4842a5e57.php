<?php $__env->startSection('cabecalho'); ?>
    Álbuns
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<a href="/albuns/<?php echo e($albumId); ?>/dados/create" class="btn btn-dark mb-2">Criar Novo</a>
        <ul class="list-group">
           <?php $__currentLoopData = $dados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item list-group-item-info"><?php echo e($dado->data); ?></li>
                            <li class="list-group-item list-group-item-primary"><?php echo e($dado->descricao); ?></li>
                            <li class="list-group-item list-group-item-secondary"><?php echo e($dado->genero); ?></li>
                            <li class="list-group-item list-group-item-warning"><?php echo e($dado->avaliacao); ?></li>
                            <li class="list-group-item list-group-item-secondary"><?php echo e($dado->comentario); ?></li>
                        </ul>
                    </div>
                    <span class="d-flex align-items-center">
                    <form method="post" action="/albuns/<?php echo e($albumId); ?>/dados/<?php echo e($dado->Id); ?>"
                        onsubmit="return confirm('Tem certeza que deseja remover o dado?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger btn-sm mr-2">Excluir</button>
                        </form>
                    <a href="/albuns/<?php echo e($albumId); ?>/dados/<?php echo e($dado->Id); ?>" class="btn
                        btn-warning btn-sm mr-2">Editar</a>
                    </span>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gean\Projetos\music-catalog\resources\views/dados/listar.blade.php ENDPATH**/ ?>