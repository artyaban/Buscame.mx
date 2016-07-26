<?

class Categorias extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get()
        {
                $query = $this->db->get('categorias');
                return $query->result();
        }

        public function get_comercio()
        {
                 $query = $this->db->query('select * from establecimientos inner join est_cat where status=1 and cod_cat=1;');
                return $query->result();
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }
        public function insertar($categoria,$nombre)
        {       $id_establecimientoo;
              $sql = "select * from establecimientos where nombre_establecimiento=? limit 1";
              $query=$this->db->query($sql, array($nombre));
              $establecimiento=$query->result();
              foreach ($establecimiento as $key => $est) {
              $id_establecimientoo=$est->id_establecimiento;
              }


              $sql = "select * from categorias where nombre_categoria=? limit 1";
              $query=$this->db->query($sql, array($categoria));
              $categoria=$query->result();
              foreach ($categoria as $key => $cat) {
              $id_categoriaa=$cat->id_categoria;
              }

            

            $data = array(
             'cod_establecimiento' => $id_establecimientoo,
              'cod_categoria' => $id_categoriaa);

                  
             $query=$this->db->insert('est_cat', $data); 
             return $query;

        }

       
      
        

}