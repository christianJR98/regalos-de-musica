<?php
    class Producto{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }
        
        public function getProducto($id){
            // My query
            $this->db->query('SELECT *
                              FROM productos
                              WHERE id = :id'
                            );
            $this->db->bind(':id', $id);

            $fila = $this->db->single();

            // Check row 
            if($this->db->rowCount() > 0){
                return $fila;
            }else{
                return false;
            }
        }

        public function getCategoria($id){
            // My query
            $this->db->query('SELECT *
                              FROM categorias
                              WHERE id = :id'
                            );
            $this->db->bind(':id', $id);

            $fila = $this->db->single();

            // Check row 
            if($this->db->rowCount() > 0){
                return $fila;
            }else{
                return false;
            }
        }

        private function getRestIdsProducts($categoria,$myCurrentIds){ 
            // My query
            $query = 'SELECT * FROM productos WHERE 
                      id_categoria = :categoria  
                      AND id NOT IN (' . $myCurrentIds . ')';

            $this->db->query($query);

            $this->db->bind(':categoria', $categoria);

            $resultados = $this->db->resultSet();

            $myResultStr = "";
            foreach($resultados as $fila){
                $myResultStr .= ",".strval($fila->id);
            }
            //Delete last char
            //substr_replace($myResultStr ,"",-1);

            // Check row 
            if($this->db->rowCount() > 0){
                return $myResultStr;
            }else{
                return false;
            }
        }

        public function getProductosPorIdCategoria($categoria){
            $categoria_str = $this->getCategoria($categoria)->nombre_ruta;
            
            $orden_productos = "";
            $ordenar_por_precio = false;

            switch($categoria_str){
                case 'tazas':
                    // Los dos deben ser los mismos
                    $ordenar_por_precio = true;
                    break;
                case 'kalimbas':
                    $orden_productos = "";
                    break;
                case 'auriculares':
                    $orden_productos = "";
                    break;
                case 'almohadas':
                    $orden_productos = "";
                    break;
                case 'llaveros':
                    $orden_productos = "";
                    break;
                case 'camisas':
                    $orden_productos = "";
                    break;
                case 'collares':
                    $orden_productos = "";
                    $ordenar_por_precio = true;
                    break;
                case 'calcetines':
                    $orden_productos = "";
                    break;
                case 'separadores':
                    $orden_productos = "";
                    break;
                case 'flautas':
                    $orden_productos = "";
                    break;
                case 'aretes':
                    $orden_productos = "";
                    break;
                case 'anillos':
                    $orden_productos = "";
                    break;
                case 'pulseras':
                    $orden_productos = "";
                    break;
                case 'bufandas':
                    $orden_productos = "";
                    break;
                case 'vestidos':
                    $orden_productos = "";
                    break;
                case 'leggins':
                    $orden_productos = "";
                    break;
                case 'blusas':
                    $orden_productos = "";
                    break;
                case 'decoracion':
                    // Se ponen los ids de los productos
                    $orden_productos = "193,196". $this->getRestIdsProducts($categoria,"193,196");
                    break;
                default:
                    return false;
            }

            $query = 'SELECT * FROM productos WHERE id_categoria = :categoria AND precio != 0'; //. $orden_productos != "" ? 'ORDER BY FIELD (id,'. $orden_productos .')' : '';
            
            if($ordenar_por_precio){
                $query .= ' ORDER BY precio';
            }
            else if( $orden_productos != ''){
                $query .= ' ORDER BY FIELD (id,'. $orden_productos .')';
            }
            
            // My query
            $this->db->query($query);

            $this->db->bind(':categoria', $categoria);

            


            $results = $this->db->resultSet();

            // Check row 
            if($this->db->rowCount() > 0){
                return $results;
            }else{
                return false;
            }
        }

        public function getOtrosProductos($categoria){
            $lista_productos;

            switch($categoria){
                case 'tazas':
                    $lista_productos = "46,22,64,93,111,96";
                    break;
                case 'kalimbas':
                    $lista_productos = "1,64,49,110,137,114";
                    break;
                case 'auriculares':
                    $lista_productos = "3,26,68,93,136,96";
                    break;
                case 'almohadas':
                    $lista_productos = "6,21,51,110,137,114";
                    break;
                case 'llaveros':
                    $lista_productos = "5,67,53,140,130,116";
                    break;
                case 'camisas':
                    $lista_productos = "4,67,53,141,130,116";
                    break;
                case 'collares':
                    $lista_productos = "12,96,34,146,155,117";
                    break;
                case 'calcetines':
                    $lista_productos = "19,133,47,87,129,121";
                    break;
                case 'separadores':
                    $lista_productos = "3,23,65,93,111,96";
                    break;
                case 'flautas':
                    $lista_productos = "20,70,37,21,102,137";
                    break;
                case 'aretes':
                    $lista_productos = "135,153,161,110,137,163";
                    break;
                case 'anillos':
                    $lista_productos = "1,64,49,110,137,114";
                    break;
                case 'pulseras':
                    $lista_productos = "5,67,53,140,130,116";
                    break;
                case 'bufandas':
                    $lista_productos = "1,64,49,110,137,114";
                    break;
                case 'vestidos':
                    $lista_productos = "136,1,34,110,137,163";
                    break;
                case 'leggins':
                    $lista_productos = "6,64,34,141,155,117";
                    break;
                case 'blusas':
                    $lista_productos = "136,1,33,110,96,163";
                    break;
                case 'decoracion':
                    $lista_productos = "1,64,49,110,137,114";
                    break;
                default:
                    return false;
            }

            // My query
            $this->db->query('SELECT *
                              FROM productos
                              WHERE id IN ('. $lista_productos.')'.
                              'ORDER BY FIELD(id,' . $lista_productos .  ')'
                            );

            $resultados = $this->db->resultSet();

            // Check row 
            if($this->db->rowCount() > 0){
                return $resultados;
            }else{
                return false;
            }
        }

    }