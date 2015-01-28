<div class="articlesPlayers view">
<h2><?php echo __('Articles Player'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($articlesPlayer['ArticlesPlayer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articlesPlayer['Article']['title'], array('controller' => 'articles', 'action' => 'view', $articlesPlayer['Article']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Player'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articlesPlayer['Player']['id'], array('controller' => 'players', 'action' => 'view', $articlesPlayer['Player']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Articles Player'), array('action' => 'edit', $articlesPlayer['ArticlesPlayer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Articles Player'), array('action' => 'delete', $articlesPlayer['ArticlesPlayer']['id']), array(), __('Are you sure you want to delete # %s?', $articlesPlayer['ArticlesPlayer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles Players'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articles Player'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
