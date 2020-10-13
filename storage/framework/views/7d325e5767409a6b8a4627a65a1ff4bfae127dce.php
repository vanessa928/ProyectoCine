<div>

    <link rel="stylesheet" href="<?php echo e(asset('css/carousel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    
    
    <div id="myCarousel" class="carousel slide carousel-fade col-12" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo e(asset('img/4.jpg')); ?>" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>El conjuro 3: El diablo me obligo a hacerlo</h1>
                        <p>Ed y Lorraine Warren deberán afrontar un nuevo caso que se
                            presenta con un hombre torcido, Arne Cheyne Johnson, que es 
                            acusado de asesinato tras haber sido poseído por un demonio. 
                            La historia se ubicará en 1981 y se verán las repercusiones 
                            judiciales de las posesiones demoniacas.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Compra tu entrada</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('img/6.jpg')); ?>" alt="" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>La historia se centraba en Tim Templeton, un niño de siete años que 
                            empieza a notar celos en el momento en que sus padres traen a casa 
                            a su nuevo hermano Theodore Sin embargo, Theodore esconde un secreto: 
                            es el director ejecutivo de una empresa a la que van los bebés que no 
                            son como los demás</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('img/5.jpg')); ?>" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Mulán.</h1>
                        <p>El emperador chino emite un decreto que exige que cada hogar debe reclutar a
                             un varón para luchar con el ejército imperial en la guerra contra los Hunos.
                              Para salvar a su anciano padre de este deber, su única hija Fa Mulan se hace
                               pasar por soldado y toma su lugar. La joven se someterá a un duro 
                               entrenamiento hasta hacerse merecedora de la estima y de la confianza del
                                resto de su escuadrón.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    </div><?php /**PATH C:\laragon\www\cine02\resources\views/layouts/carousel.blade.php ENDPATH**/ ?>