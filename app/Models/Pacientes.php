<?php 
namespace App\Models;

use CodeIgniter\Model;

class Pacientes extends Model{
    protected $table      = 'paciente';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'rut_paciente';
    protected $allowedFields=['rut_paciente','dv_paciente','nombres_paciente','apellidop_paciente','apellidom_paciente','fenac_paciente','sexo_paciente','nomsocial_paciente','direccion_paciente','telefono_paciente','email_paciente'];

}