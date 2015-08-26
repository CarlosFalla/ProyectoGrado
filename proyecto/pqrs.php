<?php
/* require('conexion.php');

    if (isset($_POST['email']) && isset($_POST['password'])){
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $celular = $_POST['celular'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $password = (md5($_POST['password']));
        $numeroTarjeta = $_POST['numeroTarjeta'];
        $csv = $_POST['csv'];
        $caducidad = $_POST['caducidad'];
        $titular = $_POST['titular'];
        $pais = $_POST['pais'];
        $postal = $_POST['postal'];
 
        $query = "INSERT INTO `usuario` (nombre, apellidos, celular, telefono, email, password, numeroTarjeta, csv, caducidad, titular, pais, postal) VALUES ('$nombre', '$apellidos', '$celular', '$telefono', '$email', '$password', '$numeroTarjeta', '$csv', '$caducidad', '$titular', '$pais', '$postal')";
        $result = mysql_query($query);
        if($result){
           $msg = "<h2>Usuario registrado exitosamente</h2>";
        }
    }*/
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  
  <link rel="shortcut icon" href="img/mini.ico" type="image/png" />
  <title>PQRS Uniajc</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"><img src="img/logo.png" alt="uniajc"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Inicio</a></li>
        <?php
    /*if(isset($_SESSION['nombre'])){
        echo "<li><a href='logout.php'>Salir</a></li>";
        echo "<li><a>" . $_SESSION['nombre'] . "</a></li>";
    }else{*/
 ?>
        <li><a href="pqrs.php">PQRS</a></li>
        <!-- Modal Trigger -->
 <a class="waves-effect waves-light btn modal-trigger" href="#modal3">Login</a>

          <!-- Modal Structure -->
          <div id="modal3" class="modal modal-fixed-footer edit-modal">
            <div class="modal-content">
              <div class="center col s12">
                <img src="img/balon.png" alt="Los Meleadores">
              </div>
              <h4 class="center color-h4">Login</h4>
              <form action="log.php" method="POST" class="col s12">
                    <div class="col s12">
                      <input placeholder="Email" id="email" type="email" name="email" class="validate" required>
                    </div>
                    <div class="col s12">
                      <input placeholder="Password" id="password" type="password" name="password" class="validate" required>
                    </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                <button class="btn waves-effect waves-green" type="submit" name="action">Entrar</button>
            </div>
          </form>
        </div>
          </div>
          <?php //} ?>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="reservas.php">Reservar</a></li>
        <li><a href="equipos.php">Ver Equipos</a></li>
        <li><a href="registro.php">Registrarse</a></li>
        <li><a href="#">Login</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
  </nav>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12 pa-left-right">
          <div class="icon-block">
            </br>
            <h5 align="center">Recepción de PQRS</h5>
            </div>
            </div>
        </div>
          </br>
          <div class="row">
            <div class="col s6 pa-left-right" align="right">
              <label>-</label>
            </div>
          <div class="col s6 pa-left-right" align="center">
          <div class="icon-block border right">
            <p class="light">Sus comentarios son importantes para la UNIAJC.</br>
            Para un mejor servicio diligencie sus datos personales.</p>
          </div>
        </div>
      </div>
<?php
   /* if(isset($msg) & !empty($msg)){
    echo $msg;
    }else{

    s12 m4*/
 ?>
              <div class="row">
                <form action="" method="POST" class="col s12">
                  <div class="row">
                    <div class="input-field col s6 pa-left-right">
                      <i class="mdi-action-event prefix"></i>
                      <!-- <input placeholder="Click Aqui!" id="icon_today" name="fecha" type="text" class="datepicker" class="validate" required> -->
          <input name="fecha" type="text" id="icon_today" disabled value="<?php echo date('m/d/Y'); ?>">

