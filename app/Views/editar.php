<?=$cabecera;?>
    
<?php

?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Editar datos del paciente</h5>
            <p class="card-text">
            <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">
        <input type="hidden" name="rut" value="<?=$pacientes['rut_paciente']?>">
        <input type="hidden" name="verificador" value="<?=$pacientes['dv_paciente']?>">
        <div class="form-group">
            <label for="nombres" class="form-control">Nombres:</label>
            <input id="nombres" value="<?=$pacientes['nombres_paciente']?>" class="control-label col-sm-2" type="text" name="nombres">
        </div>
        <div class="form-group">
            <label for="apellidop" class="form-control">Apellido Paterno:</label>
            <input id="apellidop" value="<?=$pacientes['apellidop_paciente']?>" class="control-label col-sm-2" type="text" name="apellidop">
        </div>
        <div class="form-group">
            <label for="apellidom" class="form-control">Apellido Materno:</label>
            <input id="apellidom" value="<?=$pacientes['apellidom_paciente']?>" class="control-label col-sm-2" type="text" name="apellidom">
        </div>
        <div class="form-group">
        <label for="fechanac" class="form-control">Fecha de Nacimiento:</label>
            <input id="fechanac" value="<?=$pacientes['fenac_paciente']?>" class="control-label col-sm-2" type="text" name="fechanac">
        <div class="form-group">
            <label for="sexo" class="form-control">Sexo:</label>
            <input id="sexo" value="<?=$pacientes['sexo_paciente']?>" class="control-label col-sm-2" type="text" name="sexo">
        </div>
        <div class="form-group">
            <label for="nombresocial" class="form-control">Nombre Social:</label>
            <input id="nombresocial" value="<?=$pacientes['nomsocial_paciente']?>"  class="control-label col-sm-2" type="text" name="nombresocial">
        </div>
        <div class="form-group">
            <label for="direccion" class="form-control">Direccion:</label>
            <input id="direccion" value="<?=$pacientes['direccion_paciente']?>" class="control-label col-sm-2" type="text" name="direccion">
        </div>
        <div class="form-group">
            <label for="telefono" class="form-control">Telefono:</label>
            <input id="telefono" value="<?=$pacientes['telefono_paciente']?>" class="control-label col-sm-2" type="text" name="telefono">
        </div>
        <div class="form-group">
            <label for="email" class="form-control">Email:</label>
            <input id="email" value="<?=$pacientes['email_paciente']?>" class="control-label col-sm-2" type="text" name="email">
        </div>
        <button class="btn btn-success" type="submit">Guardar</button>

            </p>
        </div>
    </div>
<?=$pie;?>