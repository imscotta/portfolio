<div class="usersTeams view">
<h2><?php echo __('Users Team'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usersTeam['UsersTeam']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersTeam['User']['id'], array('controller' => 'users', 'action' => 'view', $usersTeam['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersTeam['Team']['name'], array('controller' => 'teams', 'action' => 'view', $usersTeam['Team']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Team'), array('action' => 'edit', $usersTeam['UsersTeam']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Users Team'), array('action' => 'delete', $usersTeam['UsersTeam']['id']), array(), __('Are you sure you want to delete # %s?', $usersTeam['UsersTeam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Teams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Team'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
