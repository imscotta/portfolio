<div class="usersPlayers view">
<h2><?php echo __('Users Player'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usersPlayer['UsersPlayer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersPlayer['User']['id'], array('controller' => 'users', 'action' => 'view', $usersPlayer['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Player'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersPlayer['Player']['id'], array('controller' => 'players', 'action' => 'view', $usersPlayer['Player']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Player'), array('action' => 'edit', $usersPlayer['UsersPlayer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Users Player'), array('action' => 'delete', $usersPlayer['UsersPlayer']['id']), array(), __('Are you sure you want to delete # %s?', $usersPlayer['UsersPlayer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Players'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Player'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
