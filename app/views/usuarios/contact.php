<?php $this->layout("master"); ?>

<h1>Usuários</h1>


<table class="table table-hover ">
	<div class="mb-3">
		<a href="/create" class="btn btn-primary">Cadastrar</a>
	</div>
	<div>
		<?php if (isset($msg)) : ?>
			<div class="alert alert-success" role="alert">
				<?= $msg ?>
			</div>
		<?php endif; ?>
	</div>
	<table class="table table-hover">
		<tr>
			<th>Codigo</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Ações</th>
		</tr>
		<?php if (empty($user)) : ?>
			<tr>
				<td colspan="3">Nenhum usuário cadastrado</td>
			</tr>
		<?php else : ?>
			<?php foreach ($user as $u) : ?>
				<tr>
					<td><?= $u['id'] ?></td>
					<td><?= $u['nome'] ?></td>
					<td><?= $u['email'] ?></td>
					<td>
						<a href="/edit?id=<?= $u['id'] ?>" class="btn btn-warning">Editar</a>
						<a href="/delete?id=<?= $u['id'] ?>" class="btn btn-danger">Excluir</a>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
	</table>