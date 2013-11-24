<div class="subjectsTeachers view">
<h2><?php echo __('Subjects Teacher'); ?></h2>
	<dl>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subjectsTeacher['Subject']['registro'], array('controller' => 'subjects', 'action' => 'view', $subjectsTeacher['Subject']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teacher'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subjectsTeacher['Teacher']['nombre'], array('controller' => 'teachers', 'action' => 'view', $subjectsTeacher['Teacher']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subjects Teacher'), array('action' => 'edit', $subjectsTeacher['SubjectsTeacher']['teacher_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subjects Teacher'), array('action' => 'delete', $subjectsTeacher['SubjectsTeacher']['teacher_id']), null, __('Are you sure you want to delete # %s?', $subjectsTeacher['SubjectsTeacher']['teacher_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects Teachers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subjects Teacher'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>
