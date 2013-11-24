<div class="notices view">
<h2><?php echo __('Notice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($notice['Notice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($notice['Notice']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($notice['Notice']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published'); ?></dt>
		<dd>
			<?php echo h($notice['Notice']['published']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($notice['Notice']['author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($notice['Notice']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created At'); ?></dt>
		<dd>
			<?php echo h($notice['Notice']['created_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated At'); ?></dt>
		<dd>
			<?php echo h($notice['Notice']['updated_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Notice'), array('action' => 'edit', $notice['Notice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Notice'), array('action' => 'delete', $notice['Notice']['id']), null, __('Are you sure you want to delete # %s?', $notice['Notice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Notices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notice'), array('action' => 'add')); ?> </li>
	</ul>
</div>
