<div class="grades index">
	<h2><?php echo __('Grades'); ?></h2>
	<table class = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('subject_id'); ?></th>
			<th><?php echo $this->Paginator->sort('materia'); ?></th>
			<th><?php echo $this->Paginator->sort('teacher_id'); ?></th>
			<th><?php echo $this->Paginator->sort('profesor'); ?></th>
			<th><?php echo $this->Paginator->sort('p1'); ?></th>
			<th><?php echo $this->Paginator->sort('p2'); ?></th>
			<th><?php echo $this->Paginator->sort('ef'); ?></th>
			<th><?php echo $this->Paginator->sort('tp'); ?></th>
			<th><?php echo $this->Paginator->sort('ti'); ?></th>
			<th><?php echo $this->Paginator->sort('dc'); ?></th>
			<th><?php echo $this->Paginator->sort('nf'); ?></th>
			<th><?php echo $this->Paginator->sort('si'); ?></th>
			<th><?php echo $this->Paginator->sort('condicion'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('modulo'); ?></th>
			<th><?php echo $this->Paginator->sort('created_at'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_at'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grades as $grade): ?>
	<tr>
		<td><?php echo h($grade['Grade']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grade['Student']['paterno'], array('controller' => 'students', 'action' => 'view', $grade['Student']['id'])); ?>
		</td>
		<td><?php echo h($grade['Grade']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grade['Subject']['registro'], array('controller' => 'subjects', 'action' => 'view', $grade['Subject']['id'])); ?>
		</td>
		<td><?php echo h($grade['Grade']['materia']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grade['Teacher']['nombre'], array('controller' => 'teachers', 'action' => 'view', $grade['Teacher']['id'])); ?>
		</td>
		<td><?php echo h($grade['Grade']['profesor']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['p1']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['p2']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['ef']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['tp']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['ti']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['dc']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['nf']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['si']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['condicion']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['modulo']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['created_at']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['updated_at']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $grade['Grade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $grade['Grade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grade['Grade']['id']), null, __('Are you sure you want to delete # %s?', $grade['Grade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Grade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>
