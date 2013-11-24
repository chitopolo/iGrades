<div class="notices form">
<?php echo $this->Form->create('Notice'); ?>
	<fieldset>
		<legend><?php echo __('Add Notice'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
		echo $this->Form->input('published');
		echo $this->Form->input('author');
		echo $this->Form->input('image');
		echo $this->Form->input('created_at');
		echo $this->Form->input('updated_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Notices'), array('action' => 'index')); ?></li>
	</ul>
</div>
