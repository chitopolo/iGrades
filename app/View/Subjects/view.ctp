<div class="subjects view">
<h2><?php echo __('Subject'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registro'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['registro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sigla'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['sigla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materia'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['materia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horario'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['horario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aula'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['aula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created At'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['created_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated At'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['updated_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subject'), array('action' => 'edit', $subject['Subject']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subject'), array('action' => 'delete', $subject['Subject']['id']), null, __('Are you sure you want to delete # %s?', $subject['Subject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Grades'); ?></h3>
	<?php if (!empty($subject['Grade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Subject Id'); ?></th>
		<th><?php echo __('Materia'); ?></th>
		<th><?php echo __('Teacher Id'); ?></th>
		<th><?php echo __('Profesor'); ?></th>
		<th><?php echo __('P1'); ?></th>
		<th><?php echo __('P2'); ?></th>
		<th><?php echo __('Ef'); ?></th>
		<th><?php echo __('Tp'); ?></th>
		<th><?php echo __('Ti'); ?></th>
		<th><?php echo __('Dc'); ?></th>
		<th><?php echo __('Nf'); ?></th>
		<th><?php echo __('Si'); ?></th>
		<th><?php echo __('Condicion'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Modulo'); ?></th>
		<th><?php echo __('Created At'); ?></th>
		<th><?php echo __('Updated At'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subject['Grade'] as $grade): ?>
		<tr>
			<td><?php echo $grade['id']; ?></td>
			<td><?php echo $grade['student_id']; ?></td>
			<td><?php echo $grade['nombre']; ?></td>
			<td><?php echo $grade['subject_id']; ?></td>
			<td><?php echo $grade['materia']; ?></td>
			<td><?php echo $grade['teacher_id']; ?></td>
			<td><?php echo $grade['profesor']; ?></td>
			<td><?php echo $grade['p1']; ?></td>
			<td><?php echo $grade['p2']; ?></td>
			<td><?php echo $grade['ef']; ?></td>
			<td><?php echo $grade['tp']; ?></td>
			<td><?php echo $grade['ti']; ?></td>
			<td><?php echo $grade['dc']; ?></td>
			<td><?php echo $grade['nf']; ?></td>
			<td><?php echo $grade['si']; ?></td>
			<td><?php echo $grade['condicion']; ?></td>
			<td><?php echo $grade['fecha']; ?></td>
			<td><?php echo $grade['modulo']; ?></td>
			<td><?php echo $grade['created_at']; ?></td>
			<td><?php echo $grade['updated_at']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grades', 'action' => 'view', $grade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grades', 'action' => 'edit', $grade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grades', 'action' => 'delete', $grade['id']), null, __('Are you sure you want to delete # %s?', $grade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Students'); ?></h3>
	<?php if (!empty($subject['Student'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Paterno'); ?></th>
		<th><?php echo __('Materno'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Celular'); ?></th>
		<th><?php echo __('Mail'); ?></th>
		<th><?php echo __('Curso'); ?></th>
		<th><?php echo __('Nivel'); ?></th>
		<th><?php echo __('Uss'); ?></th>
		<th><?php echo __('Pass'); ?></th>
		<th><?php echo __('Nacimiento'); ?></th>
		<th><?php echo __('Created At'); ?></th>
		<th><?php echo __('Updated At'); ?></th>
		<th><?php echo __('Idp'); ?></th>
		<th><?php echo __('Password Digest'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subject['Student'] as $student): ?>
		<tr>
			<td><?php echo $student['id']; ?></td>
			<td><?php echo $student['paterno']; ?></td>
			<td><?php echo $student['materno']; ?></td>
			<td><?php echo $student['nombre']; ?></td>
			<td><?php echo $student['direccion']; ?></td>
			<td><?php echo $student['telefono']; ?></td>
			<td><?php echo $student['celular']; ?></td>
			<td><?php echo $student['mail']; ?></td>
			<td><?php echo $student['curso']; ?></td>
			<td><?php echo $student['nivel']; ?></td>
			<td><?php echo $student['uss']; ?></td>
			<td><?php echo $student['pass']; ?></td>
			<td><?php echo $student['nacimiento']; ?></td>
			<td><?php echo $student['created_at']; ?></td>
			<td><?php echo $student['updated_at']; ?></td>
			<td><?php echo $student['idp']; ?></td>
			<td><?php echo $student['password_digest']; ?></td>
			<td><?php echo $student['image']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'students', 'action' => 'view', $student['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'students', 'action' => 'edit', $student['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'students', 'action' => 'delete', $student['id']), null, __('Are you sure you want to delete # %s?', $student['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
