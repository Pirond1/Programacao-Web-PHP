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
            $categoria = array_values(array_filter($_SESSION['categorias'], fn(item)=>$item['id'] == $id))[0] ?? NULL;
            return (new Render())->render('categorias/ver', compact('title', 'categoria'));
        }
        //Funções de APIs
    }
?>