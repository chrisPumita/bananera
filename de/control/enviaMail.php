<?php
//datos que llegan por POST / o funccion dependiendo el uso


//incluimos la libreria
require("./lib-mail/class.phpmailer.php");

function enviaCorreo($nombre, $correo, $empresa, $telefono, $pais, $sector, $comentario){
    if (EnviaCorreoEmpresa($nombre, $correo, $empresa, $telefono, $pais, $sector, $comentario))
        return enviaCorreoCliente($nombre, $correo);
}

function EnviaCorreoEmpresa($nombre, $correo, $empresa, $telefono, $pais, $sector, $comentario){
    include_once "./SERVER.php";
    // determinar el horario y zona
    date_default_timezone_set('America/Mexico_City');
    setlocale(LC_TIME, 'es_MX.UTF-8');
    $fecha_hora = date("Y-m-d H:i:s");

    //creando un obj de PHPMailer
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

    //destinos
    /*
     * tracker@reckreastudios.com
     * pruebasmail@reckreastudios.com
     * */
    $contacto = USER_MAIL;
    $pass_contacto = PW_COUNT;
    $para = MAIL_TO_SEND; // PARA ENVIAR EL CORREO AL QUE SE ANUNCIA

//asignar al host que manejaremos
    //PUede ser segun sea el caso empresa.com.mx
    $mail->Host = HOST_SERVER_MAIL;  // mail. o solo dominio - Servidor de Salida. (recomiendo sin mail.)
    $mail->SMTPAuth = true;
    $mail->Username = $contacto;  // Correo Electrónico para SMTP correo@dominio.tld
    $mail->Password = $pass_contacto; // Contraseña para SMTP

    //destino
    $mail->From     = $contacto;    // Correo Electronico para SMTP
    $mail->FromName = 'Grupo Esfuerzo | Bananera Web Site';
    $mail->AddAddress($para); // Dirección a la que llegaran los mensajes
    //OPCIONAL
   // $mail->addCC("proescu.contacto@gmail.com");

    $mail->Port = PORT_SMTP;
    $mail->IsHTML(true);
    $mail->Subject  =  "Se han contactado por el sitio web!";
    $mail->Body = '
                 <div style="background-color:#f4f4f4">
                  <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;"></span>   
                  <div style="Margin:0px auto;max-width:600px">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top">
                            <div class="m_2518046461046522955mj-column-per-100 m_2518046461046522955outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top" width="100%">
                                <tbody>
                                  <tr>
                                    <td align="center" style="font-size:0px;padsding:10px 25px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;word-break:break-word">
                                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px">
                                        <tbody>
                                          <tr>
                                            <td style="width:600px">
                                              <a href="https://grupoesfuerzo.com/" target="_blank" data-saferedirecturl="https://grupoesfuerzo.com/">
                                              <img alt="" height="auto" src="https://grupoesfuerzo.com/headerMail-min.png" style="border:none;border-radius:1px;display:block;outline:none;text-decoration:none;height:auto;width:100%" title="" width="600" class="CToWUd">
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:5px;padding-top:5px;text-align:center;vertical-align:top">
                            <div class="m_2518046461046522955mj-column-per-100 m_2518046461046522955outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top" width="100%">
                                <tbody>
                                  <tr>
                                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:5px;padding-bottom:0px;word-break:break-word">
                                      <div style="font-family:Arial,sans-serif;font-size:13px;line-height:22px;text-align:left;color:#55575d">
                                      <h3>Registrado el día: '.$fecha_hora.'</h3>
                                        <h1 style="font-size:20px;font-weight:bold"><span style="font-size:16px">Nombre: '.$nombre.',</span></h1>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word">
                                      <div style="font-family:Arial,sans-serif;font-size:13px;line-height:22px;text-align:left;color:#55575d">
                                      <h3>Empresa:</h3>
                                        <p style="font-size:13px;margin:10px 0">'.$empresa.'</p>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top">
                            <div class="m_2518046461046522955mj-column-per-100 m_2518046461046522955outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top" width="100%">
                                <tbody>
                                  <tr>
                                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:5px;padding-bottom:0px;word-break:break-word">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word">
                                      <div style="font-family:Arial,sans-serif;font-size:13px;line-height:22px;text-align:left;color:#55575d">
                                        Telefono: '.$telefono.' <br>
                                        Correo: '.$correo.' <br>
                                        Pais: '.$pais.' <br>
                                        Sector: '.$sector.' <br>
                                        Comentario: '.$comentario.' <br>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:10px;padding-top:1px;text-align:center;vertical-align:top">
                            <div class="m_2518046461046522955mj-column-per-100 m_2518046461046522955outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top" width="100%">
                                <tbody>
                                  <tr>
                                    <td style="font-size:0px;padding:10px 25px;padding-right:0px;padding-left:0px;word-break:break-word">
                                      <p style="border-top:solid 2px #e7e7e7;font-size:1;margin:0px auto;width:100%">
                                      </p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word">
                                      <div style="font-family:Arial,sans-serif;font-size:13px;line-height:22px;text-align:left;color:#55575d">
                                        <p style="font-size:13px;line-height:8px;margin:10px 0"><b>EL ESFUERZO BANANERA</b></p>
                                        <p style="font-size:13px;margin:10px 0">Oficinas San José, Costa Rica.
                                                        200 Metros Norte del Parque la
                                                        Amistad, Rohrmoser # 103.</p>
                                        <p style="font-size:13px;margin:10px 0">&nbsp;+506 4036 7160 | &nbsp;+506 8702 7972</p>
                                        <p style="font-size:13px;margin:10px 0">E: <a href="mailto:info@grupoesfuerzo.com" target="_blank">info@grupoesfuerzo.com</a></p>
                                        <p style="font-size:13px;margin:10px 0"><u>Términos de Uso</u>&nbsp;|&nbsp;<u>Política de Privacidad</u>&nbsp;</p>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div style="Margin:0px auto;max-width:600px">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top">
                            <div class="m_2518046461046522955mj-column-per-100 m_2518046461046522955outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top" width="100%">
                                <tbody>
                                  <tr>
                                    <td align="center" style="font-size:0px;padding:0px 20px 0px 20px;padding-top:0px;padding-right:15px;padding-bottom:0px;word-break:break-word">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
    ';
    return $mail->Send();
}


