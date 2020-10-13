
<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('consumables.store')); ?>" method="post">
    <?php echo csrf_field(); ?>

    <div class="row">
    <div class="col-md">
        <label for="">Articulo</label>
        <input class="form-control" type="text" name="name" id="">
    </div>
    <div class="col-md">
        <label for="">Precio</label>
        <input class="form-control" type="text" name="price" id="">
    </div>
    <div class="col-md">
        <label for="">Cantidad</label>
        <input class="form-control" type="number" name="quantity" id="">
    </div>
</div>


    <div class="text-center">
        <input class="btn btn-info" type="reset" value="Restablecer">
        <input class="btn btn-primary" type="submit" value="Guardar">

    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/consumables/create.blade.php ENDPATH**/ ?>