<div class="subjectsTeachers index">
	<h2><?php echo __('Subjects Teachers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('subject_id'); ?></th>
			<th><?php echo $this->Paginator->sort('teacher_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subjectsTeachers as $subjectsTeacher): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($subjectsTeacher['Subject']['registro'], array('controller' => 'subjects', 'action' => 'view', $subjectsTeacher['Subject']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subjectsTeacher['Teacher']['nombre'], array('controller' => 'teachers', 'action' => 'view', $subjectsTeacher['Teacher']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subjectsTeacher['SubjectsTeacher']['teacher_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subjectsTeacher['SubjectsTeacher']['teacher_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subjectsTeacher['SubjectsTeacher']['teacher_id']), null, __('Are you sure you want to delete # %s?', $subjectsTeacher['SubjectsTeacher']['teacher_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subjects Teacher'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>
