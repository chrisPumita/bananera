// lo que sejecuta primero
$(document).ready(function () {
    //-------------------seleccionando el elemento boton agregar elemento

    $('#frm-contacto').submit(function (e) {
        let terminos = !document.getElementById("terms").checked ? true:false;
        if(terminos) {
           alert("No selecciono los terminos y condiciones");
        }
        else{
            terminos = true;
            const valoresCajas = {
                name: $('#name').val(),
                email: $('#email').val(),
                empresa: $('#empresa').val(),
                telefono: $('#telefono').val(),
                pais: $('#pais').val(),
                sector: $('#sector').val(),
                comentario: $('#comentario').val(),
                terms: terminos
            };
            let url = "./control/send.php";
            $.post(url,valoresCajas,function (mje) {
                //tratamos los datos y hacemos acciones
                console.log(mje);

                let template = `
                            <div class="alert alert-success bg-primary alert-dismissible fade show" role="alert">
                                   <h4 class="alert-heading">Thank you!</h4>
                              <p>Thank you! Your submission has been received. Your request will be dealt with shortly at ${email}</p>
                              <hr>
                              <p class="mb-0">Want to send another request?</p>
                              <form class="my-form w-50 d-flex py-3 form-again ">
                              <a href="./contacto.php">
                                  <button class="btn-grid" type="button">
                                        <span class="back">
                                            <i class="fas fa-paper-plane"></i>
                                          <img src="./assets/image/email-icon.svg" alt="">
                                        </span>
                                        <span class="front">New request </span>
                                </button>
                              </a>
                              <a href="./index.php">
                                <button class="btn-grid" type="button">
                                    <span class="back">
                                        <i class="fas fa-paper-plane"></i>
                                      <img src="./assets/image/logo.svg" width="40" alt="">
                                    </span>
                                    <span class="front">Go Home</span>
                                </button>
                                </a>
                            </form>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
                $('#actionSend').html(template);

            });
            $('#frm-contacto').trigger('reset');

            e.preventDefault();
        }
    });
    //-------------------seleccionando el elemento boton agregar elemento

});


/*

        //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)




            let template = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                              ${mje}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
            $("#mjeAlertaAU").html(template);

* */