<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {



    public function index(){
            $this->load->view('menu/view_header');
            $this->load->view('menu/usuarios/view_usuarios');
            $this->load->view('menu/view_footer');
        }

    public function ford(){
        $datos_ford["cotizacion_ford"]=$this->Modelo->ford();
            $this->load->view('menu/view_header');
            $this->load->view('menu/usuarios/marcas/view_ford', $datos_ford);
            $this->load->view('menu/view_footer');
        }
        public function escapar(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $Modelo= $this->input->post("modelo");
            $precio= $this->input->post("precio");
    
            $ataque=$this->Modelo->escapar($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio);
            redirect('Usuarios/ford');
            }
        public function eliminar_ford($id_ford){
            $this->Modelo->eliminar_ford($id_ford);
            redirect('Usuarios/ford');
        }
        public function modificarford ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $Modelo= $this->input->post("modelo");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_ford($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio,$Id);
            redirect('Usuarios/ford');
       }
    public function mercedes(){
        $datos_mercedes["cotizacion_mercedes"]=$this->Modelo->mercedes();
            $this->load->view('menu/view_header');
            $this->load->view('menu/usuarios/marcas/view_mercedes', $datos_mercedes);
            $this->load->view('menu/view_footer');
        }
        public function servicio(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $Modelo= $this->input->post("modelo");
            $precio= $this->input->post("precio");
    
            $merce=$this->Modelo->servicio($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio);
            redirect('Usuarios/mercedes');
        }
        public function eliminar_mercedes($id_mercedes){
            $this->Modelo->eliminar_mercedes($id_mercedes);
            redirect('Usuarios/mercedes');
        }
        public function modificarmercedes ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $Modelo= $this->input->post("modelo");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_mercedes($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio,$Id);
            redirect('Usuarios/mercedes');

            }
        public function audi(){
            $datos_audi["cotizacion_audi"]=$this->Modelo->audi();
                $this->load->view('menu/view_header');
                $this->load->view('menu/usuarios/marcas/view_audi', $datos_audi);
                $this->load->view('menu/view_footer');
            }
        public function color(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $Modelo= $this->input->post("modelo");
            $precio= $this->input->post("precio");
    
            $belico=$this->Modelo->color($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio);
            redirect('Usuarios/audi');
        }
        public function eliminar_audi($id_audi){
            $this->Modelo->eliminar_audi($id_audi);
            redirect('Usuarios/audi');
        }
        public function modificaraudi ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $Modelo= $this->input->post("modelo");
            $precio= $this->input->post("precio");  
        
            $tt=$this->Modelo->act_audi($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio,$Id);
            redirect('Usuarios/audi');

            
            }

    public function bmw(){
        $datos_bmw["cotizacion_bmw"]=$this->Modelo->bmw();
            $this->load->view('menu/view_header');
            $this->load->view('menu/usuarios/marcas/view_bmw', $datos_bmw);
            $this->load->view('menu/view_footer');
        }
        public function bmwauto(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $Modelo= $this->input->post("modelo");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->bmwauto($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio);
            redirect('Usuarios/bmw');
        }
        public function eliminar_bmw($id_bmw){
            $this->Modelo->eliminar_bmw($id_bmw);
            redirect('Usuarios/bmw');
        }
        public function modificarbmw ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $Modelo= $this->input->post("modelo");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_bmw($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio,$Id);
            redirect('Usuarios/bmw');

            }

    public function cotizar(){
        $datos_cotizar["cotizacion"]=$this->Modelo->cotizar();
            $this->load->view('menu/view_header');
            $this->load->view('menu/usuarios/view_cotizar',$datos_cotizar);
            $this->load->view('menu/view_footer');
        }

    public function registro_usuarios(){


        $Nombre= $this->input->post("nombres");
        $Apellido= $this->input->post("apellidos");
        $correo= $this->input->post("correo");
        $cedula= $this->input->post("cedula");
        $celular= $this->input->post("celular");
        $Marca= $this->input->post("marca");
        $Modelo= $this->input->post("modelo");
        $Ciudad= $this->input->post("ciudad");
        $Concesionario= $this->input->post("concesionario");

        $bb = $this->Modelo->asesoria($Nombre,$Apellido,$correo,$cedula, $celular,$Marca,$Modelo,$Ciudad,$Concesionario);
        redirect('Usuarios/cotizar');
        }
        public function eliminar_user($id_usuario){
            $this->Modelo->eliminar_usuarios($id_usuario);
            redirect('Usuarios/cotizar');
        }   
        public function modificaruser ($Id){  

            $Nombre= $this->input->post("nombres");
            $Apellido= $this->input->post("apellidos");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $celular= $this->input->post("celular");
            $Marca= $this->input->post("marca");
            $Modelo= $this->input->post("modelo");
            $Ciudad= $this->input->post("ciudad");
            $Concesionario= $this->input->post("concesionario");
        
            $this->Modelo->act_usuarios($Nombre,$Apellido,$correo,$cedula,$celular,$Marca,$Modelo,$Ciudad,$Concesionario,$Id);
            redirect('Usuarios/cotizar');
        } 
        public function auditt_1(){
            $datos_auditt_1["audi_tt"]=$this->Modelo->auditt_1();
            $this->load->view('menu/view_header');
            $this->load->view('gg/view_auditt', $datos_auditt_1);
            $this->load->view('menu/view_footer');
        }
        public function autt(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->autt($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/auditt_1');
        }
        public function eliminarauditt($id_auditt){
            $this->Modelo->eliminarauditt($id_auditt);
            redirect('Usuarios/auditt_1');
        }
        public function modificarauditt ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_auditt($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
            redirect('Usuarios/auditt_1');
            }
    public function audiq3(){
        $datos_audiq3["audi_q3"]=$this->Modelo->audiq3();
            $this->load->view('menu/view_header');
            $this->load->view('gg/view_audiq3', $datos_audiq3);
            $this->load->view('menu/view_footer');
        }
        public function auq3(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->auq3($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/audiq3');
        }
        public function eliminaraudiq3($id_audiq3){
            $this->Modelo->eliminaraudiq3($id_audiq3);
            redirect('Usuarios/audiq3');
        }
        public function modificaraudiq3 ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_audiq3($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
            redirect('Usuarios/audiq3');
            }
    public function audia1(){
        $datos_audia1["audi_a6"]=$this->Modelo->audia1();
            $this->load->view('menu/view_header');
            $this->load->view('gg/view_audia1', $datos_audia1);
            $this->load->view('menu/view_footer');
        }
        public function aua1(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->aua1($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/audia1');
        }
        public function eliminaraudia6($id_audia6){
            $this->Modelo->eliminaraudia6($id_audia6);
            redirect('Usuarios/audia1');
        }
        public function modificaraudia6 ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_audia6($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
            redirect('Usuarios/audia1');
            }
    public function audir8(){
        $datos_audir8["audi_r8"]=$this->Modelo->audir8();
            $this->load->view('menu/view_header');
            $this->load->view('gg/view_audir8', $datos_audir8);
            $this->load->view('menu/view_footer');
        }
        public function aur8(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->aur8($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/audir8');
        }
        public function eliminaraudir8($id_audir8){
            $this->Modelo->eliminaraudir8($id_audir8);
            redirect('Usuarios/audir8');
        }
        public function modificaraudir8($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_audir8($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
            redirect('Usuarios/audir8');
            }

    public function fiesta(){
        $datos_fiesta["ford_fiesta"]=$this->Modelo->fiesta();
            $this->load->view('menu/view_header');
            $this->load->view('gg/fiesta', $datos_fiesta);
            $this->load->view('menu/view_footer');
        }
        public function fordfiesta(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->fordfiesta($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/fiesta');
        }
        public function eliminarfordfiesta($id_fordfiesta){
            $this->Modelo->eliminarfordfiesta($id_fordfiesta);
            redirect('Usuarios/fiesta');
        }
        public function modificarfordfiesta ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_fordfiesta($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
            redirect('Usuarios/fiesta');
            }
    public function puma(){
        $datos_puma["ford_puma"]=$this->Modelo->puma();
            $this->load->view('menu/view_header');
            $this->load->view('gg/puma', $datos_puma);
            $this->load->view('menu/view_footer');
        }
        public function fordpuma(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->fordpuma($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/puma');
        }
        public function eliminarfordpuma($id_fordpuma){
            $this->Modelo->eliminarfordpuma($id_fordpuma);
            redirect('Usuarios/puma');
        }
        public function modificarfordpuma ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_fordpuma($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
            redirect('Usuarios/puma');

            }
    public function edgest(){
        $datos_edgest["ford_edgest"]=$this->Modelo->edgest();
            $this->load->view('menu/view_header');
            $this->load->view('gg/edge', $datos_edgest);
            $this->load->view('menu/view_footer');
        }
        public function fordedgest(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->fordedgest($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/edgest');
        }
        public function eliminarfordedgest($id_fordedgest){
            $this->Modelo->eliminarfordedgest($id_fordedgest);
            redirect('Usuarios/edgest');
        }
        public function modificarfordedgest ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_fordedgest($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
            redirect('Usuarios/edgest');

            }
    public function raptor(){
        $datos_raptor["ford_raptor"]=$this->Modelo->raptor();
            $this->load->view('menu/view_header');
            $this->load->view('gg/raptor', $datos_raptor);
            $this->load->view('menu/view_footer');
        }
        public function fordraptor(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->fordraptor($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/raptor');
        }
        public function eliminarfordraptor($id_fordraptor){
            $this->Modelo->eliminarfordraptor($id_fordraptor);
            redirect('Usuarios/raptor');
        }
        public function modificarfordraptor ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_fordraptor ($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
            redirect('Usuarios/raptor');

            }
    public function bmw1(){
        $datos_bmw1["bmw_x1"]=$this->Modelo->bmw1();
            $this->load->view('menu/view_header');
            $this->load->view('gg/bmwx1', $datos_bmw1);
            $this->load->view('menu/view_footer');
        }
        public function bm1(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->bm1($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/bmw1');
        }
        public function eliminar_bmw1($id_bmw1){
            $this->Modelo->eliminar_bmw1($id_bmw1);
            redirect('Usuarios/bmw1');
        }
        public function modificarbmw1 ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_bmw1($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
            redirect('Usuarios/bmw1');

            }
    public function bmwx2(){
        $datos_bmwx2["bmw_x2"]=$this->Modelo->bmwx2();
            $this->load->view('menu/view_header');
            $this->load->view('gg/bmwx2', $datos_bmwx2);
            $this->load->view('menu/view_footer');
        }
        public function bmx2(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->bmx2($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/bmwx2');
        }
        public function eliminar_bmwx2($id_bmwx2){
            $this->Modelo->eliminar_bmwx2($id_bmwx2);
            redirect('Usuarios/bmwx2');
        }
        public function modificarbmwx2 ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_bmwx2($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
            redirect('Usuarios/bmwx2');
            }
    public function bmwix(){
        $datos_bmwix["bmw_ix"]=$this->Modelo->bmwix();
            $this->load->view('menu/view_header');
            $this->load->view('gg/bmwix', $datos_bmwix);
            $this->load->view('menu/view_footer');
        }
        public function bmix(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->bmix($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/bmwix');
        }
        public function eliminar_bmwix($id_bmwix){
            $this->Modelo->eliminar_bmwix($id_bmwix);
            redirect('Usuarios/bmwix');
        }
        public function modificarbmwix ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_bmwix($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
            redirect('Usuarios/bmwix');

            }
    public function bmwx7(){
        $datos_bmwx7["bmw_x7"]=$this->Modelo->bmwx7();
            $this->load->view('menu/view_header');
            $this->load->view('gg/bmwx7', $datos_bmwx7);
            $this->load->view('menu/view_footer');
        }
        public function bmx7(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->bmx7($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/bmwx7');
        }
        public function eliminar_bmwx7($id_bmwx7){
            $this->Modelo->eliminar_bmwx7($id_bmwx7);
            redirect('Usuarios/bmwx7');
        }
        public function modificarbmwx7 ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_bmwx7($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
            redirect('Usuarios/bmwx7');
            }

    public function clasea(){
        $datos_clasea["mercedes_clase_a"]=$this->Modelo->clasea();
            $this->load->view('menu/view_header');
            $this->load->view('gg/clase_a', $datos_clasea);
            $this->load->view('menu/view_footer');
        }
        public function mera(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->mera($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/clasea');
           }
            public function eliminarmercedesclasea($id_bmw1){
                $this->Modelo->eliminarmercedesclasea($id_bmw1);
                redirect('Usuarios/clasea');
            }
            public function modificarmercedesclasea ($Id){  
    
                $Nombre= $this->input->post("nombre");
                $Apellido= $this->input->post("apellido");
                $correo= $this->input->post("correo");
                $cedula= $this->input->post("cedula");
                $fecha= $this->input->post("fecha");
                $Agencia= $this->input->post("agencia");
                $precio= $this->input->post("precio");
            
                $tt=$this->Modelo->act_mercedesclasea($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
                redirect('Usuarios/clasea');
            }
    public function claseb(){
        $datos_claseb["mercedes_clase_b"]=$this->Modelo->claseb();
            $this->load->view('menu/view_header');
            $this->load->view('gg/claseb', $datos_claseb);
            $this->load->view('menu/view_footer');
        }
        public function merb(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->merb($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/claseb');

            }
        
        public function eliminarmercedesclaseb($id_mercedesclaseb){
            $this->Modelo->eliminarmercedesclaseb($id_mercedesclaseb);
            redirect('Usuarios/claseb');
        }
        public function modificarmercedesclaseb ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_mercedesclaseb($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
            redirect('Usuarios/claseb');
       }
    public function clasec(){
        $datos_clasec["mercedes_clase_c"]=$this->Modelo->clasec();
            $this->load->view('menu/view_header');
            $this->load->view('gg/clasec', $datos_clasec);
            $this->load->view('menu/view_footer');
        }
        public function merc(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $bm=$this->Modelo->merc($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/clasec');
          }
            public function eliminarmercedesclasec($id_mercedesclasec){
                $this->Modelo->eliminarmercedesclasec($id_mercedesclasec);
                redirect('Usuarios/clasec');
            }
            public function modificarmercedesclasec ($Id){  
    
                $Nombre= $this->input->post("nombre");
                $Apellido= $this->input->post("apellido");
                $correo= $this->input->post("correo");
                $cedula= $this->input->post("cedula");
                $fecha= $this->input->post("fecha");
                $Agencia= $this->input->post("agencia");
                $precio= $this->input->post("precio");
            
                $tt=$this->Modelo->act_mercedesclasec($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
                redirect('Usuarios/clasec');
           }
    public function CLS(){
        $datos_CLS["mercedes_clase_cls"]=$this->Modelo->CLS();
            $this->load->view('menu/view_header');
            $this->load->view('gg/cls', $datos_CLS);
            $this->load->view('menu/view_footer');
        }
        public function mers(){

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
    
            $pi=$this->Modelo->mers($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio);
            redirect('Usuarios/CLS');
        }
        public function eliminarmercedesclasecls($id_mercedesclasecls){
            $this->Modelo->eliminarmercedesclasecls($id_mercedesclasecls);
            redirect('Usuarios/CLS');
        }
        public function modificarmercedesclasecls ($Id){  

            $Nombre= $this->input->post("nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("correo");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $Agencia= $this->input->post("agencia");
            $precio= $this->input->post("precio");
        
            $tt=$this->Modelo->act_mercedesclasecls($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id);
            redirect('Usuarios/CLS');
            }
        public function noticias(){
            $this->load->view('menu/view_header');
            $this->load->view('menu/usuarios/view_noticias');
            $this->load->view('menu/view_footer');
            }   
        public function noticias_audi(){
                $this->load->view('menu/view_header');
                $this->load->view('menu/usuarios/noticias/view_audi');
                $this->load->view('menu/view_footer');
            }
        public function noticias_cita(){
            $datos_noticias_cita["cita_automobex"]=$this->Modelo->noticias_cita();
                $this->load->view('menu/view_header');
                $this->load->view('menu/usuarios/noticias/view_cita', $datos_noticias_cita);
                $this->load->view('menu/view_footer');
            }

        public function Delfin(){
    
            $Nombre= $this->input->post("Nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("email");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $agencia= $this->input->post("agencia");
            $celular= $this->input->post("celular");
    
            $beltran=$this->Modelo->deberes($Nombre,$Apellido,$correo,$cedula,$fecha,$agencia,$celular);
            redirect('Usuarios/noticias_cita');
        }
        public function eliminar_noti($id_noticia){
            $this->Modelo->eliminar_noti($id_noticia);
            redirect('Usuarios/noticias_cita');
        }
        public function modificarnoti ($Id){  

            $Nombre= $this->input->post("Nombre");
            $Apellido= $this->input->post("apellido");
            $correo= $this->input->post("email");
            $cedula= $this->input->post("cedula");
            $fecha= $this->input->post("fecha");
            $agencia= $this->input->post("agencia");
            $celular= $this->input->post("celular");
        
            $pelo=$this->Modelo->act_noticia($Nombre,$Apellido,$correo,$cedula,$celular,$fecha,$agencia,$Id);
            redirect('Usuarios/noticias_cita');
      }
        public function noticias_bmw(){
                $this->load->view('menu/view_header');
                $this->load->view('menu/usuarios/noticias/view_bmw');
                $this->load->view('menu/view_footer');
            }
        public function noticias_mercedes(){
                $this->load->view('menu/view_header');
                $this->load->view('menu/usuarios/noticias/view_mercedes');
                $this->load->view('menu/view_footer');
            }
        public function noticias_alfa(){
                $this->load->view('menu/view_header');
                $this->load->view('menu/usuarios/noticias/view_alfa');
                $this->load->view('menu/view_footer');
            }
        public function noticias_bmwserie(){
                $this->load->view('menu/view_header');
                $this->load->view('menu/usuarios/noticias/view_bmwserie');
                $this->load->view('menu/view_footer');
            }
        
            
}