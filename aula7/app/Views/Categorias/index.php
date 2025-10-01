<p>Categorias</p>

<ul>
    <?php foreach($categorias as $item): ?>
    <li>
        <a href="/Programacao-Web-PHP/aula7/categorias/ver?id=<?= $item['id'] ?>">
        <?= $item['nome'] ?>
        </a>
        <form action="/Programacao-Web-PHP/aula7/api/categorias/deletar" method="POST">
            <input type="hidden" name="id" value="<?= $item["id"] ?>"/>
            <button type="submit">Excluir</button>
        </form>
    </li>
    <?php endforeach; ?>
</ul>