<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
            <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
                <title>
                    Gestion de Biblioteca
                </title>
                 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <link href="../css/bootstrap.min.css" rel="stylesheet">
                    <link href="../css/materialize.min.css" rel="stylesheet">
                    </link>
                </link>
                <link href="../css/estilos.css" rel="stylesheet">
                </link>
            </meta>
        </meta>
        
    </head>
<body>
	 <nav class="nav-extended">
            <div class="nav-wrapper">
                <a class="brand-logo" href="../home.php">
                   <img src="../imagenes/logo.png" alt="" width="150px">
                </a>
                <a class="button-collapse" data-activates="mobile-demo" href="#">
                    <i class="material-icons">
                        menu
                    </i>
                </a>
                <ul class="right hide-on-med-and-down" id="nav-mobile">
                    <li>
                        <a href="../activofijo/inicio_af.php">
                            Activo Fijo
                        </a>
                    </li>
                    <li>
                        <a href="inicio_b.php">
                            Gestión de Biblioteca
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Gestión de Usuarios
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Seguridad
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Ayuda
                        </a>
                    </li>
                    <li>
                        <a href="../index.php">
                            Cerrar Sesión
                        </a>
                    </li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li>
                        <a href="../activofijo/inicio_af.php">
                            Activo Fijo
                        </a>
                    </li>
                    <li>
                        <a href="inicio_b.php">
                            Gestión de Biblioteca
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Gestión de Usuarios
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Seguridad
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Ayuda
                        </a>
                    </li>
                    <li>
                        <a href="../index.php">
                            Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nav-content" name="">
                <ul class="tabs tabs-transparent">
                    <li class="tab">
                        <a  href="#test2">
                           Registro
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#test1">
                           Bibliografia
                        </a>
                    </li>
                    
                    
                    <li class="tab">
                        <a class="active" href="#test3">
                            Prestamo
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#test5">
                            Consultas
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#test6">
                            Reportes
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="col s12" id="test1">
           
           <h1>Bibliografia</h1>
        </div>
        <div class="col s12" id="test2">
           <h1>Registros</h1>
        </div>
        <div class="col s12" id="test3">
            <?php include('listado_p_b.php');?>
        </div>
        
        <div class="col s12" id="test5">
            <h1>Consultas</h1>
        </div>
        <div class="col s12" id="test6">
            <h1>Reportes</h1>
        </div>
        
        <script crossorigin="a
	nonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="https://code.jquery.com/jquery-2.2.4.min.js">
        </script>
        <script src="../js/bootstrap.js">
        </script>
        <script src="../js/materialize.js">
        </script>
        <script>
  
  	 $(document).ready(function(){
 
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
      $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '50%', // Starting top style attribute
      endingTop: '5%', // Ending top style attribute
     
    }
  );
     $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: false, // Creates a dropdown of 15 years to control year,
    today: 'Hoy',
    clear: 'Borrar',
    close: 'Aceptar',
    format: 'dd/mm/yyyy',
     max: new Date(),
    closeOnSelect: true // Close upon selecting a date,
  });
    
     
    $('select').material_select();
 
  });
 		
 	
function abrirModal(){
        $('#nuevo').modal('open');
    }
  </script>
</body>
</html>