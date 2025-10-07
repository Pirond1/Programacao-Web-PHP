<div>
    <?php if(!$categoria): ?>
        <p>Categoria Não Encontrada!</p>
    <?php else: ?>
        <h2>Categoria #<?= $categoria['id'] ?></h2>  
        <p>Nome: <?= $categoria['nome'] ?></p>  
    <?php endif; ?>
    <br/>
    <form action="/Programacao-Web-PHP/avaliacao2/categorias">
        <button>Voltar</button>
    </form>
</div>