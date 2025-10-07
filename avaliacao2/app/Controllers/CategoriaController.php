<?php
    namespace App\Controllers;

    use App\Views\Render;

    class CategoriaController{
        //Funções de Views
        public function index(): string{
            $title = "Categorias";
            $categorias = $_SESSION['categorias'];
            return (new Render())->render('categorias/index', compact('title', "categorias"));
        }

        public function criar(): string{
            $title = "Criar Categorias";
            return (new Render())->render('categorias/criar', compact('title'));
        }

        public function ver(int $id): string{
            $title = "Ver Categorias";
            $categoria = array_values(array_filter($_SESSION['categorias'], fn($item)=>$item['id'] == $id))[0] ?? NULL;
            return (new Render())->render('categorias/ver', compact('title', 'categoria'));
        }

        //Funções de APIs
        public function list(){
            //Retornar JSON
            header('Content-Type: application/json; charset=utf-8');
            return json_encode($_SESSION['categorias']);
        }

        public function create(){
            if(isset($_POST['nome'])){
                //AutoIncremento 
                $id = count(array_column($_SESSION['categorias'], 'id')) +1;
                //Adicionando Nova Categoria
                $_SESSION['categorias'][] = ['id' => $id, 'nome' => $_POST['nome']];
            }
        }

        public function delete(int $id){
            foreach($_SESSION['categorias'] as $key => $item){
                if($item['id'] == $id){
                    //Remover Valor de Variável
                    unset($_SESSION['categorias'][$key]);
                    break;
                }               
            }
        }
    }
?>