<div class="studentsSubjects index">
	<h2><?php echo __('Students Subjects'); ?></h2>
	<table cell = "table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('subject_id'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($studentsSubjects as $studentsSubject): ?>
	<tr>
		<td><?php echo h($studentsSubject['StudentsSubject']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($studentsSubject['Subject']['registro'], array('controller' => 'subjects', 'action' => 'view', $studentsSubject['Subject']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($studentsSubject['Student']['paterno'], array('controller' => 'students', 'action' => 'view', $studentsSubject['Student']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $studentsSubject['StudentsSubject']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentsSubject['StudentsSubject']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $studentsSubject['StudentsSubject']['id']), null, __('Are you sure you want to delete # %s?', $studentsSubject['StudentsSubject']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Students Subject'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
