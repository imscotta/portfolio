<div class="articlesKeywords index">
	<h2><?php echo __('Articles Keywords'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('article_id'); ?></th>
			<th><?php echo $this->Paginator->sort('keyword_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($articlesKeywords as $articlesKeyword): ?>
	<tr>
		<td><?php echo h($articlesKeyword['ArticlesKeyword']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($articlesKeyword['Article']['title'], array('controller' => 'articles', 'action' => 'view', $articlesKeyword['Article']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($articlesKeyword['Keyword']['id'], array('controller' => 'keywords', 'action' => 'view', $articlesKeyword['Keyword']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $articlesKeyword['ArticlesKeyword']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $articlesKeyword['ArticlesKeyword']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $articlesKeyword['ArticlesKeyword']['id']), array(), __('Are you sure you want to delete # %s?', $articlesKeyword['ArticlesKeyword']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Articles Keyword'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Keywords'), array('controller' => 'keywords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Keyword'), array('controller' => 'keywords', 'action' => 'add')); ?> </li>
	</ul>
</div>
