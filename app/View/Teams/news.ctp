

<div class="row" id="teamviewheader">
  <div class="col-md-12">
	<h1><?php echo $team['Team']['name']; ?></h1></div>
</div>
</div>
<div class="row" id="teamviewheader">
  <div class="col-md-12">
    <ul class="nav nav-tabs nav-justified  nav-fixed-top" id="teamviewheadlist">
      <li><?php echo $this->Html->link(__('Home'), array('controller' => 'teams', 'action' => 'view', $team['Team']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('News'), array('controller' => 'teams', 'action' => 'news', $team['Team']['id']), array('class' => 'active')); ?></li>
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
  <div class="col-md-12">

//add filters on top or bottom, for categories

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

	<h3><?php echo __('Related Articles'); ?></h3>
	<?php if (!empty($team['Article'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Link'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($team['Article'] as $article): ?>
		<tr>
			<td><?php echo $article['id']; ?></td>
			<td><?php echo $article['title']; ?></td>
			<td><?php echo $article['link']; ?></td>
			<td><?php echo $article['rating']; ?></td>
			<td><?php echo $article['date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'articles', 'action' => 'view', $article['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'articles', 'action' => 'edit', $article['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'articles', 'action' => 'delete', $article['id']), array(), __('Are you sure you want to delete # %s?', $article['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>	
</div>

</div>


