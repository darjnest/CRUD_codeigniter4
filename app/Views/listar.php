<?=$cabecera ?>
<a class="btn btn-info" href="<?=base_url('crear')?>">Agregar un paciente</a>
<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    
                    <th>Rut</th>
                    <th>N° Verificador</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Sexo</th>
                    <th>Nombre Social</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($Pacientes as $paciente):?>

                <tr>
                    
                    <td><?=$paciente['rut_paciente'];?></td>
                    <td><?=$paciente['dv_paciente'];?></td>
                    <td><?=$paciente['nombres_paciente'];?></td>
                    <td><?=$paciente['apellidop_paciente'];?></td>
                    <td><?=$paciente['apellidom_paciente'];?></td>
                    <td><?=$paciente['fenac_paciente'];?></td>
                    <td><?=$paciente['sexo_paciente'];?></td>
                    <td><?=$paciente['nomsocial_paciente'];?></td>
                    <td><?=$paciente['direccion_paciente'];?></td>
                    <td><?=$paciente['telefono_paciente'];?></td>
                    <td><?=$paciente['email_paciente'];?></td>
                    <td>
                    <a href="<?=base_url('editar/'.$paciente['rut_paciente']);?>" class="btn btn-info" type=button>Editar</a> 
                    <a href="<?=base_url('borrar/'.$paciente['rut_paciente']);?>" class="btn btn-danger" type=button>Eliminar</a>
                    </td>   
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
<?=$pie?>