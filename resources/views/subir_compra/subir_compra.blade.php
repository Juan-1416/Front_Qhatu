<div class="container-fluid">
    <x-heder />
</div>
<link rel="stylesheet" href="css/subir_compra.css">
<body class="fondo2 col-12">

      <section class="julianaLesbi container-fluid d-flex flex-wrap col-xl-12 ">
        <main class="flex-wrap col-12" style="margin-top: 10px;">
        <div class="container tres col-sm-7 col-xl-7">
            <section id="Images" class="images-cards   col-sm-12 col-xl-7">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="  col-sm-4 col-xs-12" id="add-photo-container">
                            <div class="add-new-photo first" id="add-photo">
                                <span><i class="icon-camera"></i></span>
                            </div>
                            <input type="file" multiple id="add-new-photo" name="images[]">
                        </div>
                    </div>
                </form>

        </div>
        <div class="containerUno tres col-xl col-sm-6 ">
            <div class="card container cuatro justify-content-center">
                    <h4 class="mb-3 h4 ">Colores Disponibles </h4>
                    <h6 class="mb-3 "><span class="color-text">Rojo/Verde/Azul/Amarillo/Aqua/Otro</span></h6>
                    <div class=" container radio-group">
                        <div class='radio selected' data-value="red-circle">

                        </div>
                        <div class=' radio2' data-value="blue-circle">
                          <div class="color_circle otra"></div>
                        </div>
                        <div class='radio3' data-value="white-circle">
                          <div class="color_circle otra"></div>
                        </div>
                        <div class='radio4' data-value="white-circle">
                          <div class="color_circle otra"></div>
                        </div>
                        <div class='radio5  ' data-value="white-circle">
                          <div class="color_circle otra"></div>

                        </div>

                </div>
            </div>

      </div>
    </main>





    <section class="container-fluid d-flex flex-wrap col-12">
      <main class="flex-wrap col-12" style="margin-top: 10px;">
      <div class="container tres col-sm-7 radio-group">
          <section id="Images" class="images-cards   col-sm-12">
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Descripcion del producto</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>



        <label for="customRange2" class="radio-group form-label">Cantidad a la Venta </label>
        <input type="range" class="form-range" min="0" max="5" id="customRange2">
          </section>

          <div class="input-group input-group-lg">
            <label for="exampleDataList" class="form-label">Descripcion del producto:</label>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
          </div>
<br>
          <div class="radio-group d-flex col-12 justify-content-center otro">
            <div class="dropdown justify-content-cente">
              <button class="btn btn-secondary dropdown-toggle justify-content-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Tipo de Producto
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Tejidos</a></li>
                <li><a class="dropdown-item" href="#">Argolla</a></li>
                <li><a class="dropdown-item" href="#">Ceramica</a></li>
              </ul>
            </div>
            <input type="text" class="form-control otro" id="validationCustom03" required>
          </div>
          <br>

          <section class="  d-flex col-12 justify-content-center ">
            <button type="button" class="btn btn-warning">Publicar</button>

          </section>

      </div>



  </main>
    </section>
</section>


    <!-- Bootstrap y jQuery -->

    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>

    <!--  /Bootstrap y jQuery -->
  <script>
    $(document).ready(function(){

// Modal

$(".modal").on("click", function (e) {
    console.log(e);
    if (($(e.target).hasClass("modal-main") || $(e.target).hasClass("close-modal")) && $("#loading").css("display") == "none") {
        closeModal();
    }
});

// -> Modal

// Abrir el inspector de archivos

$(document).on("click", "#add-photo", function(){
    $("#add-new-photo").click();
});

// -> Abrir el inspector de archivos

// Cachamos el evento change

$(document).on("change", "#add-new-photo", function () {

    console.log(this.files);
    var files = this.files;
    var element;
    var supportedImages = ["image/jpeg", "image/png", "image/gif"];
    var seEncontraronElementoNoValidos = false;

    for (var i = 0; i < files.length; i++) {
        element = files[i];

        if (supportedImages.indexOf(element.type) != -1) {
            createPreview(element);
        }
        else {
            seEncontraronElementoNoValidos = true;
        }
    }

    if (seEncontraronElementoNoValidos) {
        showMessage("Se encontraron archivos no validos.");
    }
    else {
        showMessage("Todos los archivos se subieron correctamente.");
    }

});

// -> Cachamos el evento change

// Eliminar previsualizaciones

$(document).on("click", "#Images .image-container", function(e){
    $(this).parent().remove();
});

// -> Eliminar previsualizaciones

});

function showModal(card) {
  $("#" + card).show();
  $(".modal").addClass("show");
}

function closeModal() {
  $(".modal").removeClass("show");
  setTimeout(function () {
    $(".modal .modal-card").hide();
  }, 300);
}

function loading(status, tag) {
  if (status) {
    $("#loading .tag").text(tag);
    showModal("loading");
  }
  else {
    closeModal();
  }
}

function showMessage(message) {
  $("#Message .tag").text(message);
  showModal("Message");
}
//Genera las previsualizaciones
function createPreview(file) {
    var imgCodified = URL.createObjectURL(file);
    var img = $('<div class="col-sm-4 col-xs-12"><div class=" container image-container"> <figure> <img src="' + imgCodified + '" alt="Foto del usuario"> <figcaption> <i class="icon-cross"></i> </figcaption> </figure> </div></div>');
    $(img).insertBefore("#add-photo-container");
}
  </script>
</body>
<br>
    <div class="container-fluid">
       <x-footer/>
    </div>
