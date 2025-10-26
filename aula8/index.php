<?php 
    require_once __DIR__ . "/vendor/autoload.php";  

    use App\Services\ProductService;

    $productService = new ProductService();

    #Inserir Valor
    #echo $productService->create("Teclado", 59.99, 10);

    #Atualizar Valor
    #echo $productService->update(1, "Mouse", 29.99, 5);

    #Deletar Valor
    #echo $productService->delete(1);

    #Listar Valores
    $products = $productService->list();
    print_r($products);
?>
