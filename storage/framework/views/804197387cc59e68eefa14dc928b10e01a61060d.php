<link href="<?php echo e(asset('css/carousel.css')); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">

<?php $__env->startSection('content'); ?>
    
<div class="col-12">
    <?php echo $__env->make('layouts.carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<!--

<div class="row">
<div class="col-1 bg-danger">1</div>
<div class="col-1 bg-dark">2</div>
<div class="col-1 bg-info">3</div>
<div class="col-1 bg-white">4</div>
<div class="col-1 bg-success">5</div>
<div class="col-1 bg-warning">6</div>
<div class="col-1 bg-info">7</div>
<div class="col-1 bg-secondary">8</div>
<div class="col-1 bg-light">9</div>
<div class="col-1 bg-danger">10</div>
<div class="col-1 bg-info">11</div>
<div class="col-1 bg-secondary">12</div>
</div>
-->
<!-- Agregar javaScript-->

<div class="row">
    <div class="col-1"></div>
    <div class="col-md-5">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Design</strong>
            <h3 class="mb-0">Post title</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
          </div>
        </div>
    </div>
        <div class="col-md-5">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">Design</strong>
                <h3 class="mb-0">Post title</h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="stretched-link">Continue reading</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              </div>
            </div>
          </div>
      </div>
<div class="class col-1"></div>
</div>


<script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>


<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/welcome.blade.php ENDPATH**/ ?>