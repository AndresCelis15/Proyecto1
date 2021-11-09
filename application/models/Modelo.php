<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo extends CI_Model{

    
    function audi(){
        $consultar="select * from cotizacion_audi";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function ford(){
        $consultar="select * from cotizacion_ford";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function mercedes(){
        $consultar="select * from cotizacion_mercedes";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function bmw(){
        $consultar="select * from cotizacion_bmw";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function bmw1(){
        $consultar="select * from  bmw_x1";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function bmwx2(){
        $consultar="select * from bmw_x2";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function bmwx7(){
        $consultar="select * from bmw_x7";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function bmwix(){
        $consultar="select * from bmw_ix";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function audia1(){
        $consultar="select * from audi_a6";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function audiq3(){
        $consultar="select * from audi_q3";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function audir8(){
        $consultar="select * from audi_r8";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function auditt_1(){
        $consultar="select * from audi_tt";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function edgest(){
        $consultar="select * from ford_edgest";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function puma(){
        $consultar="select * from ford_puma";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function fiesta(){
        $consultar="select * from ford_fiesta";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function raptor(){
        $consultar="select * from ford_raptor";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function clasea(){
        $consultar="select * from mercedes_clase_a";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function claseb(){
        $consultar="select * from mercedes_clase_b";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function clasec(){
        $consultar="select * from mercedes_clase_c";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function CLS(){
        $consultar="select * from mercedes_clase_cls";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function cotizar (){
        $consultar="select * from cotizacion";
        $query=$this->db->query($consultar);
        return $query->result();
    }
    function noticias_cita (){
        $consultar="select * from cita_automobex";
        $query=$this->db->query($consultar);
        return $query->result();
    }  
    function asesoria ($Nombre,$Apellido,$correo,$cedula, $celular,$Marca,$Modelo,$Ciudad,$Concesionario){
        $sql = "INSERT INTO cotizacion (Nombre,Apellido,celular,email,Cedula,marca,modelo,ciudad,concesionario)
        VALUES('$Nombre','$Apellido','$correo','$cedula','$celular','$Marca','$Modelo','$Ciudad','$Concesionario')";
		$this->db->query($sql);

    }
    function deberes ($Nombre,$Apellido,$correo,$cedula,$fecha,$agencia,$celular){
        $sql = "INSERT INTO cita_automobex (Nombre,Apellido,email,Cedula,Fecha,Agencia,celular)
        VALUES('$Nombre','$Apellido','$correo','$cedula','$celular','$agencia','$fecha')";
		$this->db->query($sql);

    }
    function color ($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio){
        $sql = "INSERT INTO cotizacion_audi (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto,Modelo)
        VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$Modelo','$precio')";
		$this->db->query($sql);

    }
    function escapar ($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio){
        $sql = "INSERT INTO cotizacion_ford (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto,Modelo)
        VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$Modelo','$precio')";
		$this->db->query($sql);

    }
    function servicio ($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio){
        $sql = "INSERT INTO cotizacion_mercedes (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto,Modelo)
        VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$Modelo','$precio')";
		$this->db->query($sql);

    }
    function bmwauto($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio){
        $sql = "INSERT INTO cotizacion_bmw (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto,Modelo)
        VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$Modelo','$precio')";
		$this->db->query($sql);
     }
    function autt($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
        $sql = "INSERT INTO audi_tt (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
        VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
        $this->db->query($sql);
    
   }
   function auq3($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO audi_q3 (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
function aua1($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO audi_a6(Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
function aur8($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO audi_r8 (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
function fordfiesta($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO ford_fiesta (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
function fordpuma($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO ford_puma (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
function fordedgest($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO ford_edgest (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
function fordraptor($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO ford_raptor (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
function bmx2($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO bmw_x2 (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
function bm1($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO bmw_x1 (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
function bmix($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO bmw_ix (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
function bmx7($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO bmw_x7 (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
function mera($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO mercedes_clase_a (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
function merb($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO mercedes_clase_b (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
function merc($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO mercedes_clase_c (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
function mers($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio){
    $sql = "INSERT INTO mercedes_clase_cls (Nombre,Apellido,Email,Cedula,Fecha,Agencia,Presupuesto)
    VALUES('$Nombre','$Apellido','$correo','$cedula','$fecha','$Agencia','$precio')";
    $this->db->query($sql);

}
    
function eliminar_usuarios ($id_usuario){
      $this->db->delete("cotizacion",array("Id"=>$id_usuario ));
}  

public function act_usuarios($Nombre,$Apellido,$correo,$cedula,$celular,$Marca,$Modelo,$Ciudad,$Concesionario,$Id){    
   
    $sql = "UPDATE cotizacion
	SET
	Nombre='$Nombre',
	Apellido='$Apellido',
	celular='$celular',
	Email='$correo',
	Cedula='$cedula',
	marca='$Marca',
	modelo='$Modelo',
	ciudad='$Ciudad',
	concesionario='$Concesionario'
	WHERE
	Id = $Id";
    $this->db->query($sql);
}

    
function eliminar_noti($id_noticia){
      $this->db->delete("cita_automobex",array("Id"=>$id_noticia));
}  
    
public function act_noticia($Nombre,$Apellido,$correo,$cedula,$celular,$fecha,$agencia,$Id){    
   
    $sql = "UPDATE cita_automobex
	SET
	Nombre='$Nombre',
	Apellido='$Apellido',
    Email='$correo',
    Cedula='$cedula',
    Fecha='$fecha',
    Agencia='$agencia',
	celular='$celular'
	WHERE
	Id = $Id";
    $this->db->query($sql);
}
function eliminar_ford($id_ford){
    $this->db->delete("cotizacion_ford",array("Id"=>$id_ford));
}  
  
public function act_ford($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio,$Id){    
 
  $sql = "UPDATE cotizacion_ford
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Modelo='$Modelo',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminar_audi($id_audi){
    $this->db->delete("cotizacion_audi",array("Id"=>$id_audi));
}  
  
public function act_audi($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio,$Id){    
 
  $sql = "UPDATE cotizacion_audi
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Modelo='$Modelo',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminar_mercedes($id_mercedes){
    $this->db->delete("cotizacion_mercedes",array("Id"=>$id_mercedes));
}  
  
public function act_mercedes($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio,$Id){    
 
  $sql = "UPDATE cotizacion_mercedes
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Modelo='$Modelo',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminar_bmw($id_bmw){
    $this->db->delete("cotizacion_bmw",array("Id"=>$id_bmw));
}  
  
public function act_bmw($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$Modelo,$precio,$Id){    
 
  $sql = "UPDATE cotizacion_bmw
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Modelo='$Modelo',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminar_bmwix($id_bmw){
    $this->db->delete("bmw_ix",array("Id"=>$id_bmw));
}  
  
public function act_bmwix($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE bmw_ix
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminar_bmw1($id_bmw1){
    $this->db->delete("bmw_x1",array("Id"=>$id_bmw1));
}  
  
public function act_bmw1($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE bmw_x1
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminar_bmwx2($id_bmwx2){
    $this->db->delete("bmw_x2",array("Id"=>$id_bmwx2));
}  
  
public function act_bmwx2($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE bmw_x2
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminar_bmwx7($id_bmwx7){
    $this->db->delete("bmw_x7",array("Id"=>$id_bmwx7));
}  
  
public function act_bmwx7($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE bmw_x7
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminarmercedesclaseb($id_mercedesclaseb){
    $this->db->delete("mercedes_clase_b",array("Id"=>$id_mercedesclaseb));
}  
  
public function act_mercedesclaseb($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE mercedes_clase_b
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminarmercedesclasec($id_mercedesclasec){
    $this->db->delete("mercedes_clase_c",array("Id"=>$id_mercedesclasec));
}  
  
public function act_mercedesclasec($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE mercedes_clase_c
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}

function eliminarmercedesclasecls($id_mercedesclasecls){
    $this->db->delete("mercedes_clase_cls",array("Id"=>$id_mercedesclasecls));
}  
  
public function act_mercedesclasecls($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE mercedes_clase_cls
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminarmercedesclasea($id_mercedesclasea){
    $this->db->delete("mercedes_clase_a",array("Id"=>$id_mercedesclasea));
}  
  
public function act_mercedesclasea($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE mercedes_clase_a
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminarfordedgest($id_fordedgest){
    $this->db->delete("ford_edgest",array("Id"=>$id_fordedgest));
}  
  
public function act_fordedgest($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE ford_edgest
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminarfordfiesta($id_fordfiesta){
    $this->db->delete("ford_fiesta",array("Id"=>$id_fordfiesta));
}  
  
public function act_fordfiesta($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE ford_fiesta
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminarfordpuma($id_fordpuma){
    $this->db->delete("ford_puma",array("Id"=>$id_fordpuma));
}  
  
public function act_fordpuma($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE ford_puma
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminarfordraptor($id_fordraptor){
    $this->db->delete("ford_raptor",array("Id"=>$id_fordraptor));
}  
  
public function act_fordraptor($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE ford_raptor
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminaraudia6($id_audia6){
    $this->db->delete("audi_a6",array("Id"=>$id_audia6));
}  
  
public function act_audia6($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE audi_a6
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminaraudiq3($id_audiq3){
    $this->db->delete("audi_q3",array("Id"=>$id_audiq3));
}  
  
public function act_audiq3($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE audi_q3
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminaraudir8($id_audir8){
    $this->db->delete("audi_r8",array("Id"=>$id_audir8));
}  
  
public function act_audir8($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE audi_r8
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
function eliminarauditt($id_auditt){
    $this->db->delete("audi_tt",array("Id"=>$id_auditt));
}  
  
public function act_auditt($Nombre,$Apellido,$correo,$cedula,$fecha,$Agencia,$precio,$Id){    
 
  $sql = "UPDATE audi_tt
  SET
  Nombre='$Nombre',
  Apellido='$Apellido',
  Email='$correo',
  Cedula='$cedula',
  Fecha='$fecha',
  Agencia='$Agencia',
  Presupuesto='$precio'
  WHERE
  Id = $Id";
  $this->db->query($sql);
}
}