

<div class="row" id="teamviewheader">
  <div class="col-md-12">
	<h1><?php echo $team['Team']['name']; ?></h1></div>
</div>
</div>
<div class="row" id="teamviewheader">
  <div class="col-md-12">
    <ul class="nav nav-tabs nav-justified  nav-fixed-top" id="teamviewheadlist">
      <li><a href="#" class="active">Home</a></li>
      <li><?php echo $this->Html->link(__('News'), array('controller' => 'teams', 'action' => 'news', $team['Team']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Stats'), array('controller' => 'teams', 'action' => 'stats', $team['Team']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Fantasy'), array('controller' => 'teams', 'action' => 'fantasy', $team['Team']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Blog'), array('controller' => 'teams', 'action' => 'blog', $team['Team']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Social Media'), array('controller' => 'teams', 'action' => 'socialmedia', $team['Team']['id'])); ?></li>
    </ul>
<!--
Insert team tool bar with options:

Team News: opens list of articles
Team Stats: opens list of team stats
Fantasy: opens list of players fantasy stats
Blog: Blog on team, recent updates
Social media: Show latest videos or posts from teams or players
!-->
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




//Blogs will only apply to certain teams
<br><br>
//Contributors may write blogs for top teams or leagues or topics
<br><br>
//allow comments for blogs

	</div>
</div>

</div>
</div>


