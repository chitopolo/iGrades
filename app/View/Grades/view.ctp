<div class="grades view">
<h2><?php echo __('Grade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grade['Student']['paterno'], array('controller' => 'students', 'action' => 'view', $grade['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grade['Subject']['registro'], array('controller' => 'subjects', 'action' => 'view', $grade['Subject']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materia'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['materia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teacher'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grade['Teacher']['nombre'], array('controller' => 'teachers', 'action' => 'view', $grade['Teacher']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesor'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['profesor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P1'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['p1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P2'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['p2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ef'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['ef']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tp'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['tp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ti'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['ti']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dc'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['dc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nf'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['nf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Si'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['si']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condicion'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['condicion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modulo'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['modulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created At'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['created_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated At'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['updated_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grade'), array('action' => 'edit', $grade['Grade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grade'), array('action' => 'delete', $grade['Grade']['id']), null, __('Are you sure you want to delete # %s?', $grade['Grade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>
