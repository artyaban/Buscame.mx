<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        public function getall()
        {       
                $query = $this->db->query('select  * from establecimientos where status=1 order by puntos desc');
                return $query->result();
        }


        public function get()
        {       
                $query = $this->db->query('select  * from establecimientos where status=1 order by puntos desc limit 3');
                return $query->result();
        }
        public function get2()
        {       
                $query = $this->db->query('select * from establecimientos where status=1 order by puntos asc limit 2');
                return $query->result();
        }
        public function get3()
        {       
                $query = $this->db->query('select * from establecimientos where status=1 order by puntos desc limit 3');
                return $query->result();
        }



        
         public function getdetalle($var)
        {       
               
                $sql = "select * from establecimientos where nombre_establecimiento=? limit 1";
                $query=$this->db->query($sql, array($var));
                return $query->result();
        }
         public function getestcat($var)
        {       
              $sql = "select * from categorias where nombre_categoria=? limit 1";
              $query=$this->db->query($sql, array($var));
              $categoria=$query->result();
              foreach ($categoria as $key => $cat) {
              $id_categoriaa=$cat->id_categoria;
              }

                $sql = "select * from establecimientos inner join est_cat on id_establecimiento=cod_establecimiento where cod_categoria=?";
                $query=$this->db->query($sql, array($id_categoriaa));
                return $query->result();
        }


         public function getbusqueda($buscar)
        {
            
        $sql = "select * from establecimientos WHERE nombre_establecimiento like '%".$buscar."%'
 OR direccion like '%".$buscar."%' OR telefono like '%".$buscar."%' OR whatsapp like '%".$buscar."%' OR celular like '%".$buscar."%' OR horarios like '%".$buscar."%' OR sitio_web like '%".$buscar."%' OR e_mail like '%".$buscar."%' OR facebook like '%".$buscar."%' and status='1'; ";

          $query=$this->db->query($sql);
          
                
          return $query->result();

        }
}