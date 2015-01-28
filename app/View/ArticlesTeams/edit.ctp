<div class="articlesTeams form">
<?php echo $this->Form->create('ArticlesTeam'); ?>
	<fieldset>
		<legend><?php echo __('Edit Articles Team'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('article_id');
		echo $this->Form->input('team_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ArticlesTeam.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ArticlesTeam.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Articles Teams'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