function enviaCorreoCliente($nombre, $correo){
    include_once "./SERVER.php";
    // determinar el horario y zona
    date_default_timezone_set('America/Mexico_City');
    setlocale(LC_TIME, 'es_MX.UTF-8');
    $fecha_hora = date("Y-m-d H:i:s");

    //creando un obj de PHPMailer
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

    //destinos
    /*
     * tracker@reckreastudios.com
     * pruebasmail@reckreastudios.com
     * */
    $contacto = USER_MAIL;
    $pass_contacto = PW_COUNT;
    $para = $correo; // PARA ENVIAR EL CORREO AL QUE SE ANUNCIA

//asignar al host que manejaremos
    //PUede ser segun sea el caso empresa.com.mx
    $mail->Host = HOST_SERVER_MAIL;  // mail. o solo dominio - Servidor de Salida. (recomiendo sin mail.)
    $mail->SMTPAuth = true;
    $mail->Username = $contacto;  // Correo Electrónico para SMTP correo@dominio.tld
    $mail->Password = $pass_contacto; // Contraseña para SMTP

    //destino
    $mail->From     = $contacto;    // Correo Electronico para SMTP
    $mail->FromName = 'Grupo Esfuerzo | Bananera';
    $mail->AddAddress($para); // Dirección a la que llegaran los mensajes
    //OPCIONAL
    $mail->Port = PORT_SMTP;
    $mail->IsHTML(true);
    $mail->Subject  =  "Grupo Esfuerzo Contacto";
    $mail->Body = '
                 <div style="background-color:#f4f4f4">
                  <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;"></span>   
                  <div style="Margin:0px auto;max-width:600px">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top">
                            <div class="m_2518046461046522955mj-column-per-100 m_2518046461046522955outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top" width="100%">
                                <tbody>
                                  <tr>
                                    <td align="center" style="font-size:0px;padsding:10px 25px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;word-break:break-word">
                                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px">
                                        <tbody>
                                          <tr>
                                            <td style="width:600px">
                                              <a href="https://grupoesfuerzo.com/" target="_blank" data-saferedirecturl="https://grupoesfuerzo.com/">
                                              <img alt="" height="auto" src="https://grupoesfuerzo.com/headerMail-min.png" style="border:none;border-radius:1px;display:block;outline:none;text-decoration:none;height:auto;width:100%" title="" width="600" class="CToWUd">
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:5px;padding-top:5px;text-align:center;vertical-align:top">
                            <div class="m_2518046461046522955mj-column-per-100 m_2518046461046522955outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top" width="100%">
                                <tbody>
                                  <tr>
                                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:5px;padding-bottom:0px;word-break:break-word">
                                      <div style="font-family:Arial,sans-serif;font-size:13px;line-height:22px;text-align:left;color:#55575d">
                                        <h1 style="font-size:20px;font-weight:bold"><span style="font-size:16px">Thanks '.$nombre.',</span></h1>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top">
                            <div class="m_2518046461046522955mj-column-per-100 m_2518046461046522955outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top" width="100%">
                                <tbody>
                                  <tr>
                                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:5px;padding-bottom:0px;word-break:break-word">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word">
                                      <div style="font-family:Arial,sans-serif;font-size:13px;line-height:22px;text-align:left;color:#55575d">
                                        <h2>Thank you very much for your recent inquiry, we have received same and you will be contacted by our Sales/Marketing Department within the next 5 business days.</h2>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:10px;padding-top:1px;text-align:center;vertical-align:top">
                            <div class="m_2518046461046522955mj-column-per-100 m_2518046461046522955outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top" width="100%">
                                <tbody>
                                  <tr>
                                    <td style="font-size:0px;padding:10px 25px;padding-right:0px;padding-left:0px;word-break:break-word">
                                      <p style="border-top:solid 2px #e7e7e7;font-size:1;margin:0px auto;width:100%">
                                      </p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word">
                                      <div style="font-family:Arial,sans-serif;font-size:13px;line-height:22px;text-align:left;color:#55575d">
                                        <p style="font-size:13px;line-height:8px;margin:10px 0"><b>EL ESFUERZO BANANERA</b></p>
                                        <p style="font-size:13px;line-height:8px;margin:10px 0">Oficinas San José, Costa Rica. <br>
                                                        200 Metros Norte del Parque la <br>
                                                        Amistad, Rohrmoser # 103.</p> <br>
                                        <p style="font-size:13px;line-height:8px;margin:10px 0">&nbsp;+506 4036 7160 | &nbsp;+506 8702 7972</p>
                                        <p style="font-size:13px;line-height:8px;margin:10px 0">E: <a href="mailto:info@grupoesfuerzo.com" target="_blank">info@grupoesfuerzo.com</a></p>
                                        <p style="font-size:13px;line-height:8px;margin:10px 0"><u>Términos de Uso</u>&nbsp;|&nbsp;<u>Política de Privacidad</u>&nbsp;</p>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div style="Margin:0px auto;max-width:600px">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top">
                            <div class="m_2518046461046522955mj-column-per-100 m_2518046461046522955outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top" width="100%">
                                <tbody>
                                  <tr>
                                    <td align="center" style="font-size:0px;padding:0px 20px 0px 20px;padding-top:0px;padding-right:15px;padding-bottom:0px;word-break:break-word">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
    ';
    return $mail->Send();
}

