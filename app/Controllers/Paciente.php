<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Pacientes;
class Paciente extends Controller{
 public function index(){

    $Pacientes = new Pacientes();
    $datos['Pacientes']=$Pacientes->orderBy('rut_paciente','ASC')->findAll();
    $datos['cabecera']=view('template/cabecera');
    $datos['pie']=view('template/piepagina');


    return view('listar',$datos);
 }

 public function crear(){
    $datos['cabecera']=view('template/cabecera');
    $datos['pie']=view('template/piepagina');
    return view('crear',$datos);
    
 }

 public function guardar(){
    
    $Pacientes = new Pacientes();

 

        $dtd=[
            
            'rut_paciente'=>$this->request->getVar('rut'),
            'dv_paciente'=>$this->request->getVar('verificador'),
            'nombres_paciente'=>$this->request->getVar('nombres'),
            'apellidop_paciente'=>$this->request->getVar('apellidop'),
            'apellidom_paciente'=>$this->request->getVar('apellidom'),
            'fenac_paciente'=>$this->request->getVar('fechanac'),
            'sexo_paciente'=>$this->request->getVar('sexo'),
            'nomsocial_paciente'=>$this->request->getVar('nombresocial'),
            'direccion_paciente'=>$this->request->getVar('direccion'),
            'telefono_paciente'=>$this->request->getVar('telefono'),
            'email_paciente'=>$this->request->getVar('email')
        ];
        $Pacientes->insert($dtd);

    
   
    echo "Ingresado a la BD";
    return $this->response->redirect(site_url('listar'));

 }

 public function borrar($rut=null){
    
    $Pacientes=new Pacientes();
    $datosPaciente=$Pacientes->where('rut_paciente',$rut)->first();
    $Pacientes->where('rut_paciente',$rut)->delete($rut);
    return $this->response->redirect(site_url('listar'));

    
 }

 public function editar($rut=null){

    
    $pacientes=new pacientes();
    $datos['pacientes']=$pacientes->where('rut_paciente',$rut)->first();

    $datos['cabecera']=view('template/cabecera');
    $datos['pie']=view('template/piepagina');
    return view('editar',$datos);
 }
 public function actualizar(){

    $pacientes=new pacientes();
    $dtd=[
        'nombres_paciente'=>$this->request->getVar('nombres'),
        'apellidop_paciente'=>$this->request->getVar('apellidop'),
        'apellidom_paciente'=>$this->request->getVar('apellidom'),
        'fenac_paciente'=>$this->request->getVar('fechanac'),
        'sexo_paciente'=>$this->request->getVar('sexo'),
        'nomsocial_paciente'=>$this->request->getVar('nombresocial'),
        'direccion_paciente'=>$this->request->getVar('direccion'),
        'telefono_paciente'=>$this->request->getVar('telefono'),
        'email_paciente'=>$this->request->getVar('email')
    ];
    $rut=$this->request->getVar('rut');
    $pacientes->update($rut,$dtd);
    return $this->response->redirect(site_url('listar'));

 }
}

            