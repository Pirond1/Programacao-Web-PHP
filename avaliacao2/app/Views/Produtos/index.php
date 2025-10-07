<p>Produtos</p>

<ul>
    <?php foreach($produtos as $item): ?>
    <li>
        <a href="/Programacao-Web-PHP/avaliacao2/produtos/ver?id=<?= $item['id'] ?>">
        <?= $item['nome'] ?>
        </a>
        <form action="/Programacao-Web-PHP/avaliacao2/api/produtos/deletar" method="POST">
            <input type="hidden" name="id" value="<?= $item["id"] ?>"/>
            <button type="submit">Excluir</button>
        </form>
    </li>
    <?php endforeach; ?>
    <br/>
    <form action="/Programacao-Web-PHP/avaliacao2/produtos/criar">
        <button>Criar</button>
    </form>
    <form action="/Programacao-Web-PHP/avaliacao2/categorias">
        <button>Categorias</button>
    </form>
</ul>