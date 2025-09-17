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
        //Funções de APIs
    }
?>