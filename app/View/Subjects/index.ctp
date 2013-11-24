<div class="subjects index">
	<h2><?php echo __('Subjects'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('registro'); ?></th>
			<th><?php echo $this->Paginator->sort('sigla'); ?></th>
			<th><?php echo $this->Paginator->sort('materia'); ?></th>
			<th><?php echo $this->Paginator->sort('horario'); ?></th>
			<th><?php echo $this->Paginator->sort('semestre'); ?></th>
			<th><?php echo $this->Paginator->sort('aula'); ?></th>
			<th><?php echo $this->Paginator->sort('created_at'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_at'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subjects as $subject): ?>
	<tr>
		<td><?php echo h($subject['Subject']['id']); ?>&nbsp;</td>
		<td><?php echo h($subject['Subject']['registro']); ?>&nbsp;</td>
		<td><?php echo h($subject['Subject']['sigla']); ?>&nbsp;</td>
		<td><?php echo h($subject['Subject']['materia']); ?>&nbsp;</td>
		<td><?php echo h($subject['Subject']['horario']); ?>&nbsp;</td>
		<td><?php echo h($subject['Subject']['semestre']); ?>&nbsp;</td>
		<td><?php echo h($subject['Subject']['aula']); ?>&nbsp;</td>
		<td><?php echo h($subject['Subject']['created_at']); ?>&nbsp;</td>
		<td><?php echo h($subject['Subject']['updated_at']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subject['Subject']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subject['Subject']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subject['Subject']['id']), null, __('Are you sure you want to delete # %s?', $subject['Subject']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Subject'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
