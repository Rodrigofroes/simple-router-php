<?php $this->layout("master"); ?>

<h1>Alteração de usuário</h1>

<div>
    <form action="/edit" method="post">
        <div class="d-flex">
            <input type="hidden" name="id" value="<?= $usuario['id']?>">
            <div class="mb-3 p-2">
                <label for="username" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="username" value="<?= $usuario['nome']?>" aria-describedby="emailHelp" name="name">
            </div>
            <div class="mb-3 p-2">
                <label for="userEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="userEmail" value="<?= $usuario['email']?>" aria-describedby="emailHelp" name="email">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </form>
</div>