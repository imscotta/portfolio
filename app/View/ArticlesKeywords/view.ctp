<div class="articlesKeywords view">
<h2><?php echo __('Articles Keyword'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($articlesKeyword['ArticlesKeyword']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articlesKeyword['Article']['title'], array('controller' => 'articles', 'action' => 'view', $articlesKeyword['Article']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Keyword'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articlesKeyword['Keyword']['id'], array('controller' => 'keywords', 'action' => 'view', $articlesKeyword['Keyword']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Articles Keyword'), array('action' => 'edit', $articlesKeyword['ArticlesKeyword']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Articles Keyword'), array('action' => 'delete', $articlesKeyword['ArticlesKeyword']['id']), array(), __('Are you sure you want to delete # %s?', $articlesKeyword['ArticlesKeyword']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles Keywords'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articles Keyword'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Keywords'), array('controller' => 'keywords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Keyword'), array('controller' => 'keywords', 'action' => 'add')); ?> </li>
	</ul>
</div>
