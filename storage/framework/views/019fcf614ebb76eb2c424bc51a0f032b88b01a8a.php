
<?php $__env->startSection('titulo','Página Inicial'); ?>
<?php $__env->startSection('conteudo'); ?>
    <h1 class="text-center">Últimas Notícias</h1>
    <hr>

    <?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
            <a href="noticias/<?php echo e($noticia->id); ?>">
                <img src="imagens/<?php echo e($noticia->imagem); ?>" alt="<?php echo e($noticia->titulo); ?>" class="w-100">
            </a>
            <div class="card-body">
                <h2><?php echo e($noticia->titulo); ?></h2>
                <p>Categoria: <a href="categorias/<?php echo e($noticia->cid); ?>"><?php echo e($noticia->categoria); ?></a><br>
                <p>Data de postagem: <?php echo e($noticia->data1); ?></p>
            </div>
        </div>
        <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($noticias->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\noticias\resources\views/categorias.blade.php ENDPATH**/ ?>