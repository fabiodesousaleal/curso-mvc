<?php require __DIR__.'/../inicio-html.php'; ?>

    <form ACTION="/salvar-curso" method="POST">
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" class="form-control">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>

<?php require __DIR__.'/../fim-html.php'; ?>