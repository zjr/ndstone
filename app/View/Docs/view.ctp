<div class="docs view">
<h2><?php  echo __('Doc'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($doc['Doc']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($doc['User']['id'], array('controller' => 'users', 'action' => 'view', $doc['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($doc['Doc']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($doc['Doc']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($doc['Doc']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($doc['Doc']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doc'), array('action' => 'edit', $doc['Doc']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doc'), array('action' => 'delete', $doc['Doc']['id']), null, __('Are you sure you want to delete # %s?', $doc['Doc']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Docs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
