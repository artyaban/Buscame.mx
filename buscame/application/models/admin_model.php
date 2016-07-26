<?

class Admin_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        public function insertar($nombre,$direccion,$cp,$sitio,$email,$descripcion,$url,$logo,$telefono,$whatsapp,$celular,$horarios,$facebook,$twitter,$status)
        {
                 $data = array(
               'nombre_establecimiento' => $nombre,
               'direccion' => $direccion,
               'codigo_postal' => $cp,
                'sitio_web' => $sitio,
                 'e_mail' => $email,
                 'telefono'=>$telefono,
                 'whatsapp'=>$whatsapp,
                 'celular'=>$celular,
                 'horarios'=>$horarios,
                  'descripcion' => $descripcion,
                   'url_maps' => $url,
                    'logo' => $logo,
                     'facebook' => $facebook,
                     'twitter'=> $twitter,
                     'status'=>$status
);

                  
              $query=$this->db->insert('establecimientos', $data); 
              return $query;

        }

//no srive aunnn
        
        public function eliminar($id)
        {
 $data = array('status'=>2);
 $this->db->where('id_establecimiento', $id);
 $query=$this->db->update('establecimientos', $data); 
 return $query;

        }


         public function actualizar($nombre,$direccion,$cp,$sitio,$email,$descripcion,$url,$logo,$telefono,$whatsapp,$celular,$horarios,$facebook,$twitter,$status,$puntos,$id)
        
        {
             $data = array(
               'nombre_establecimiento' => $nombre,
               'direccion' => $direccion,
               'codigo_postal' => $cp,
                'sitio_web' => $sitio,
                 'e_mail' => $email,
                 'telefono'=>$telefono,
                 'whatsapp'=>$whatsapp,
                 'celular'=>$celular,
                 'horarios'=>$horarios,
                  'descripcion' => $descripcion,
                   'url_maps' => $url,
                    'logo' => $logo,
                     'facebook' => $facebook,
                     'twitter'=> $twitter,
                     'status'=>$status,
                     'puntos'=>$puntos
);

                     $this->db->where('id_establecimiento', $id);
              $query=$this->db->update('establecimientos', $data); 

                return $query;
        }

        public function get_user($usuario,$pass)
        {
                $sql = "SELECT * FROM admin WHERE usuario ='".$usuario."' AND password = '".$pass."';"; 
                $query=$this->db->query($sql);
                return $query->result();
        }


        public function get_user_all($empresa)
        {
                $sql = "SELECT * FROM establecimientos WHERE id_establecimiento ='".$empresa."';"; 
                $query=$this->db->query($sql);
                return $query->result();
        }

        public function get_all()
        {

                $sql = "SELECT * FROM establecimientos;"; 
                $query=$this->db->query($sql);
                return $query->result();

        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

        public function getadmins()
        {
                $sql = "SELECT * FROM admin";
                $query=$this->db->query($sql);
                return $query->result();

        }
        public function cambioadmin($usuario,$password,$id)
        {


             $data = array(
               'usuario' => $usuario,
               'password' => $password
);

                     $this->db->where('id_admin', $id);
              $query=$this->db->update('admin', $data); 

                return $query;


        }

        public function agregaradmin($usuario,$pass)
        {
                  $data = array(
               'usuario' => $usuario,
               'password' => $pass
                );

                   $query=$this->db->insert('admin', $data); 
                    return $query;

        }

}