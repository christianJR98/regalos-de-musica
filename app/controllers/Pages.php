<?php
    class Pages extends Controller {
        public function __construct(){
            $this->categoria = $this->model('Categoria');
        }
        
        public function index(){
            $categorias = $this->categoria->getCategorias();

            $data = [
                'title'=> 'OPP MVC',
                'categorias'=>$categorias
            ];

            $this->view('pages/index',$data);
        }

        public function politicaCookies(){
            $this->view('pages/politica_de_cookies');
        }
        
    }