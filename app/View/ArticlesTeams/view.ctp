<div class="articlesTeams view">
<h2><?php echo __('Articles Team'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($articlesTeam['ArticlesTeam']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articlesTeam['Article']['title'], array('controller' => 'articles', 'action' => 'view', $articlesTeam['Article']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articlesTeam['Team']['name'], array('controller' => 'teams', 'action' => 'view', $articlesTeam['Team']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Articles Team'), array('action' => 'edit', $articlesTeam['ArticlesTeam']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Articles Team'), array('action' => 'delete', $articlesTeam['ArticlesTeam']['id']), array(), __('Are you sure you want to delete # %s?', $articlesTeam['ArticlesTeam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles Teams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articles Team'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
