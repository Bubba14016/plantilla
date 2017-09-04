<?php
$titulo = 'Registro de Usuario';
include_once '../plantilla/encabezado.php';
include_once '../plantilla/navbar.php';
?>
<div class="container-fluid">

    <div class="panel" name="libros">
        <div class="row panel-heading text-center">
            <div class="col s12">
                <h4>Registro De Usuarios</h4>
            </div>
        </div>
        <div class="row">
            <form class="col s12" name="FormuluarioUsuario" method="post" action="">
                <div class="row text-center">
                    <div class="input-field col m6">
                        <input type="text" id="idNombre" name="nameNombre"  class="text-center">
                        <label for="idNombre">Nombre <small> (Ej: Nombre1 Nombre2)</small></label>
                    </div>
                    <div class="input-field col m6">
                        <input type="text" id="idNombre" name="nameNombre"  class="text-center">
                        <label for="idNombre">Apellido <small>(Ej: Apellido1 Apellido2)</small></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6">
                        <input type="text" id="idTelefono" name="nameTelefono" class="text-center">
                        <label for="idTelefono">Numero Telefonico <small>(Ej: 2255-5555)</small></label>
                    </div>
                    <div class="input-field col m6">
                        <input type="text" id="idEmail" name="nameEmail" class="text-center">
                        <label for="idEmail">Email <small>(Ej: correo@gmail.com)</small> </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6">
                        <input type="text" id="idEmail" name="nameEmail" class="text-center">
                        <label for="idEmail">Direccion <small>(Ej: Verapaz, Colonia Mercenenes)</small> </label>
                    </div>
                    <div class="input-field col m6">
                        <input type="text" id="idInstitucion" name="nameInstitucion" class="text-center">
                        <label for="idInstitucion">Institucion <small>(Ej: Centro Escolar Presbitero Norberto Marroquín)</small></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6">
                        <input type="date" id="idFecha" name="nameFecha" class="text-center datepicker">
                        <label for="idFecha">Fecha de Nacimiento</label>
                    </div>
                    <div class="input-field col m6">
                        <input type="text" id="idInstitucion" name="nameInstitucion" class="text-center">
                        <label for="idInstitucion">Institucion <small>(Ej: Centro Escolar Presbitero Norberto Marroquín)</small></label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col m6">
                        <input type="date" id="idFecha" name="nameFecha" class="text-center datepicker">
                        <label for="idFecha">Fecha de Nacimiento</label>
                    </div>

                    <div class="input-field col m6">
                        <div class="input-field col m6">
                            <input type="radio" id="idSexo" name="nameMasculino"  >
                            <label for="idSexo">Masculino</label>
                        </div>
                        <div class="input-field col m6">
                            <input type="radio" id="idSexo" name="nameFemenino">
                            <label for="idSexo">Femenino</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
           <form action="#">
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  </form>
        </div>


    </div>
</div>
</div>

<?php
include_once '../plantilla/cierre.php';
?>


