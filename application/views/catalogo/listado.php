    <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 g-3">

        <?php 
        /*
        echo "<pre>";
        var_dump($catalogo);
        echo "</pre>";*/
          foreach ($catalogo as $key => $itemCatalogo) 
          { ?>


      <div class="row container border rounded " style="padding-left: 0px;width: 100%;height: 100%;margin-bottom: 2%;">

          <div class="col-5">
          <div class="card shadow-sm" style="width: min-content;">        
          <div  id="carouselExampleIndicators-<?=$itemCatalogo['propiedad']->id_propiedad?>" class="carousel slide" style="width: 100%;height: 100%;">

            <div class="carousel-inner">

              <?php
                  $cont=0;
                  foreach ($itemCatalogo['imagenes'] as $key => $value) {                
                    if($cont==0){
                      echo '<div class="carousel-item active">';
                      }else{
                        echo '<div class="carousel-item">';
                      }
                      echo '<img src="data:image/jpeg;base64,'.$value->base64.'" class="d-block w-100 listado-Carrusel" alt="...">
                          </div>';
                    $cont++;
                  }
              ?>


            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators-<?=$itemCatalogo['propiedad']->id_propiedad?>" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators-<?=$itemCatalogo['propiedad']->id_propiedad?>" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>


          </div>
          </div>
        </div>
        <div class="col-7 p-3 d-flex flex-column position-static">
          <?php 
              if($itemCatalogo['propiedad']->precio != NULL)
              {
                echo '<h3 class="mb-0">$ '.$itemCatalogo['propiedad']->precio.'</h3>';
              }    

              if($itemCatalogo['propiedad']->expensas != NULL)
              {
                echo '<div class="mb-1 text-muted">+ $ '.$itemCatalogo['propiedad']->expensas.' Expensas</div>';
              }              
            ?>
          
          <br>
          <p>
            <span style="padding-right: 5%;"><i class="fas fa-ruler-combined"> </i> 80 m²</span>
            <?php 
              if($itemCatalogo['propiedad']->ambientes != "0" && $itemCatalogo['propiedad']->ambientes != NULL)
              {
                echo '<span style="padding-right: 5%;"><i class="fas fa-door-open"></i> '.$itemCatalogo['propiedad']->ambientes.' amb.</span> ';
              }       

              if($itemCatalogo['propiedad']->dormitorios != "0" && $itemCatalogo['propiedad']->dormitorios != NULL)
              {
                echo '<span style="padding-right: 5%;"><i class="fas fa-bed"></i> '.$itemCatalogo['propiedad']->dormitorios.' dorm.</span> ';
              }              
            ?>
          </p>
          <p class="card-text mb-auto"> </p>
           <h4 class="mb-0">BOULOGNE SUR MER 1590. Entre Illia y Pedriel</h4>
          <div class="mb-1 text-muted">Villa Maipu, General San Martín</div>
          <!--<a href="#">Continue reading</a>-->
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="button">Contactar</button>
          </div>
        </div>
    </div>
      <?php } ?>

      </div>
    </div>
  </div>




<!--

    <div class="col-md-6">
      <div class="row container border rounded  " style="padding-left: 0px;">



        <div class="col">
          <div class="card shadow-sm">  
            <div id="carouselPropiedadesDestacadas1" class="carousel slide" style="width: 100%;width: 100%;height: 100%;">
              <ol class="carousel-indicators">
              <li data-bs-target="#carouselPropiedadesDestacadas1" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselPropiedadesDestacadas1" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselPropiedadesDestacadas1" data-bs-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/ph1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/ph1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/casa2.jpg" class="d-block w-100" alt="...">
              </div>
              </div>
              <a class="carousel-control-prev" href="#carouselPropiedadesDestacadas1" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselPropiedadesDestacadas1" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
              </a>
            </div>
          </div>
        </div>

-->
<!--
        <div class="col p-4 d-flex flex-column position-static">
         
          <h3 class="mb-0">$ 24.000</h3>
          <div class="mb-1 text-muted">+ $ 12.000 Expensas</div>
          <br>
          <p>
            <span style="padding-right: 5%;"><i class="fas fa-ruler-combined"> </i> 80 m²</span>
            <span style="padding-right: 5%;"><i class="fas fa-door-open"></i> 3 amb.</span>
            <span style="padding-right: 5%;"><i class="fas fa-bed"></i> 2 dorm.</span>
          </p>
          <p class="card-text mb-auto"> </p>
           <h4 class="mb-0">BOULOGNE SUR MER 1590. Entre Illia y Pedriel</h4>
          <div class="mb-1 text-muted">Villa Maipu, General San Martín</div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="button">Contactar</button>
          </div>
        </div>
      </div>
    </div>
-->





