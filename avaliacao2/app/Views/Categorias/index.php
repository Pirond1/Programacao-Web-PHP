<p>Categorias</p>

<ul>
    <?php foreach($categorias as $item): ?>
    <li>
        <a href="/Programacao-Web-PHP/avaliacao2/categorias/ver?id=<?= $item['id'] ?>">
        <?= $item['nome'] ?>
        </a>
        <form action="/Programacao-Web-PHP/avaliacao2/api/categorias/deletar" method="POST">
            <input type="hidden" name="id" value="<?= $item["id"] ?>"/>
            <button type="submit">Excluir</button>
        </form>
    </li>
    <?php endforeach; ?>
    <br/>
    <form action="/Programacao-Web-PHP/avaliacao2/categorias/criar">
        <button>Criar</button>
    </form>
    <form action="/Programacao-Web-PHP/avaliacao2/produtos">
        <button>Produtos</button>
    </form>
</ul>