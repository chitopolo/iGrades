<div class="studentTeacherMessages index">
	<h2><?php echo __('Student Teacher Messages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th><?php echo $this->Paginator->sort('teacher_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subject'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th><?php echo $this->Paginator->sort('created_at'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_at'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($studentTeacherMessages as $studentTeacherMessage): ?>
	<tr>
		<td><?php echo h($studentTeacherMessage['StudentTeacherMessage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($studentTeacherMessage['Student']['paterno'], array('controller' => 'students', 'action' => 'view', $studentTeacherMessage['Student']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($studentTeacherMessage['Teacher']['nombre'], array('controller' => 'teachers', 'action' => 'view', $studentTeacherMessage['Teacher']['id'])); ?>
		</td>
		<td><?php echo h($studentTeacherMessage['StudentTeacherMessage']['subject']); ?>&nbsp;</td>
		<td><?php echo h($studentTeacherMessage['StudentTeacherMessage']['message']); ?>&nbsp;</td>
		<td><?php echo h($studentTeacherMessage['StudentTeacherMessage']['created_at']); ?>&nbsp;</td>
		<td><?php echo h($studentTeacherMessage['StudentTeacherMessage']['updated_at']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $studentTeacherMessage['StudentTeacherMessage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentTeacherMessage['StudentTeacherMessage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $studentTeacherMessage['StudentTeacherMessage']['id']), null, __('Are you sure you want to delete # %s?', $studentTeacherMessage['StudentTeacherMessage']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Student Teacher Message'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>
