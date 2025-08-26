<?php
    $arquivo = __DIR__ . "/anuncios.json";
    $conteudo = file_get_contents($arquivo);
    $anuncios = json_decode($conteudo, TRUE);
?>

<!DOCTYPE html>

<html>
    <header><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"/></header>
    <body>
        <div class="row">
            <?php foreach($anuncios as $anuncio){ ?>
                <div>
                    <h5><?= $anuncio['nome'] ?></h5>
                    <p>R$ <?= number_format($anuncio['preco'], 2, ',', '.') ?></p>
                </div>
            <?php } ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    </body>
</html>