<div class="subjectsTeachers form">
<?php echo $this->Form->create('SubjectsTeacher'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subjects Teacher'); ?></legend>
	<?php
		echo $this->Form->input('subject_id');
		echo $this->Form->input('teacher_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SubjectsTeacher.teacher_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SubjectsTeacher.teacher_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subjects Teachers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>
