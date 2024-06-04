<?php $this->layout("master"); ?>

<h1>Cadastrar Usuário</h1>

<div>
    <div>
        <?php if (isset($msg)) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $msg ?>
            </div>
        <?php endif; ?>
    </div>
    <form action="/contact" method="post">
        <div class="d-flex">
            <div class="mb-3 p-2">
                <label for="username" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="name">
            </div>
            <div class="mb-3 p-2">
                <label for="userEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" name="email">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </form>
</div>