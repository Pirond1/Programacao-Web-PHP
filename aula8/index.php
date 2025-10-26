<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Services\ProductService;

// chamar a classe
$productService = new ProductService();

// inserir valor
// echo $productService->create(
//     'Teclado',
//     59.99,
//     10
// );

// atualizar valor
// echo $productService->update(
//     1,
//     'Mouse',
//     29.99,
//     5
// );

// deletar valor
// echo $productService->delete(1);

// listar valores
// $products = $productService->list();
// exemplo com filtro (EXTRA)
// $products = $productService->list("teclado");
// print_r($products);
