<div>
    <?php if(!$produto): ?>
        <p>Produto Não Encontrado!</p>
    <?php else: ?>
        <h2>Produto #<?= $produto['id'] ?></h2>  
        <p>Nome: <?= $produto['nome'] ?></p>  
    <?php endif; ?>
    <br/>
    <form action="/Programacao-Web-PHP/avaliacao2/produtos">
        <button>Voltar</button>
    </form>
</div>