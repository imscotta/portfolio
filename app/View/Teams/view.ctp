<div class="row">
  <div class="col-md-12">
	<h2><?php echo $team['Team']['name']; ?></h2>
</div>
</div>
<div class="row">
  <div class="col-md-4">
<?php //debug($ftitle); ?>
<div class="actions">
<h3> <center>Top Articles</center></h3>
<table class="table">
<tr><th>Recent</th><th>Popular</th><th>Rating</th></tr>
	<?php 
foreach ($articles as $article): ?>
<tr><td colspan="3"><b><?php echo $this->Html->link(__($article['Article']['title']), array('controller' => 'articles', 'action' => 'view', $article['Article']['id'])); ?></b><br>
<p><font size="1">
<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> (Time since added)
<span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> (Calculated Rating)
<span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> (Comments)
</font></p>
</td></tr>
<?php endforeach; ?>
</table>

</table>

</p>

<p> Section Description:</p>
<?php debug($articles); ?>

<h3> Insert table with list of articles</h3>
<p> Artcile previews should contain:
	image
	header
	time since published
	Possible:
		Ratings for 
			popularity
			rating
<br><br>
Different filters at tob of column:
	Most Recent
	Most Comments
	Highest Rating


<div class="related">
	<h3><?php echo __('Squad'); ?></h3>
	<?php if (!empty($team['Player'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('Dob'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($team['Player'] as $player): ?>
		<tr>
			<td><?php echo $player['last_name']; ?>, <?php echo $player['first_name']; ?></td>
			<td><?php echo $player['position']; ?></td>
			<td><?php echo $player['dob']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'players', 'action' => 'view', $player['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'players', 'action' => 'edit', $player['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'players', 'action' => 'delete', $player['id']), array(), __('Are you sure you want to delete # %s?', $player['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>


	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Keywords'), array('controller' => 'keywords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Keyword'), array('controller' => 'keywords', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
  <div class="col-md-8">
<div class="articles index">
<b>Top Story:</b>
<p><font size="36px"><b><?php echo $this->Html->link(__($ftitle), array('controller' => 'articles', 'action' => 'view', $fid)); ?></b></font></p>
<div class="panel panel-default">
  <div class="panel-body">
    <?php echo $fdescription; ?>
  </div>
</div>




Sort articles by teams and players and hottest topic

<p> Add shortcuts for filters to sort articles by banter, tekkers and news. Add more for players and teams. <br><br>his could possibly be  second navbar <br><br> Article view should include image, header, source, text description, comments, ratings, thumbs up and down <br><br>

Feature article is set by default, if user is logged in, can be different. Feature article data passed as array to view

</p>



	<h2><?php echo __('Articles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('rating'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($articles as $article): ?>
	<tr>
		<td><?php echo h($article['Article']['id']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['title']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['link']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['rating']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $article['Article']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $article['Article']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $article['Article']['id']), array(), __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?>
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

</div>
</div>


