<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <style>
    .bg-light {
      min-height: 450px;
    }
    .fontStyle {
      background-color: #181919db!important;
      border-radius: 15px;
    }
    .form-group {
      margin-bottom: 2%;
    }
    </style>
<main class="bg-light">
<div class="container" style="text-align: -webkit-center;">
<div class="content-wrapper col-12 col-sm-9">    
<section class="content-header " style="text-align: -webkit-center;padding-top: 20px;">
          <h2 class="fontStyle fw-normal" style="color: white;padding: 0.5%;">Contacto</h2>
</section>
<section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div>
              <h2 style="color: red; -webkit-text-stroke: 0.5px black;">M.ALVAREZ</h2><br><div style="color: red;font-size: x-large;-webkit-text-stroke: 0.5px black;">SERVICIOS INMOBILIARIOS</div><br><br>
              <p class="lead mb-5">Tel: (+54 9) 11-3556-0795 / 11-5805-2424<br><br>
                info@malvarezsi.com
              </p>
            </div>
          </div>
          <div class="col-7">
            <form id="contactoForm" method="POST">
              <div class="form-group">
                <div class="row">
                <div class="col-2"><label for="inputName">Nombre*</label></div>
                <div class="col-10"><input type="text" id="inputName" name="inputName" class="form-control"></div>
              </div><br>
              <div class="form-group">
                <div class="row">
                <div class="col-2"><label for="inputEmail">E-Mail*</label></div>
                <div class="col-10"><input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="usuario@ejemplo.com"></div>
              </div><br>
              <div class="form-group">
                <div class="row">
                <div class="col-2"><label for="tel">Teléfonos</label></div>
                <div class="col-4"><input type="text" class="form-control" id="Tel" name="Tel"></div>
                <div class="col-2"><label for="tel"> / </label></div>
                <div class="col-4"><input type="text" class="form-control" id="Tel2" name="Tel2"></div>
                </div>
              </div><br>
              <div class="form-group">
                <div class="row">
                <div class="col-2"><label for="inputSubject">Asunto*</label></div>
                <div class="col-10"><input type="text" id="inputSubject" name="asunto" class="form-control"></div>
              </div><br>
              <div class="form-group">
                <div class="row">
                <div class="col-2"><label for="inputMessage">Mensaje*</label></div>
                <div class="col-10"><textarea id="inputMessage" class="form-control" name="mensaje" rows="4"></textarea></div>
              </div><br>
              <div class="form-group" style="float: right;">
                <input type="button" class="btn btn-primary" value="Enviar" onclick="validateForm();">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<!--Section: Contact v.2-->
    <!--Custom scripts-->
    <script>

function validateForm() {
     var x =  document.getElementById('inputName').value;
     if (x == "") {         
         Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'Nombre no puede quedar vacío.',
              showConfirmButton: false,
              timer: 2000
            })         
         return false;
     }
     var email =  document.getElementById('inputEmail').value;
     var tel =  document.getElementById('Tel').value;
     var tel2 =  document.getElementById('Tel2').value;
     if (email == "" && tel == "" && tel2 == "") {      
         Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'Debe ingresar un medio de contacto.',
              showConfirmButton: false,
              timer: 2000
            })
         return false;
     } else {
         var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
         if(!re.test(email)){             
             Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'Email tiene un formato inválido.',
              showConfirmButton: false,
              timer: 2000
            })             
             return false;
         }
     }
     x =  document.getElementById('inputSubject').value;
     if (x == "") {
         Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'Asunto no puede quedar vacío.',
              showConfirmButton: false,
              timer: 2000
            })
         return false;
     }
     x =  document.getElementById('inputMessage').value;
     if (x == "") {
         Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'Mensaje no puede quedar vacío.',
              showConfirmButton: false,
              timer: 2000
            })
         return false;
     }

      $.ajax({
        url: "<?=site_url('../../contactoMail')?>",
        type: 'POST', 
        data: {
          inputName : $("#inputName").val(),
          inputEmail:$("#inputEmail").val(),
          Tel:$("#Tel").val(),
          Tel2:$("#Tel2").val(),
          asunto:$("#inputSubject").val(),
          mensaje:$("#inputMessage").val()
        },
        success: function(data){
          if(data){
            
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'Se envio su Consulta.',
              showConfirmButton: false,
              timer: 2000
            })
            $("#inputName").val("");
            $("#inputEmail").val("");
            $("#Tel").val("");
            $("#Tel2").val("");
            $("#inputSubject").val("");
            $("#inputMessage").val("");
          }else{
            Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'Error al enviar la consulta.',
              showConfirmButton: false,
              timer: 2000
            })
          }
        },
        error: function(data){
          Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'Error al enviar la consulta.',
              showConfirmButton: false,
              timer: 2000
            })
        }   
      });
     
}  


</script>
</div>
</div>
</main>