<h1 id="titulo"><span class="icon-users"></span>Usuarios del Sistema</h1>
<table id="lista">
	<tr>
		<td><b>Nombres y Apellidos</b></td>
		<td><b>Correo Electrónico</b></td>
		<td><b>Username</b></td>
		<td><b>Tipo de Usuario</b></td>
		<td></td>
	</tr>
	<?php foreach ($usuarios as $user): ?>
	<tr>
		<td><?= $user->nombre ?></td>
		<td><?= $user->email ?></td>
		<td><?= $user->usuario ?></td>
		<td><?= $user->tipo ?></td>
		<td>
			<?php if ($user->id != $this->session->userdata('id')): ?>
			<a href="<?= base_url() ?>usuarios/borrar/<?= $user->id ?>" title="Borrar"><span class="icon-x"></span></a>
			<?php endif ?>
		</td>
	</tr>
	<?php endforeach ?>
</table>
<?= $pagination ?>