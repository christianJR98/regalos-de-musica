<?php
    class Productos extends Controller{
        public function __construct(){
            $this->categoria = $this->model('Categoria');
            $this->producto = $this->model('Producto');
        }
        
        public function index($categoria = 'falso'){
            if($categoria == 'falso'){
                redirect('');
            }

            // Agregar mas categorias
            $categoriasPosibles = array('tazas','kalimbas','auriculares','almohadas','llaveros','camisas','collares','calcetines','separadores','flautas','aretes','anillos','pulseras','bufandas','vestidos','leggins','blusas','decoracion');

            $busqueda = array_search($categoria,$categoriasPosibles);

            if(false !== $busqueda){
                $ruta = 'productos/'.$categoria;

                $idCategoria = $this->categoria->getIdCategoria($categoria);

                $productos = $this->producto->getProductosPorIdCategoria($idCategoria);

                $otrosProducto = $this->producto->getOtrosProductos($categoria);

                $data = [
                    'productos' => $productos,
                    'otrosProductos' => $otrosProducto
                ];

                $this->view($ruta,$data);
            }else{
                redirect('');
            }
        }

    }