<!-- <script>
var mydate=new Date();
var year=mydate.getYear();
if (year < 1000)
year+=1900;
var day=mydate.getDay();
var month=mydate.getMonth()+1;
if (month<10)
month="0"+month;
var daym=mydate.getDate();
if (daym<10)
daym="0"+daym;
document.write("<small><font color='000000' face='Arial'><b>"+daym+"/"+month+"/"+year+"</b></font></small>")
</script> -->

                      <label for="icon_today">Fecha</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6 pa-left-right">
                      <i class="mdi-action-account-circle prefix"></i>
                      <input id="icon_prefix" name="nombre" type="text" class="validate">
                      <label for="icon_prefix">Nombre Completo</label>
                    </div>
                </div> 
                <div class="row">
                  <div class="input-field col s6 pa-left-right">
                      <i class="mdi-communication-phone prefix"></i>
                      <input id="icon_telephone" name="telefono" type="tel" class="validate">
                      <label for="icon_telephone">Teléfono fijo</label>
                    </div>
                    <div class="input-field col s6 pa-left-right">
                      <i class="mdi-communication-phone prefix"></i>
                      <input id="icon_telephone" name="celular" type="tel" class="validate">
                      <label for="icon_telephone">Celular</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6 pa-left-right">
                      <i class="mdi-content-markunread prefix"></i>
                      <input id="icon_email" name="email" type="email" class="validate">
                      <label for="icon_email">E-Mail</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12 pa-left-right">
                      <i class="mdi-action-lock prefix"></i>
                      <input id="icon_lock" name="pds" type="text" class="validate" required>
                      <label for="icon_lock">Persona / Dependencia / Servicio, sobre el cual hace PQRS</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12 pa-left-right">
                      <i class="mdi-action-subject prefix"></i>
                      <input id="icon_subject" name="asunto" type="text" class="validate" required>
                      <label for="icon_subject">Asunto</label>
                    </div>
                  </div>
          <div class="row">
          <div class="input-field col s12 pa-left-right">
            <i class="mdi-image-dehaze prefix"></i>
            <textarea id="icon_text" class="materialize-textarea" length="240" class="validate" required></textarea>
            <label for="icon_text">Detalle la PQRS y/o Felicitación</label>
          </div>
        </div>
                  <!-- <div >
                    <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="mdi-action-account-balance-wallet"></i>Agregar tarjeta (Opcional)</div>
      <div class="collapsible-body">
        <div class="row">
        <div class="input-field col s6 pa-left-right">
                      <i class="mdi-action-payment prefix"></i>
                      <input id="icon_payment" name="numeroTarjeta" type="tel" class="validate">
                      <label for="icon_payment">Numero Tarjeta</label>
                    </div>
                    <div class="input-field col s6 pa-left-right">
                      <i class="mdi-hardware-security prefix"></i>
                      <input id="icon_csv" name="csv" type="tel" class="validate">
                      <label for="icon_csv">CSV</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6 pa-left-right">
                      <i class="mdi-action-event prefix"></i>
                      <input id="icon_fecha" name="caducidad" type="text" class="validate">
                      <label for="icon_fecha">Fecha Caducidad (Mes/Año)</label>
                    </div>
                    <div class="input-field col s6 pa-left-right">
                      <i class="mdi-action-account-circle prefix"></i>
                      <input id="icon_titular" name="titular" type="text" class="validate">
                      <label for="icon_titular">Titular</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6 pa-left-right">
                      <i class="mdi-social-public prefix"></i>
                      <input id="icon_pais" name="pais" type="text" class="validate">
                      <label for="icon_pais">Pais</label>
                    </div>
                    <div class="input-field col s6 pa-left-right">
                      <i class="mdi-communication-location-on prefix"></i>
                      <input id="icon_postal" name="postal" type="text" class="validate">
                      <label for="icon_postal">Codigo postal</label>
                    </div>
                  </div>
      </div>
    </li>
  </ul>
                  </div> -->
                  <p class="center margin-top">
      <input type="checkbox" id="test5" class="validate" required>
      <label for="test5">Acepto las politicas e información que se brinda en el sitio web</label>
    </p>
                </div>
                </div> 
                </div>
              </div>
              <div class="col s12 m12 center margin-top">
                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                  <i class="mdi-content-send right"></i>
                </button>
              </div>
              </form>
          
           <?php //} ?>
        </div>
      </div>
  </div>
</div>
</br></br>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Antonio Jose Camacho</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Servicios</h5>
          <ul>
            <li><a class="white-text" href="#!">Reservas</a></li>
            <li><a class="white-text" href="#!">Funcionalidad</a></li>
            <li><a class="white-text" href="#!">Iniciar Sección</a></li>
            <li><a class="white-text" href="#!">Registrarse</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Información</h5>
          <ul>
            <li><a class="white-text" href="#!">Telefono: (+57) 315-555-5555</a></li>
            <li><a class="white-text" href="#!">Email: info@uniajc.com</a></li>
            <li><a class="white-text" href="#!">Santiago de Cali, Valle del Cauca <br> Colombia</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Desarrollado por <a class="brown-text text-lighten-3" href="http://materializecss.com">Luis Carlos Falla - Raul Andres Caicedo</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
    $(document).ready(function(){
      $('.slider').slider();
      $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
      });
      $('select').material_select();
      $('.modal-trigger').leanModal();
      $('.collapsible').collapsible({
      accordion : false
    });
    });
  </script>

  </body>
</html>