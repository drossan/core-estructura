
<div class="container">
    <div class="row mt-5">   
        <div class="col-12 text-center">
            <h1>Hola Mundo!!!</h1>
            <div class="row">
                <div class="col-12">
                    <a href=https://github.com/drossan/core-estructura target=_blank class="d-flex align-items-center justify-content-center mb-0" style="color:#24292e;"><i class="fab fa-github fa-2x pr-2"></i> GitHub</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="conatiner">
    <div class="row justify-content-center">
        <h3 class="text-center w-100 my-3">Ejemplo de paginación:</h3>
    </div>
    <div class="row align-items-center justify-content-center">
        <?php 
            // prueba de paginación
            Test::getTest();
            echo Test::getPaginate();
        ?>

    </div>
</div>
