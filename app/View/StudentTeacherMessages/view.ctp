<div class="studentTeacherMessages view">
<h2><?php echo __('Student Teacher Message'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentTeacherMessage['StudentTeacherMessage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentTeacherMessage['Student']['paterno'], array('controller' => 'students', 'action' => 'view', $studentTeacherMessage['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teacher'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentTeacherMessage['Teacher']['nombre'], array('controller' => 'teachers', 'action' => 'view', $studentTeacherMessage['Teacher']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo h($studentTeacherMessage['StudentTeacherMessage']['subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($studentTeacherMessage['StudentTeacherMessage']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created At'); ?></dt>
		<dd>
			<?php echo h($studentTeacherMessage['StudentTeacherMessage']['created_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated At'); ?></dt>
		<dd>
			<?php echo h($studentTeacherMessage['StudentTeacherMessage']['updated_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student Teacher Message'), array('action' => 'edit', $studentTeacherMessage['StudentTeacherMessage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student Teacher Message'), array('action' => 'delete', $studentTeacherMessage['StudentTeacherMessage']['id']), null, __('Are you sure you want to delete # %s?', $studentTeacherMessage['StudentTeacherMessage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Teacher Messages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Teacher Message'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>
