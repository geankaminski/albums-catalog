<?php $__env->startSection('cabecalho'); ?>
    Álbuns
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
        <?php if(!empty($mensagem)): ?>
            <div class="alert alert-success">
                <?php echo e($mensagem); ?>

            </div>
        <?php endif; ?>
        <a href="/albuns/create" class="btn btn-dark mb-2">Criar Novo</a>
        <ul class="list-group">
           <?php $__currentLoopData = $albuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item list-group-item-info"><?php echo e($album->nome); ?></li>
                            <li class="list-group-item list-group-item-secondary"><?php echo e($album->plataforma); ?></li>
                        </ul>
                    </div>
                    <span class="d-flex align-items-center">
                        <form method="post" action="/albuns/<?php echo e($album->id); ?>"
                        onsubmit="return confirm('Tem certeza que deseja remover <?php echo e($album->nome); ?>?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger btn-sm mr-2">Excluir</button>
                        </form>
                        <a href="albuns/<?php echo e($album->id); ?>/edit" class="btn
                        btn-warning btn-sm mr-2">Editar</a>
                        <a href="albuns/<?php echo e($album->id); ?>/dados" class="btn
                        btn-primary btn-sm">Ver dados</a>
                    </span>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gean\Projetos\music-catalog\resources\views/albuns/listar.blade.php ENDPATH**/ ?>