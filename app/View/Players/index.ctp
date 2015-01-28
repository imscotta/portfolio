<div class="players index">
	<h2><?php echo __('Players'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('dob'); ?></th>
			<th><?php echo $this->Paginator->sort('social_link_1'); ?></th>
			<th><?php echo $this->Paginator->sort('social_link_2'); ?></th>
			<th><?php echo $this->Paginator->sort('social_link_3'); ?></th>
			<th><?php echo $this->Paginator->sort('team_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($players as $player): ?>
	<tr>
		<td><?php echo h($player['Player']['id']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['dob']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['social_link_1']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['social_link_2']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['social_link_3']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($player['Team']['name'], array('controller' => 'teams', 'action' => 'view', $player['Team']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $player['Player']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $player['Player']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $player['Player']['id']), array(), __('Are you sure you want to delete # %s?', $player['Player']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Player'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
