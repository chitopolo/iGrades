<div class="grades form">
<?php echo $this->Form->create('Grade'); ?>
	<fieldset>
		<legend><?php echo __('Add Grade'); ?></legend>
	<?php
		echo $this->Form->input('student_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('subject_id');
		echo $this->Form->input('materia');
		echo $this->Form->input('teacher_id');
		echo $this->Form->input('profesor');
		echo $this->Form->input('p1');
		echo $this->Form->input('p2');
		echo $this->Form->input('ef');
		echo $this->Form->input('tp');
		echo $this->Form->input('ti');
		echo $this->Form->input('dc');
		echo $this->Form->input('nf');
		echo $this->Form->input('si');
		echo $this->Form->input('condicion');
		echo $this->Form->input('fecha');
		echo $this->Form->input('modulo');
		echo $this->Form->input('created_at');
		echo $this->Form->input('updated_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Grades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>
