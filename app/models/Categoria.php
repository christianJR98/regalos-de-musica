<?php 
    class Categoria{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getCategorias(){
            // My query
            $this->db->query('SELECT * FROM categorias');
            $results = $this->db->resultSet();

            

            // Check row 
            if($this->db->rowCount() > 0){
                return $results;
            }else{
                return false;
            }
        }

        public function getIdCategoria($categoria){
            // My query
            $this->db->query('SELECT * FROM categorias WHERE nombre_ruta = :categoria');

            $this->db->bind(':categoria', $categoria);

            $fila = $this->db->single();

            // Check row 
            if($this->db->rowCount() > 0){
                return $fila->id;
            }else{
                return false;
            }
        }

    }